require("./bootstrap");

window.Vue = require("vue").default;

import App from "./App.vue";
import vuetify from "./vuetify";

Vue.config.productionTip = false;
const app = new Vue({
    vuetify,
    render: (h) => h(App),
}).$mount("#app");
