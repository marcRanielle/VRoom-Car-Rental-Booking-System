let currentIndex = 0;
const images = document.querySelectorAll('#slider img');
const totalImages = images.length;

setInterval(() => {
  currentIndex = (currentIndex + 1) % totalImages;
  document.getElementById('slider').style.transform = `translateX(-${currentIndex * 400}px)`;
}, 3000);