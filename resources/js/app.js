/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.directive('click-outside', {
    bind: function (el, binding, vnode) {
        this.event = function (event) {
            if (!(el == event.target || el.contains(event.target))) {
                vnode.context[binding.expression](event);
            }
        };
        document.body.addEventListener('click', this.event)
    },
    unbind: function (el) {
        document.body.removeEventListener('click', this.event)
    },
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('language-selector', require('./components/languageSelector.vue').default);
Vue.component('contact-us', require('./components/contactUsComponent.vue').default);
Vue.component('services-component', require('./components/ServicesComponent.vue').default);

// albums
Vue.component('slick-album', require('./components/albums/SlickAlbum.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

if ($("#languageSelector").length !== 0){
    let languageSelector = new Vue({
        el:'#languageSelector'
    });
}


if ($("#slickAlbum").length !== 0){
    let slickAlbum = new Vue({
        el:'#slickAlbum'
    });
}

if ($("#services").length !== 0){
    let services = new Vue({
        el:'#services'
    });
}


if ($("#contact_us").length !== 0){
    let contact_us = new Vue({
        el:'#contact_us'
    });
}


if ($("#languageSelector_navbar").length !== 0){
    let languageSelector_navbar = new Vue({
        el:'#languageSelector_navbar'
    });
}
