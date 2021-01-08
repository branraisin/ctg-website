// Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

setTimeout(function() {
  $('#hide').css('visibility', 'visible');
}, 2400);

setTimeout(function(){
  anime.timeline()
  .add({
    targets: '.ml6 .letter',
    translateY: ["2em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  });
}, 2300)
