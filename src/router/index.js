import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import ServicesView from '@/views/ServicesView.vue';
import ProjectsView from '@/views/ProjectsView.vue';
import AboutView from '@/views/AboutView.vue';
import ContactView from '@/views/ContactView.vue';
import Trabajo from '@/views/Trabajo.vue';
import PrivacyPolicyView from '@/views/PrivacyPolicyView.vue';

const routes = [
  {
    path: '/',
    name: 'home',
    component: Home
  },
  {
    path: '/trabajo',
    name: 'trabajo',
    component: Trabajo
  },
    {
    path: '/services',
    name: 'services',
    component: ServicesView
  },
      {
    path: '/projects',
    name: 'projects',
    component: ProjectsView
  },
        {
    path: '/about',
    name: 'about',
    component: AboutView
  },
          {
    path: '/contact',
    name: 'contact',
    component: ContactView
  },
  {
    path: '/privacy-policy',
    name: 'privacy-policy',
    component: PrivacyPolicyView
  }

  // Aquí agregaremos más rutas luego
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
