// Global libraries
window.Vue = require('vue');
window._ = require('lodash');

// Layout
Vue.component('emp-footer', require('./components/layout/footer').default);

var vm = new Vue({
	el: '#application'
});