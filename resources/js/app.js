import './bootstrap';
import '../sass/main.scss';
import { createApp, h } from "vue";
import App from "./App.vue";
import MCP from "./MCP.vue";

const product  = createApp({
    render: ()=>h(App)
});

product.mount("#product")

const mcp  = createApp({
    render: ()=>h(MCP)
});

mcp.mount("#mcp")