import './bootstrap';
import '../sass/main.scss';
import { createApp, h } from "vue";
import App from "./App.vue";

const product  = createApp({
    render: ()=>h(App)
});

product.mount("#product")