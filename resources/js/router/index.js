//import vue router
import { createRouter, createWebHistory } from "vue-router";

//define a routes
const routes = [
    {
        path: "/",
        name: "ProductList",
        component: () =>
            import(/* webpackChunkName: "index" */ "../components/ProductList.vue"),
    },
    {
        path: "/products/create",
        name: "createProduct",
        component: () =>
            import(
                /* webpackChunkName: "create" */ "../components/ProductForm.vue"
            ),
    },
    {
        path: "/products/:id/edit",
        name: "EditProductEdit",
        component: () =>
            import(/* webpackChunkName: "edit" */ "../components/ProductFormEdit.vue"),
    },
    {
        path: "/products/:id",
        name: "Product",
        component: () =>
            import(/* webpackChunkName: "view" */ "../components/Product.vue"),
    },
];

//create router
const router = createRouter({
    history: createWebHistory(),
    routes, // <-- routes,
});

export default router;

