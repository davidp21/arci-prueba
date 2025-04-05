import { createWebHistory, createRouter } from 'vue-router'

import HomeView from '@/pages/HomeView.vue'
import AboutView from '@/pages/AboutView.vue'
import ContactView from '@/pages/ContactView.vue'
import LoginView from '@/pages/LoginView.vue'

const routes = [
  { path: '/', component: HomeView, name: 'home' },
  { path: '/home', redirect: { name: 'home' } },
  { path: '/sobre nosotros', component: AboutView, name: 'about' },
  { path: '/contacto', component:ContactView, name: 'contact' },
  { path: '/login', component: LoginView, name: 'login' },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router