import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Instrucciones a ejecutar

import jQuery from 'jquery';
window.jQuery = window.$ = jQuery;

import bootstrap from 'bootstrap';


