import Login from "../pages/auth/Login";
import Home from "../pages/Home";

const router = [
    {
        path: '/',
        name: 'Home',
        components: {
            Home: Home,
        }
    },
    {
        path: '/login',
        name: 'login',
        components: {
            Login: Login,
        }
    }

];

export  default  router;
