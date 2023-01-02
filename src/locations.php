<?php
include 'functions.php';

/**
 * Yelp Fusion API code sample.
 *
 * This program demonstrates the capability of the Yelp Fusion API
 * by using the Business Search API to query for businesses by a
 * search term and location, and the Business API to query additional
 * information about the top result from the search query.
 *
 * Please refer to https://docs.developer.yelp.com/docs/get-started
 * for the API documentation.
 *
 * Sample usage of the program:
 * `php sample.php --term="dinner" --location="San Francisco, CA"`
 */

// API key placeholders that must be filled in by users.
// You can find it on
// https://www.yelp.com/developers/v3/manage_app

class Locations
{
    public $name;
    public $address;
    public $url;
    public $imgUrl;
    public $rating;
    public $phoneNum;
    public $city;
    public $zipCode;
}

$API_KEY = "nhrlEEzhMpGsgdyjbV6PL1Vmq79Ts-95Ag7iBuvET0vkgtQI9Oe21jxBDFB4quhMNKPXLzOeDJRMU-nxY5Vj2D25Uc1jY80-8qdA04USRpGmK56WgXs-N00r0IGqY3Yx";

// Complain if credentials haven't been filled out.
assert($API_KEY, "Please supply your API key.");

// API constants, you shouldn't have to change these.
$API_HOST = "https://api.yelp.com";
$SEARCH_PATH = "/v3/businesses/search";
$BUSINESS_PATH = "/v3/businesses/";

// Defaults for our simple example.
$DEFAULT_TERM = "cafe";
$DEFAULT_LOCATION = "Selangor";
$SEARCH_LIMIT = 3;


/**
 * Makes a request to the Yelp API and returns the response
 *
 * @param    $host    The domain host of the API
 * @param    $path    The path of the API after the domain.
 * @param    $url_params    Array of query-string parameters.
 * @return   The JSON response from the request
 */
function request($host, $path, $url_params = array())
{
    // Send Yelp API Call
    try {
        $curl = curl_init();
        if (FALSE === $curl)
            throw new Exception('Failed to initialize');

        $url = $host . $path . "?" . http_build_query($url_params);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                // Capture response.
                CURLOPT_ENCODING => "",
                // Accept gzip/deflate/whatever.
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "authorization: Bearer " . $GLOBALS['API_KEY'],
                    "cache-control: no-cache",
                ),
            )
        );

        $response = curl_exec($curl);

        if (FALSE === $response)
            throw new Exception(curl_error($curl), curl_errno($curl));
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if (200 != $http_status)
            throw new Exception($response, $http_status);

        curl_close($curl);
    } catch (Exception $e) {
        trigger_error(
            sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()
            ),
            E_USER_ERROR
        );
    }

    return $response;
}

/**
 * Query the Search API by a search term and location
 *
 * @param    $term        The search term passed to the API
 * @param    $location    The search location passed to the API
 * @return   The JSON response from the request
 */
function search($term, $location)
{
    $url_params = array();

    $url_params['term'] = $term;
    $url_params['location'] = $location;
    $url_params['limit'] = $GLOBALS['SEARCH_LIMIT'];

    return request($GLOBALS['API_HOST'], $GLOBALS['SEARCH_PATH'], $url_params);
}

/**
 * Query the Business API by business_id
 *
 * @param    $business_id    The ID of the business to query
 * @return   The JSON response from the request
 */
function get_business($business_id)
{
    $business_path = $GLOBALS['BUSINESS_PATH'] . urlencode($business_id);

    return request($GLOBALS['API_HOST'], $business_path);
}

/**
 * Queries the API by the input values from the user
 *
 * @param    $term        The search term to query
 * @param    $location    The location of the business to query
 */
function query_api($term, $location, $limit)
{
    // $response = json_decode(search($term, $location));
    // $all_response = json_encode($response->businesses, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    $responses = json_decode(search($term, $location));
    $locations = array();
    $business_id = $responses->businesses[1]->id;
    $response = get_business($business_id);
    // echo $response;
    // $locations_data = json_encode(json_decode($response), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    // echo json_decode($response)->location->address1;
    // echo $locations_data;
    // echo $locations_data;
    for ($i = 0; $i < $limit; $i++) {
        $business_id = $responses->businesses[$i]->id;
        $response = get_business($business_id);
        $location_data = json_decode($response);
        $locations[$i] = new Locations();

        $locations[$i]->name = $location_data->name;
        $locations[$i]->address = $location_data->location->address1;
        $locations[$i]->zipCode = $location_data->location->zip_code;
        $locations[$i]->url = $location_data->url;
        $locations[$i]->city = $location_data->location->city;
        $locations[$i]->imgUrl = $location_data->image_url;
        $locations[$i]->phoneNum = $location_data->phone;
        $locations[$i]->rating = $location_data->rating;

    }
    // foreach ($locations as $place) {
    //     echo 'Name:' . $place->name . ' Address:' . $place->location . "\n";
    // }
    return $locations;

}

/**
 * User input is handled here
 */
$longopts = array(
    "term::",
    "location::",
);

$options = getopt("", $longopts);

$term = $options['term'] ?: $GLOBALS['DEFAULT_TERM'];
$location = $options['location'] ?: $GLOBALS['DEFAULT_LOCATION'];

$locations = query_api($term, $location, $SEARCH_LIMIT);


?>

<?= template_header('Locations') ?>

<div class="location">
    <div class="locations-main">
        <div class="location-description">
            <h2>Locations.</h2>
            <p>Tired of looking at a screen? Visit a cafe near you
                to find other coffee lovers!
            </p>
        </div>
        <video autoplay muted loop id="company-video">
            <source src="../assets/locations.mp4" type="video/mp4">
        </video>
    </div>

    <div class="places">
        <h1>Places</h1>
        <div class="info-cards location-list">
            <div class="row">
                <?php foreach ($locations as $location): ?>
                    <div class="column location-col">
                        <div class="card place" onclick="window.location='<?= $location->url ?>'">
                            <div class="face face1 loc-card">
                                <div class="place-img">
                                    <img src="<?= $location->imgUrl ?>" width="200" height="200"
                                        alt="<?= $product['name'] ?>">
                                </div>
                                <!-- <a href="<?= $location->url ?>">
                                        </a> -->
                                <div class="place-description">
                                    <span class="city">
                                        <?= $location->city ?>
                                    </span>
                                    <br>
                                    <span class="name">
                                        <?= $location->name ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- </div> -->
</div>