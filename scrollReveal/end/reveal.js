// 1. l'élément (string)
// 2. options (object)
// ScrollReveal().reveal('.hero-content h1',
// { 
//     duration: 5000,
//     origin: 'right',
//     distance: '0px',
//     scale: 0.2,
//     opacity: 0,
//     easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
//     rotate: {x: 0, y: 0, z: 10},
//     delay: 1000,
//     container: window.document.documentElement,
//     reset: true,
//     mobile: false,
//     useDelay: 'once',
//     viewFactor: 0.8,
//     viewOffset: {top: 0, right: 0, bottom: 0, left: 0},
//     beforeReveal: function(){ console.log('before reveal') },
//     afterReveal: function(){ console.log('after reveal') }
// });


var sr = ScrollReveal({
    duration: 1000,
    reset: true,
    mobile: false,
    useDelay: 'once'
});

// section hero
sr.reveal('.hero-content h1', { 
    afterReveal: function(domEl) { 
        domEl.style.letterSpacing = '4px';
    }
});
sr.reveal('.hero-content p', {delay: 500});
sr.reveal('.hero-content a', {delay: 1500});
sr.reveal('.hero-img img', {delay: 1000});

// section intro
sr.reveal('.intro-feature', 500);

// section sign up
sr.reveal('.sign-up h3');
sr.reveal('.sign-up .name', {delay: 500, origin: 'right', distance: '50px'});
sr.reveal('.sign-up .password', {delay: 1000, origin: 'left', distance: '50px'});
sr.reveal('.sign-up .sign-up-btn', {delay: 1500});