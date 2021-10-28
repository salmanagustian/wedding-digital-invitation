import './bootstrap';

// Register Vue Components
Vue.component('comment', require('./components/Comment.vue').default);
Vue.component('guestbook', require('./components/GuestBook.vue').default);

// Initialize Vue
const vm = new Vue({
    el: '#root',
});