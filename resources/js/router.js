import { createWebHistory, createRouter } from "vue-router";
import home from "./pages/home.vue";
import login from "./pages/login.vue";
import register from "./pages/register.vue";
import addBuilding from "./pages/addBuilding.vue";
import buildingList from "./pages/buildingList.vue";
import main from "./layouts/main.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    components: {
      default: home, 
      layouts: main 
    }
  },
  {
    path: "/building/add",
    name: "AddBuilding",
    components: {
        default: addBuilding, 
        layouts: main 
      }
  },
  {
    path: "/building/list",
    name: "BuildingList",
    components: {
        default: buildingList, 
        layouts: main 
      }
  },
  {
    path: "/login",
    name: "Login",
    component:{
        default: login,
        layouts: ''
    }
  },
  {
    path: "/register",
    name: "Register",
    components: {
        default: register, 
        layouts: "" 
      }
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
