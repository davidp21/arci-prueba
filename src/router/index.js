import { createMemoryHistory, createRouter } from 'vue-router'

import HomeView from '@/pages/HomeView.vue'
import AboutView from '@/pages/AboutView.vue'

const routes = [
  { path: '/', component: HomeView , name: 'home' },
  { path: '/sobre nosotros', component: AboutView, name: 'about' },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router