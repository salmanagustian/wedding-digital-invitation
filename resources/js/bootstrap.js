import Vue from 'vue';
import axios from 'axios';


window.Vue = Vue;
window.axios = axios;

window.axios.headers.common['X-Requested-With'] = 'XMLHttpRequest';
