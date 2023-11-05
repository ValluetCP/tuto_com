const allItems = document.querySelectorAll('.items');
const chevron = document.querySelectorAll('.icone-titre')
const enfants = document.querySelectorAll('.items a');

allItems.forEach(item => {

    item.addEventListener('click', () => {

        // ajoute la class active
        item.classList.toggle('active')


        for(i = 0; i < chevron.length; i++) {
            
            // faire baisser le chevron du bon li
            if(chevron[i].getAttribute('data-anim') === item.getAttribute('data-anim')){

                chevron[i].classList.toggle('icones-active');

            }

        }

    })

})

// dès que l'on clique sur l'enfant, il s'arrête(ne lance pas l'évènement du parent) et peut mtn être sélectionné. On peut mtn appuyer sur le lien a sans que le menu ne se referme
enfants.forEach(enfant => {
    enfant.addEventListener('click', (e) => {
        e.stopPropagation();
    })
})