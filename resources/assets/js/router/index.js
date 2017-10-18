import Vue from 'vue'
import Router from 'vue-router'

import HomeView from '../pages/HomeView'

// import DetailView from '../components/DetailView'
// import PostView from '../components/PostView'

//import menu from './menu'

Vue.use(Router)

export default new Router({
   // mode: 'history',
   // linkActiveClass: 'is-active',
   // scrollBehavior: () => ({y: 0}),
    routes: [
        {
            name: 'Home',
            path: '/',
            component: HomeView
        },
        //...generateRoutesFromMenu(menu),
        // {
        //     path: '*',
        //     redirect: '/'
        // }
        // {
        //     path: '/detail/:id',
        //     name: 'detail',
        //     component: DetailView
        // },
        // {
        //     path: '/post',
        //     name: 'post',
        //     component: PostView
        // }
    ]
})

// Menu should have 2 levels.
// function generateRoutesFromMenu(menu = [], routes = []) {
//     for (let i = 0, l = menu.length; i < l; i++) {
//         let item = menu[i]
//         if (item.path) {
//             routes.push(item)
//         }
//         if (!item.component) {
//             generateRoutesFromMenu(item.children, routes)
//         }
//     }
//     return routes
// }