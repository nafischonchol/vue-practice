import { createWebHistory, createRouter } from "vue-router";
import home from "./pages/home.vue";
import login from "./pages/login.vue";
import register from "./pages/register.vue";
import addBuilding from "./pages/addBuilding.vue";
import buildingList from "./pages/buildingList.vue";



const routes = [
    {
        path: '/',
        name: "Home",
        component: home
    },
    {
        path: '/building/add',
        name: "AddBuilding",
        component: addBuilding
    },
    {
        path: '/building/list',
        name: "BuildingList",
        component: buildingList
    },
    {
        path: '/login',
        name: "Login",
        component: login
    },
    {
        path: '/register',
        name: "Register",
        component: register
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;