// Global libraries
window.Vue = require('vue');
window._ = require('lodash');

// // Settlement
// Vue.component('e-settlement-listing', require('./components/settlement/listing').default);

// Layout
Vue.component('evx-footer', require('./components/layout/footer').default);

var vm = new Vue({
	el: '#application'
});