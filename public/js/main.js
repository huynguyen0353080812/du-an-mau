function changeImage(id){
  let imagePath = document.getElementById(id).getAttribute('src');
  document.getElementById('avatar').setAttribute('src',imagePath);
  console.log(imagePath);
}
function show_test() {
    alert('huy');
}