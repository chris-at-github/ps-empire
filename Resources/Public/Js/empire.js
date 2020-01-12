// Global libraries
window.Vue = require('vue');
window._ = require('lodash');

import routing from './routing/bootstrap';

// Games
Vue.component('evx-game-listing', require('./components/game/listing').default);

// Layout
Vue.component('evx-footer', require('./components/layout/footer').default);

var vm = new Vue({
	el: '#application',
	data: Evx
});