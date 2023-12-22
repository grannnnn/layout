var slideIndex = 1;
showSlides(slideIndex);


function currentSlide(n){
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("slide");
  var mini = document.getElementsByClassName("mini");

  if(n > slides.lenght){
    slideIndex = 1;
  }
  if(n < 1){
    slideIndex = slides.lenght;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (var i = 0; i < mini.length; i++) {
    mini[i].className =   mini[i].className.replace("active", "");
  }

  slides[slideIndex - 1].style.display = "block";
  mini[slideIndex-1].className+= " active"
}
