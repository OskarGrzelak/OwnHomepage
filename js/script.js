// SCROLLING ANIMATIONS

document.querySelector('#about-me-btn').addEventListener('click', (e) => {
  e.preventDefault();
  scrollIt(document.querySelector('#about-me'))
});

document.querySelector('#contact-me-btn').addEventListener('click', (e) => {
  e.preventDefault();
  scrollIt(document.querySelector('#contact-me'))
});

document.querySelector('#portfolio-btn').addEventListener('click', (e) => {
  e.preventDefault();
  scrollIt(document.querySelector('#portfolio'))
});

function scrollIt(element) {
    window.scrollTo({
      'behavior': 'smooth',
      'left': 0,
      'top': element.offsetTop
    });
  }

// ANIMATION ON SCROLL HANDLER

const animateHTML = () => {
  let elems, windowHeight;
    function init() {
      elems = document.querySelectorAll('.hidden');
      windowHeight = window.innerHeight;
      addEventHandlers();
      checkPosition();
    }
    function addEventHandlers() {
      window.addEventListener('scroll', checkPosition);
      window.addEventListener('resize', init);
    }
    function checkPosition() {
      for (let i = 0; i < elems.length; i++) {
        let positionFromTop = elems[i].getBoundingClientRect().top;
        if (positionFromTop - windowHeight <= 0) {
          if (window.innerWidth > 600) {
            elems[i].classList.remove('hidden');
            elems[i].classList.replace(
              'hidden-right',
              'move-in-right'
            );
            elems[i].classList.replace(
              'hidden-left',
              'move-in-left'
            );
            elems[i].classList.replace(
              'hidden-fade',
              'fade'
            );
          } else {
            elems[i].classList.remove('hidden');
            elems[i].classList.replace(
              'hidden-right',
              'move-in-right-phone'
            );
            elems[i].classList.replace(
              'hidden-left',
              'move-in-left-phone'
            );
            elems[i].classList.replace(
              'hidden-fade',
              'fade'
            );
          }
        }
      }
    }
    return {
      init: init
    };
  };
  animateHTML().init();


// PORTFOLIO SLIDER

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