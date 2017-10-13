require('./bootstrap');

window.Vue = require('vue');

import router from './router';

Vue.config.debug = true;
Vue.config.devTools = true;


// import components
import App from './components/App.vue';


import FileInput from './components/FileInput.vue';


Vue.component('file-input', FileInput);

const app = new Vue({
    el: '#app',
   // router,
    template: '<App/>',
    components: { App }
});
