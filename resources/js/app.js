require("./bootstrap");

window.Vue = require("vue").default;

import App from "./App.vue";
import vuetify from "./vuetify";
import router from "./router";

Vue.config.productionTip = false;
const app = new Vue({
    vuetify,
    router,
    render: (h) => h(App),
}).$mount("#app");
