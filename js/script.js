var mainImg = document.getElementById("mainImg");
var smallImg = document.getElementsByClassName("small-img");

for (let i = 0; i < 4; i++) {
    smallImg[i].onclick = function() {
        mainImg.src = smallImg[i].src;
    }
}
let closeButton = document.getElementById('close');
let phoneLink = document.getElementById('ph');
let menuButton = document.getElementById('menu');

closeButton.addEventListener('click', () => {
    phoneLink.style.left = '-100%'; // Move offscreen
});

menuButton.addEventListener('click', () => {
    phoneLink.style.left = '0'; // Move onscreen
});
