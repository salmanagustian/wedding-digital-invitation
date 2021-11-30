import './bootstrap';
import Home from './views/Home.vue';
import router from './route';
import infiniteScroll from 'vue-infinite-scroll';


// Register Vue Components
// Vue.component('comment', require('./components/Comment.vue').default);
// Vue.component('guestbook', require('./components/FormGuestBook.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#root',
    router,
    render: h => h(Home),
    directives: {infiniteScroll}
});
