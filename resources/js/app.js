require('./bootstrap');


import { createApp } from "vue"

// import Vuetify from '../plugins/vuetify.js' 
// import App from './App.vue' //app.vue main file
import CategoryComp from './components/CategoryComp.vue'
import TopHeaderApp from './pages/TopHeaderApp.vue'
import MenuBarApp from './pages/MenuBarApp.vue'

// createApp(App).mount("#app")

const app = createApp({});
// app.use(Vuetify);
app.component('category-grid', CategoryComp);
app.mount("#cat");


const tapp = createApp({});
tapp.component('top-header', TopHeaderApp);
tapp.component('menu-bar', MenuBarApp);
tapp.mount("#tshirt");