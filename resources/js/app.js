import { createApp } from 'vue';
import App from './App.vue';
import router from './router.js';
import Toast from "vue-toastification";
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";


createApp(App)
    .use(router)
    .use(Toast)
    .mount("#app");
