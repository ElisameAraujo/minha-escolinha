/** === Bootstrap === **/
import * as bootstrap from 'bootstrap'
window.bootstrap = bootstrap;
import 'bootstrap/dist/js/bootstrap'

/** Tooltip **/
const tooltipTriggerList = document.querySelectorAll('[data-bs-tooltip="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

/** === Axios === **/
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
