let slideIndex = 1;
showSlides(slideIndex);
slidePosition(slideIndex);

function showSlides(position) {
  let images = document.getElementsByClassName("slide-item");
  for (let i = 0; i < images.length; i++) {
    const element = images[i];
    element.style.display = "none";
  }
  if (position > images.length) {
    slideIndex = 1;
  }
  if (position < 1) {
    slideIndex = images.length;
  }
  images[slideIndex - 1].style.display = "block";
}

function slideNext() {
  showSlides((slideIndex += 1));
  slidePosition(slideIndex);
}

function slidePrev() {
  showSlides((slideIndex -= 1));
  slidePosition(slideIndex);
}

function slidePosition(position) {
  showSlides((slideIndex = position));
  let slideLength = document.getElementsByClassName("slide-item").length;
  let slidePosition = `${slideIndex} / ${slideLength}`;
  document.getElementById("slide-position").innerHTML = slidePosition;
}