import VueRouter from "vue-router";

let routes = [{
    path: '/',
    component: require('./views/Home.vue').default
}];

export default new VueRouter({
    mode: 'history',
    routes: routes
});
