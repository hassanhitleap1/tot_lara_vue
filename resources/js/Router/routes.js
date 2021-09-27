import Login from "../pages/auth/Login";
import Home from "../pages/Home";


const routes = [
    {
        path: '/home',
        name:"home",
        component: Home
    },
    {
        name:"login",
        path: '/login',
        component: Login
    },

];


export default routes
