const btn = document.querySelector('.btn-open');
const allItems = document.querySelectorAll('.items');
const ligne = document.querySelector('.ligne');


btn.addEventListener('click', () => {

    btn.classList.toggle('active')
    ligne.classList.toggle('active-ligne');

    allItems.forEach(item => {

        // faire apparaître les icônes...
        item.classList.toggle('apparition')
        // contains vérifie s'il a la class apparition
        if(item.classList.contains('apparition') === true){
            // ...avec un temps d'attente
            setTimeout(() => {
                item.classList.toggle('real');
            }, 200)

        } else {
            item.classList.toggle('real');
        }

    })

})

allItems.forEach(item => {
    item.addEventListener('click', () => {

        btn.classList.toggle('active');
        ligne.classList.toggle('active-ligne');
        // enlevé la class apparition aux icones
        allItems.forEach(item => {
            item.classList.toggle('real')
            item.classList.toggle('apparition')
        })
    })
})