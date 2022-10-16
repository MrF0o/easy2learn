import {createRouter, createWebHistory} from 'vue-router';
import Students from '../pages/mcp/Students.vue';
import Questions from '../pages/mcp/Questions.vue';

const routes = [
    {
        path: '/mcp/students',
        name: 'students',
        component: Students,
    },
    {
        path: '/mcp/questions',
        name: 'questions',
        component: Questions,
    }
]

const router = createRouter({
    routes,
    mode: "history",
    history: createWebHistory()
})


export default router;