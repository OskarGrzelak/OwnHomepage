/* document.querySelector('#about-me-btn').addEventListener('click', scrollIt(document.querySelector('#about-me')));

function scrollIt(element) {
    window.scrollTo({
      'behavior': 'smooth',
      'left': 0,
      'top': element.offsetTop
    });
  } */


const next = document.querySelector('#next');
next.addEventListener('click', function() {
  toggleClasses('next');
});
const prev = document.querySelector('#prev');
prev.addEventListener('click', function(){
  toggleClasses('prev');
});

function toggleClasses(str) {
  const projects = Array.from(document.querySelectorAll('.portfolio__project'));
  let activeIndex = projects.findIndex(cur => cur.classList.contains('active'));
  projects[activeIndex].classList.replace('active', 'unactive');
  if(str === 'next') {
    if (activeIndex + 1 >= projects.length) { activeIndex = -1};
    projects[activeIndex+1].classList.replace('unactive', 'active');
  }
  if(str === 'prev') {
    if (activeIndex - 1 <= 0) { activeIndex = projects.length};
    projects[activeIndex-1].classList.replace('unactive', 'active');
  }
  
}