import Typed from 'typed.js';

const strings = [
    'For programmers.',
    'For testers.',
    'For DevOps.',
    'For UX/UI designers.',
    'For PM.',
    'For everyone who works in IT.'
];

new Typed('#typed', {
    strings: strings,
    typeSpeed: 100,
    backSpeed: 100,
    startDelay: 2000,
    loop: true
});

import '@splidejs/splide/css/core';
import Splide from '@splidejs/splide';

new Splide('.splide', {
    type: 'loop',
    autoplay: true
}).mount();