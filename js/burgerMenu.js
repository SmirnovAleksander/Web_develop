document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const navMenu = document.getElementById('nav-menu');

    burgerMenu.addEventListener('click', (event) => {
        event.stopPropagation(); 
        navMenu.style.display = navMenu.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (event) => {
        const isClickInsideMenu = navMenu.contains(event.target);
        const isClickInsideBurger = burgerMenu.contains(event.target);
        
        if (!isClickInsideMenu && !isClickInsideBurger) {
            navMenu.style.display = 'none';
        }
    });
});
