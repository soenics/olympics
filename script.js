// JavaScript code for animation

// Delay the animation start for 1 second
setTimeout(startAnimation, 1000);

function startAnimation() {
  const iconElement = document.querySelector('.live-icon .icon');
  iconElement.style.animationName = 'pulse';
}
