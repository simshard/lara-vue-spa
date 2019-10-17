import NotFound from "./components/NotFound";
import  Home  from "./components/Home";
import About from "./components/About";
import Aaa from "./components/Aaa";
import Bbb from "./components/Bbb";
import Ccc from "./components/Ccc";
import Ddd from "./components/Ddd";
import Eee from "./components/Eee";
import References from "./components/References";
import UsersIndex from "./components/UsersIndex";
import UsersEdit from './components/UsersEdit';
import UsersCreate from './components/UsersCreate';

export default {
    mode:'history',
    linkActiveClass:'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path:'/',
            component: Home
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/aaa',
            component: Aaa
        }, {
            path: '/bbb',
            component: Bbb
        }, {
            path: '/ccc',
            component: Ccc
        }, {
            path: '/ddd',
            component: Ddd
        }, {
            path: '/eee',
            component: Eee
        }, {
            path: '/references',
            component: References
        },
        {
            path: '/users',
            name: 'users.index',
            component: UsersIndex,
        },
        {
            path: '/users/:id/edit',
            name: 'users.edit',
            component: UsersEdit,
        },
        {
            path: '/users/create',
            name: 'users.create',
            component: UsersCreate,
        },
    ]

};
