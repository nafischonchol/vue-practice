import { createWebHistory, createRouter } from "vue-router";
import { useToast } from 'vue-toastification';
import home from "@/pages/home.vue";
import login from "@/pages/login.vue";
import register from "@/pages/register.vue";
import addBuilding from "@/pages/addBuilding.vue";
import buildingList from "@/pages/buildingList.vue";
import main from "@/layouts/main.vue";
import guestLayout from "@/layouts/guestLayout.vue";

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
    },
  },
  {
    path: "/login",
    name: "Login",
    components: {
      default: login,
      layouts: guestLayout
    },
    meta: { guestOnly: true }, 
  },
  {
    path: "/register",
    name: "Register",
    components: {
      default: register,
      layouts: guestLayout
    },
    meta: { guestOnly: true }, 
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

// Add route guard to check for authentication
router.beforeEach((to, from, next) => {
  const toast = useToast();
  const requiresAuth = !to.meta.guestOnly; 
  const isAuthenticated = !!localStorage.getItem('scantumToken'); 
  if (requiresAuth && !isAuthenticated) {
    toast.error('You need to log in to access this page.');
    next({ path: '/login' });
  } else if (to.path === '/login' && isAuthenticated) {
    next({ path: '/' });
  } else {
    next();
  }
});

export default router;
