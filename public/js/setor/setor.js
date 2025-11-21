document.addEventListener('DOMContentLoaded', function () {
    
    /**
     * 1. NAVIGATION SCROLL SPY & STICKY BEHAVIOR
     * Atualiza o link ativo no menu conforme a secção visível
     */
    const navLinks = document.querySelectorAll('#sector-nav .nav-link');
    const sections = document.querySelectorAll('section');
    const navBar = document.getElementById('sector-nav');

    function activeMenuOnScroll() {
        let currentSection = '';
        
        // Adiciona sombra extra à nav quando fazemos scroll
        if (window.scrollY > 100) {
            navBar.classList.add('shadow-lg');
        } else {
            navBar.classList.remove('shadow-lg');
        }

        // Deteta qual a secção que está no meio do ecrã
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            // Ajuste de -150px para compensar a altura da navbar
            if (pageYOffset >= (sectionTop - 150)) {
                currentSection = section.getAttribute('id');
            }
        });

        // Aplica a classe 'active' no link correto
        navLinks.forEach(link => {
            link.classList.remove('active');
            // O href contém o #id, verificamos se inclui a currentSection
            if (link.getAttribute('href').includes(currentSection)) {
                link.classList.add('active');
            }
        });
    }

    /**
     * 2. ROI COUNTER ANIMATION
     * Anima os números (ex: 0% -> 30%) apenas quando entram no ecrã
     */
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // Quanto menor, mais rápido

    const animateCounters = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                
                // Pega o texto original (ex: "30%")
                const targetText = counter.innerText;
                // Extrai apenas o número (30) e o sufixo (%)
                const targetNumber = +targetText.replace(/\D/g, ''); 
                const suffix = targetText.replace(/[0-9]/g, ''); 
                
                let count = 0;
                
                const updateCount = () => {
                    const inc = targetNumber / speed; // Incremento
                    
                    if (count < targetNumber) {
                        count += inc;
                        // Arredonda e adiciona o sufixo original
                        counter.innerText = Math.ceil(count) + suffix;
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = targetNumber + suffix;
                    }
                };
                
                updateCount();
                observer.unobserve(counter); // Para de observar após animar
            }
        });
    };

    const counterObserver = new IntersectionObserver(animateCounters, {
        root: null,
        threshold: 0.5 // Dispara quando 50% do elemento está visível
    });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });


    /**
     * 3. SCROLL REVEAL (FADE IN UP)
     * Animação genérica para títulos e cards
     */
    const revealElements = document.querySelectorAll('.reveal-text, .bento-card, .timeline-item');

    const revealOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealOnScroll, {
        root: null,
        threshold: 0.15
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // Adiciona evento de scroll para a navegação
    window.addEventListener('scroll', activeMenuOnScroll);
});