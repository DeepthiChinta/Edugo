const delay = 3000; // Set the delay (in milliseconds) before the paragraph appears
const container = document.querySelector('.container');
const hiddenPara = document.querySelector('.hidden');

setTimeout(() => {
  hiddenPara.style.opacity = 1; // Set the opacity to 1 to make the paragraph visible
}, delay);
