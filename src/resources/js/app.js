require('./bootstrap');

function someFunction(el) {
  el.openInANewTab();
}

var img = document.querySelectorAll('img');
img.forEach((el) => {
  el.addEventListener('click', someFunction(el));
});
