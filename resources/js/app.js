// 1. MODERNIZR (Compatibility Shims - OBRIGATÓRIO no topo)

// 2. BASE (jQuery Global)
import './bootstrap'; 

import 'owl.carousel';

// 3. PLUGINS (Definição de funções como owlCarousel, datepicker, responsivenav)
import './datepicker.js'; // Define a função datepicker
import './plugins.js';    // Define responsivenav e plugins jQuery, DEVE VIR ANTES DO MAIN

// 4. MAIN (Inicialização/Chamada da lógica principal)
import './main.js';       // Chama as funções definidas acima (e falha se não vierem antes)