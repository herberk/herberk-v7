
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

Vue.component('file-upload',require('./components/FileUpload.vue'));
Vue.component('tasks-list', require('./components/TasksList.vue'));
Vue.component('ciudades-master', require('./components/tablas/ciudadesmaster.vue'));
Vue.component('locaciones-master', require('./components/tablas/locacionesmaster.vue'));
Vue.component('tipos-master', require('./components/tablas/tiposmaster.vue'));
Vue.component('empresa-contacto', require('./components/empresas/Contactos.vue'));

const app = new Vue({
    el: '#app'
});