// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.

// Vue setup
import Vue from 'vue'
import router from './router'
Vue.config.productionTip = false


// Component imports
import App from './App'

// Create Vue
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})