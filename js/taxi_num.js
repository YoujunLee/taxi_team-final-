$(window).load(function() {
  $('body').addClass('loaded');
});

function Randomize(min, max) {
  return Math.floor(Math.random() * (max - min + 1) + min);
}

$('a').each(function() {
  $(this).css({
    'transform': 'rotate(' + Randomize(-3, 3) + 'deg)'
  });
});