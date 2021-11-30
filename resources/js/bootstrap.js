import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';

window.Vue = Vue;
Vue.use(VueRouter)
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let prevScrollpos = window.pageYOffset;

window.onscroll = function () {
    const currentScrollPos = window.pageYOffset;

    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.bottom = "0";
    } else {
        document.getElementById("navbar").style.bottom = "-78px";
    }
    prevScrollpos = currentScrollPos;
}

const modal = UIkit.modal("#my_id");
modal.show();

window.document.getElementById('play-sound').addEventListener('click', function (event) {
    window.document.getElementById('audio').play();
});
