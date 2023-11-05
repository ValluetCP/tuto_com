const btnRes = document.querySelector('.btn-responsive-menu');
const liste = document.querySelector('.liste-nav');
const items = document.querySelectorAll('.item')

btnRes.addEventListener('click', () => {
    // enlève et ajoute la class active
    btnRes.classList.toggle('active');
    liste.classList.toggle('active-menu');

})

items.forEach(item => {
    item.addEventListener('click', () => {
        
        btnRes.classList.toggle('active');
        liste.classList.toggle('active-menu');
        // si la class est sur cette élément ça l'enlève, si elle n'y est pas on l'ajoute
    
    })
})