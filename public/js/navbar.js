document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
   const navLeft = document.getElementById('menu-left');
   const navRight = document.getElementById('menu-right');

    // Toggle Menu
    menuToggle.addEventListener('click', () => {
        navLeft.classList.toggle('show-left');
        navRight.classList.toggle('show-right');
    });
});
