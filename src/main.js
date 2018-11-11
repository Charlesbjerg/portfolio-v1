// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.

// Vue setup
import Vue from 'vue'
import router from './router'
import StoryblokClient from 'storyblok-js-client';
import StoryblokVue from 'storyblok-vue';

// Vue production setting
Vue.config.productionTip = false

// Component imports
import App from './App'

// Vue use statements
Vue.use(StoryblokVue);

// Create Vue
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})