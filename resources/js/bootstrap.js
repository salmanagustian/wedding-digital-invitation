import Vue from 'vue';
import axios from 'axios';

window.Vue = Vue;
window.axios = axios;

// window.axios.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.bottom = "0";
    } else {
        document.getElementById("navbar").style.bottom = "-78px";
    }
    prevScrollpos = currentScrollPos;
}
