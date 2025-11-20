// js/servicos/servicos.js

document.addEventListener('DOMContentLoaded', () => {
    
    const fadeElements = document.querySelectorAll('.fade-in');

    // 1. Animação Sequencial dos Cards (Fade-in on Scroll)
    fadeElements.forEach((el) => {
        el.style.opacity = 0; 
        el.style.transition = 'opacity 0.8s ease-out, transform 0.3s';
    });
    
    function showElements() {
        fadeElements.forEach((el) => {
            const rect = el.getBoundingClientRect();
            // Mostra o elemento se 80% dele estiver na viewport
            if (rect.top < window.innerHeight * 0.8) {
                const delay = el.getAttribute('data-delay') * 200 || 0;
                setTimeout(() => {
                     el.style.opacity = 1;
                }, delay);
            }
        });
    }

    // Adicionar listener ao scroll
    window.addEventListener('scroll', showElements);
    showElements(); // Chama na inicialização para elementos já visíveis

    // 2. Scroll Suave
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Subtrai 80px para o header fixo (ajuste se o seu header for diferente)
                window.scrollTo({
                    top: targetElement.offsetTop - 80, 
                    behavior: 'smooth'
                });
            }
        });
    });
});