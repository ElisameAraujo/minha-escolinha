/** === Bootstrap === **/
import * as bootstrap from 'bootstrap'
import 'bootstrap/dist/js/bootstrap'
window.bootstrap = bootstrap;

/** Tooltip **/
const tooltipTriggerList = document.querySelectorAll('[data-bs-tooltip="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

/** === Maska === **/
import { MaskInput } from "maska"

if(document.querySelector('#telefone')){
    const input = document.querySelector('#telefone')
    new MaskInput(input, {
        mask: '(##) #####-####',
    })
}

/** === Axios === **/
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
