import './bootstrap';
import router from './route';

// Register Vue Components
// Vue.component('comment', require('./components/Comment.vue').default);
// Vue.component('guestbook', require('./components/FormGuestBook.vue').default);

// Initialize Vue
const vm = new Vue({
    el: '#root',

    router: router
});
