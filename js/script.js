'use strict';

// *******************************
// jQuery - Slider
// *******************************
$(function() {
  $('.hero__slides').slick({
    accessibility: false,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false,
    fade: true
  });
});


// *******************************
// Loading
// *******************************
{
  const loading = document.querySelector('.loading');

  window.addEventListener('load', () => {
    loading.classList.add('loading--fade');
  });
}


// *******************************
// Hamburger Menu
// *******************************
{
  const gnavBtn = document.querySelector('.gnav__btn');
  const snav = document.querySelector('.snav');

  function hamburger() {
    if (gnavBtn.classList.contains('gnav__btn--active')) {
      gnavBtn.classList.remove('gnav__btn--active');
      snav.classList.remove('snav--active');
    } else {
      gnavBtn.classList.add('gnav__btn--active');
      snav.classList.add('snav--active');
    }
  }

  gnavBtn.addEventListener('click', () => {
    hamburger();
  });
}

// *******************************
// Intro Scroll
// *******************************
{
  const scrollNavigation = document.querySelector('.scroll-navigation');
  const main = document.querySelector('.main');

  scrollNavigation.addEventListener('click',() => {
    main.scrollIntoView({
      behavior: "smooth"
    });
  })
}


// *******************************
// Scroll Event
// *******************************
{
  
  const sectionImages = document.querySelectorAll('.js-fade');
  const sectionOptions = {
    root: null,
    rootMargin: '0px',
    threshold: [0.2],
  };
  const scrollFadeInObs = new IntersectionObserver(scrollFadeIn, sectionOptions);
  
  function scrollFadeIn(entries, obs) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('js-fade--show');
    });
  }
  sectionImages.forEach(sectionImage => {
    scrollFadeInObs.observe(sectionImage);
  });

  // sticky
  const header = document.querySelector('.header');
  const hero = document.querySelector('.hero');
  const stickyOptions = {
    root: null,
    rootMargin: '0px',
    threshold: [0.5],
  };
  const stickyObs = new IntersectionObserver(stickyNav, stickyOptions);

  function stickyNav(entries) {
    if (!entries[0].isIntersecting) {
      header.classList.add('header--active');
    } else {
      header.classList.remove('header--active');
    }
  }
  stickyObs.observe(hero);
}

