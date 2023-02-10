import Vue from "vue";
import VueRouter from 'vue-router';
import RoutesMapConfig from './routes';
import defaultRoutes from './defaultRoutes';
import beforeEachHooks from './beforeEachHooks';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: RoutesMapConfig.concat(defaultRoutes)
});

Object.values(beforeEachHooks).forEach(hook => {
    router.beforeEach(hook)
});

export default router;
