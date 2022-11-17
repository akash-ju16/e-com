require('./bootstrap');


import { createApp } from "vue"
// import App from './App.vue' //app.vue main file
import CategoryComp from './components/CategoryComp.vue'


// createApp(App).mount("#app")

const app = createApp({});
app.component('category-grid', CategoryComp);
app.mount("#cat");
