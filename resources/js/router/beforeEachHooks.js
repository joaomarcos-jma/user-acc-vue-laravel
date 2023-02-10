export default {
    async auth(to, from, next) {
        const requiresAuth = to.meta.requiresAuth;

        if (!requiresAuth) {
            next()
            return
        }

        await new Promise(resolve => {
            if (requiresAuth) {
                next('/login');
                return;
            } else {
                next();
            }
            resolve()
        })
    },
}
