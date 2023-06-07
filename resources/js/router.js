import { createWebHistory, createRouter } from "vue-router";
import home from "./pages/home.vue";
import login from "./pages/login.vue";
import register from "./pages/register.vue";
import addBuilding from "./pages/addBuilding.vue";
import buildingList from "./pages/buildingList.vue";
import main from "./layouts/main.vue";
import guestLayout from "./layouts/guestLayout.vue";


const routes = [
  {
    path: "/",
    name: "Home",
    component: main, // Apply layout to the home page
    children: [
      {
        path: "",
        component: home
      }
    ]
  },
  {
    path: "/building/add",
    name: "AddBuilding",
    component: main, // Apply layout to the AddBuilding page
    children: [
      {
        path: "",
        component: addBuilding
      }
    ]
  },
  {
    path: "/building/list",
    name: "BuildingList",
    component: main, // Apply layout to the BuildingList page
    children: [
      {
        path: "",
        component: buildingList
      }
    ]
  },
  {
    path: "/login",
    name: "Login",
    component: login // No layout for the login page
  },
  {
    path: "/register",
    name: "Register",
    component: register // No layout for the register page
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
