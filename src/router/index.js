import { createMemoryHistory, createRouter } from 'vue-router'

import HomeView from '@/pages/HomeView.vue'
import AboutView from '@/pages/AboutView.vue'
import ContactView from '@/pages/ContactView.vue'

const routes = [
  { path: '/', component: HomeView , name: 'home' },
  { path: '/sobre nosotros', component: AboutView, name: 'about' },
  { path: '/contacto', component:ContactView, name : 'contact' },
]

const router = createRouter({
  history: createMemoryHistory(),
  routes,
})

export default router