import FooterApp from './pages/FooterApp.vue'

export default [
        
    {
        path: '/zzz/:id', 
        name: 'zzz', 
        component: FooterApp
    }

]

// import { createWebHistory, createRouter } from "vue-router";
// import FooterApp from './pages/FooterApp.vue'

// const routes = [
//   {
//     path: "/zzz",
//     name: "zzz",
//     component: FooterApp,
//   },
// ];

// const router = createRouter({
//   history: createWebHistory(),
//   routes,
// });

// export default router;