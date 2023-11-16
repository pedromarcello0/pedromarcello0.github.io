// Seleciona o ícone do menu hamburguer e o menu principal
const menuHamburguer = document.getElementById('menu-hamburguer');
const navbar = document.querySelector('.navbar');

// Adiciona um evento de clique ao ícone do menu hamburguer
menuHamburguer.addEventListener('click', () => {
    setTimeout(() => {
    navbar.classList.toggle('active');
}, 100); });
