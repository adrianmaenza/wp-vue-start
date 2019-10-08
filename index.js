import Vue from 'vue';

Vue.component('wp-vue-app', require('./src/App.vue').default);
window.onload = () => {
    const ins = new Vue({
        el: '#app'
    });
}