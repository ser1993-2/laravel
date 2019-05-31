require('./bootstrap');
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueProgressBar from 'vue-progressbar'
import axios from 'axios'
import VueAxios from 'vue-axios'

import HeaderLayout from './components/Header.vue'


import Catalog from './components/Catalog.vue'



Vue.use(VueProgressBar, {
    color: 'rgb(65, 160, 244)',
    failedColor: 'rgb(244, 241, 65)',
    thickness: '3px'
});


Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: 'hash',
    base: '/admin/',
    routes: [
        { path: '/catalog', redirect: '/catalog/tyres'},
        { path: '/', redirect: '/suppliers'},

        { path: '/catalog/', component: Catalog ,
            children: [
                { path: 'tyres/', component: TyreComponent},
                { path: 'tyres/:id', component: TyreComponent},

                { path: 'wheels/', component: WheelComponent},
                { path: 'wheels/:id', component: WheelComponent},

                { path: 'oils/', component: OilComponent},
                { path: 'oils/:id', component: OilComponent},

                { path: 'batteries/', component: BatteryComponent},
                { path: 'batteries/:id', component: BatteryComponent},

                { path: 'simple/', component: SimpleComponent},
                { path: 'simple/:id', component: SimpleComponent},
            ]
        },
    ]
});


window.Vue = new Vue(Vue.util.extend({
    router,
    components: {
        HeaderLayout,
    },
    template: `<div>

        
        <header-layout></header-layout>

    </div>`,

})).$mount('#app');
