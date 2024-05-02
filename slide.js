// Initialize slide index
var slideIndex = 1;

// Show initial slide
showSlides(slideIndex);

// Next/previous slide function
function plusSlides(n) {
showSlides(slideIndex += n);
}

// Slide show function
function showSlides(n) {
var slides = document.getElementsByClassName("mySlides");
if (n > slides.length) {
slideIndex = 1;
}
if (n < 1) {
slideIndex = slides.length;
}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slides[slideIndex-1].style.display = "block";
}