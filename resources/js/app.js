require('./bootstrap');


import Vue from 'vue'
import vuetify from "../plugins/vuetify.js";

//import component file
import CategoryComp from './pages/TopHeaderApp.vue'

Vue.config.productionTip = false

new Vue({
    vuetify,
	render: h => h(CategoryComp)
}).$mount('#tshirt')



// import { createApp } from "vue"


// import vuetify from '../plugins/vuetify'
// import { loadFonts } from '../plugins/webfontloader'

// import Vuetify from '../plugins/vuetify.js' 
// import App from './App.vue' //app.vue main file
// import CategoryComp from './components/CategoryComp.vue'
// import TopHeaderApp from './pages/TopHeaderApp.vue'
// import MenuBarApp from './pages/MenuBarApp.vue'
// import ProductListApp from './pages/ProductListApp.vue'
// import FooterApp from './pages/FooterApp.vue'

// createApp(App).mount("#app")
// loadFonts()


// const app = createApp({});
// // app.use(Vuetify);
// app.component('category-grid', CategoryComp);
// app.mount("#cat");


// const tapp = createApp({});
// tapp.component('top-header', TopHeaderApp);
// tapp.component('menu-bar', MenuBarApp);
// tapp.component('product-list', ProductListApp);
// tapp.component('footer-app', FooterApp);
// // tapp.use(vuetify);
// tapp.mount("#tshirt");
