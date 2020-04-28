function openModal() {
  document.getElementById("portfolioModal").style.display = "block";
}

function closeModal() {
  document.getElementById("portfolioModal").style.display = "none";
}
 
window.addEventListener('keydown', function(e) {
    if(e.key == "Escape"){
      closeModal();
    }  
});

var slideIndex = 1;
showSlides(slideIndex);

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("modal__slides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

