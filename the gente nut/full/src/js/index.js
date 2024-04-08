import barba from '@barba/core';
import { gsap } from "gsap";
barba.init({
  transitions: [{
    name: 'opacity-transition',
    sync: true,
    leave(data) {
      return gsap.to(data.current.container, {
        opacity: 0
      });
    },
    enter(data) {
      return gsap.from(data.next.container, {
        opacity: 0
      });
    }
  }],

  views: [
    {
      namespace: 'main',
      afterEnter() {
        mobileNav();
        mainPage();
      }
    },
    {
      namespace: 'about',
      afterEnter() {
        mainPage();
        mobileNav();
      }
    },
    {
      namespace: 'katalog',
      afterEnter() {
        mainPage();
        mobileNav();
        taBs();
      }
    },
  ]

});

import mainPage from './modules/swiper.js';
import mobileNav from './modules/mobile-nav.js';

function taBs() {
  const tabs = document.querySelectorAll('.katalog1__list-link');
  const all_content = document.querySelectorAll('.bloc3');
  const content = document.querySelectorAll('.content_box');

  tabs.forEach((tab, index) => {
    tab.addEventListener('click', (e) => {
      tabs.forEach(tab => { tab.classList.remove('active') });
      tab.classList.add('active');

      all_content.forEach(content => { content.classList.remove('active') });
      all_content[index].classList.add('active');

      content.forEach(content => { content.classList.remove('active') });
      content[index].classList.add('active');

    })
  })

};








