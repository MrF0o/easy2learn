import './bootstrap';
import '../sass/main.scss';
import { createApp, h } from "vue";
import App from "./App.vue";
import MCP from "./MCP.vue";
import router from './router';

const product  = createApp({
    render: ()=>h(App)
});

product.mount("#product");

const mcp  = createApp({
    render: ()=>h(MCP)
});

mcp.use(router);

mcp.mount("#mcp");