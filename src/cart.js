function searchProduct() {
    input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  classList = document.getElementsByClassName('frame cart-frame');
  names = document.getElementsByClassName('name');
  for (i = 0; i < names.length; i++) {
    name = names[i].innerText;
    let className = classList[i];
    if (name.toUpperCase().indexOf(filter) > -1) {
      className.style.display = "";
    } else {
      className.style.display = "none";
    }
  }
}