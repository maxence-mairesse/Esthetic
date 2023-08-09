const nav = {
    init: function () {

        const buttonNav = document.querySelector('#buttonNav');
        buttonNav.addEventListener('click',nav.toggleNav);

    },

    toggleNav: function (){
        const nav = document.querySelector('nav');
        nav.classList.toggle('display');
    }
};