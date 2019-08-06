import Vuetify from 'vuetify';
import Home from './components/Home';
import 'vuetify/dist/vuetify.min.css';
window.Vue = require('vue');

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    components: {
        Home
    }
});

