// ==========================================
// 1. FUNDAÇÃO (jQuery e Globais)
// ==========================================
// É CRÍTICO que isto esteja no topo absoluto.
import $ from 'jquery';
import axios from 'axios';

// Forçar o jQuery a ser global para que o OwlCarousel e plugins.js o vejam
window.jQuery = $;
window.$ = $;
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// ==========================================
// 2. LARAVEL BOOTSTRAP
// ==========================================
import './bootstrap'; 

// ==========================================
// 3. PLUGINS DE TERCEIROS
// ==========================================
// Agora que o "window.$" existe, podemos carregar o carousel
import 'owl.carousel';

// ==========================================
// 4. OS TEUS SCRIPTS LOCAIS
// ==========================================
// Nota: Verifica se dentro destes ficheiros não tens "require()" escondidos
import './datepicker.js'; 
import './plugins.js'; 

// ==========================================
// 5. LÓGICA PRINCIPAL
// ==========================================
import './main.js'; 
import './solucoes.js';