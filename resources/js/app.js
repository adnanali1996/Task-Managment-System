/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// VUE
window.Vue = require('vue');
import Vue from 'vue';

// FOR PAGINATION STARTS
Vue.component('pagination', require('laravel-vue-pagination'));
// FOR PAGINATION ENDS

// FOR  VFORM START
import { Form, HasError, AlertError } from 'vform';

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
// FOR  VFORM START
import VueRouter from 'vue-router';
// VUE ROUTER START
Vue.use(VueRouter)

let routes = [
    { path: '/dashboard', component: require('./components/DashboardComponent.vue').default },
    { path: '/profile', component: require('./components/ProfileComponent.vue').default },
    { path: '/inbox', component: require('./components/InboxComponent.vue').default },
    { path: '/compose', component: require('./components/ComposeComponent.vue').default },
  ]
  const router = new VueRouter({
    mode:'history',
    routes // short for `routes: routes`
  })
// VUE ROUTER END

// VUE PROGRASS BAR START
import VueProgressBar from 'vue-progressbar';

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '5px'
})
// VUE PROGRASS BAR END

// SWEET ALERTS START
import Swal from 'sweetalert2';

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
window.toast = toast;
window.swal = Swal;
// SWEET ALERTS END
// VUE EVENTS START
window.Fire = new Vue();
// VUE EVENTS END
//   VUe Filters
Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
