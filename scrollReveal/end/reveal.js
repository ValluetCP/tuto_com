// 1. l'élément (string)
// 2. options (object)

// On crée une fonction ScrollReveal()
// Pour cibler le titre h1 dans le container .hero-content
// il lui met des valeurs(une animation) par défaut
// ScrollReveal().reveal('.hero-content h1',
// { 
//     duration: 5000, (valeur par défaut 5000ms = 0.5s)
//     origin: 'right', (équivaut au translate : origin dans un 1er tps ) / right : l'animation arrive vers la droite
//     distance: '0px', à 20px par défaut (équivaut au translate : distance dans un 2ème tps ) / origin et distance fonctionne ensemble
//     scale: 0.2, (de type number à 0.9 sa valeur par défaut)
//     opacity: 0, (de type number à 0.5 si l'on veut que dès le départ l'élément soit à moitié visible, et 0 pour le laissé caché)
//     easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)', (peut-être remplacé par easy-in etc)
//     rotate: {x: 0, y: 0, z: 10}, (pas de valeur par défaut)
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

// COMMENTAIRES PERSONNELS


// --------------Fonctionnalités avancées------------//
// --------------Fonctionnalités avancées------------//
// le document html
// container:window.document.documentElement (on peut sélectionner n'importe quel élément dans mon html car ils sont dans le container)
// container:window.document.querySelector('.hero-content') (pour venir ciblé un élément précis comme une div, il trouve le h1 par exemple car elle est dans le container '.hero-content' )

// reset : false (valeur par défaut, l'animation ne se fera qu'une seule fois)
// mobile : true (valeur par défaut, l'animation va fonctionné sur mobile 'à éviter')
// useDelay: 'always' (valeur par défaut, les délais sont toujours respectés, fonctionne avec 'delay' ligne 12) / 'once' (pour l'inverse)
// viewFactor: 0.2,(valeur par défaut, est à 20% ) traduction il faut être positionné à 20% de l'élément pour déclencher l'animation de l'écran(viewport)
// Pour l'inverse, il que 20% de l'élément soit à l'extérieur du viewport pour le faire disparaître
// viewOffset: {top: 0, right: 0, bottom: 0, left: 0}, (valeur par défaut, permet de configurer les éléments du viewport), si on met top:100 c'est comme-ci on ajoute une marge de 100px en haut de l'écran
// beforeReveal: function(){ console.log('before reveal') }, (appel des fonctions call back avant et après l'animation)
// afterReveal: function(){ console.log('after reveal') }


// conseil : avoir les même durée d'animation, transition et sur les même propriétés

// Pour affecter l'ensemble des éléments (gain de tps)
var sr = ScrollReveal({
    duration: 1000,
    reset: true,
    mobile: false,
    useDelay: 'once'
});

// section hero
//  domEl correspond à l'élément
sr.reveal('.hero-content h1', { 
    afterReveal: function(domEl) { 
        domEl.style.letterSpacing = '4px';
        // nous avons ajouté une transition: letter-spacing 0.5s ease-in-out; (l59) dans le css directement 
    }
});
// pour que les éléments ppuissent apparaître les uns après les autres
sr.reveal('.hero-content p', {delay: 500});
sr.reveal('.hero-content a', {delay: 1500});
sr.reveal('.hero-img img', {delay: 1000});

// section intro
// l'animation séquencé, les unes après les autres. 1 ligne de code pour 
sr.reveal('.intro-feature', 500);

// section sign up
sr.reveal('.sign-up h3');
sr.reveal('.sign-up .name', {delay: 500, origin: 'right', distance: '50px'});
sr.reveal('.sign-up .password', {delay: 1000, origin: 'left', distance: '50px'});
sr.reveal('.sign-up .sign-up-btn', {delay: 1500});