

export default [
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        redirect: 'pageError'
    },
    {
        path: '/error-page',
        name: 'pageError',
        component: () => import('../views/shared/NotFound.vue')
    },
];
