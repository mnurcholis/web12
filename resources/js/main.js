import { createApp } from "vue";

import App from "./components/App.vue";

//import config router
import router from "./router";

const app = createApp({});
app.use(router);
app.mount("#app");
