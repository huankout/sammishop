const el = document.getElementById('categorybtn');

const hiddenMenu = document.getElementById('categorymenu');

const hiddenCategory1 = document.getElementById('categorymenu1');
const hiddenCategory2 = document.getElementById('categorymenu2');
const hiddenCategory3 = document.getElementById('categorymenu3');
const hiddenCategory4 = document.getElementById('categorymenu4');
const hiddenCategory5 = document.getElementById('categorymenu5');
const hiddenCategory6 = document.getElementById('categorymenu6');
const hiddenCategory7 = document.getElementById('categorymenu7');

const hiddenBoard = document.getElementById('board');
const hiddenBoard2 = document.getElementById('board2');
const hiddenBoard3 = document.getElementById('board3');
const hiddenBoard4 = document.getElementById('board4');
const hiddenBoard5 = document.getElementById('board5');
const hiddenBoard6 = document.getElementById('board6');
const hiddenBoard7 = document.getElementById('board7');

el.addEventListener('mouseover', function handleMouseOver() {
  hiddenMenu.style.display = 'block';
});

hiddenMenu.addEventListener('mouseout', function handleMouseOut() {
  hiddenMenu.style.display = 'none';
});
el.addEventListener('mouseout', function handleMouseOut() {
  hiddenMenu.style.display = 'none';
});

hiddenCategory1.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard.style.display = 'block';
});
hiddenCategory1.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard1.style.display = 'none';
});

hiddenCategory2.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard2.style.display = 'block';
});
hiddenCategory2.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard2.style.display = 'none';
});

hiddenCategory3.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard3.style.display = 'block';
});
hiddenCategory3.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard3.style.display = 'none';
});

hiddenCategory4.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard4.style.display = 'block';
});
hiddenCategory4.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard4.style.display = 'none';
});

hiddenCategory5.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard5.style.display = 'block';
});
hiddenCategory5.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard5.style.display = 'none';
});

hiddenCategory6.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard6.style.display = 'block';
});
hiddenCategory6.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard6.style.display = 'none';
});

hiddenCategory7.addEventListener('mouseover', function handleMouseOver() {
  hiddenBoard7.style.display = 'block';
});
hiddenCategory7.addEventListener('mouseout', function handleMouseOver() {
  hiddenBoard7.style.display = 'none';
});

// hiddenE1.addEventListener('mouseover', function handleMouseOver() {
//   hiddenE1.style.display = 'block';
//   hiddenE2.style.display = 'block';
//   hiddenE3.style.display = 'block';
//   hiddenE4.style.display = 'block';
//   hiddenE5.style.display = 'block';
//   hiddenE6.style.display = 'block';
//   hiddenE7.style.display = 'block';
// });