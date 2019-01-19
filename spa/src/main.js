import Vue from 'vue';
import App from './App';
import router from './app-routes';

// Add vue animate.css library 
require('vue2-animate/dist/vue2-animate.min.css');

// Init event bus
export const filterBus = new Vue();

new Vue({
	el: '#wp-vue-app',
	router,
	render: h => h( App )
});
