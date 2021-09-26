import  VueRoute from 'vue-router';
import  routers from './routers';
const router= new VueRoute({

    routers, // short for `routes: routes`,
    hashbang: false,
    mode: 'history'
});

export  default router;
