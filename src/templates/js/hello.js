let els = $('p');
if (els) {
   random = Math.floor(Math.random() * els.length),
   randomEl = els.eq(random);
   randomEl.css('background-color', 'red');
}