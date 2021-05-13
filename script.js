
/*************designs****************/

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
//  animate(n)
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var demo = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  else {
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < 6; i++) {
      demo[i].className = demo[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  demo[slideIndex-1].className += " active";
  captionText.innerHTML = demo[slideIndex-1].alt;
}
}

function animate(k) {
setInterval(function() {
    currentSlide(k);
    k++;
    if(k==7) {
     k=1
    }
  }, 2000);
}

animate(1);




/*******************about******************/

var slideIndex1 = 0;
showSlides1();

function showSlides1() {
  var i;
  var slides1 = document.getElementsByClassName("mySlides1");
  var dots1 = document.getElementsByClassName("dot");
  for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";  
  }
  slideIndex1++;
  if (slideIndex1 > 3) 
  {
    slideIndex1 = 0;
    showSlides1();
  }    
  else{
  for (i = 0; i < dots1.length; i++) {
    dots1[i].className = dots1[i].className.replace(" active", "");
  }
  slides1[slideIndex1-1].style.display = "block";  
  dots1[slideIndex1-1].className += " active";
}
  setTimeout(showSlides1, 2000); // Change image every 2 seconds
}


