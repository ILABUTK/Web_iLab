
const routes = [
  {
    path: '/',
    component: () => import('layouts/MainLayout.vue'),
    children: [
      { path: '', component: () => import('pages/Index.vue') },
      {
        path: '/resource',
        component: () => import('pages/Resource.vue')
      },
      { path: '/gallery', component: () => import('pages/Gallery.vue') },
      { path: '/about', component: () => import('pages/About.vue') },
      {
        path: '/contact',
        component: () => import('pages/Contact.vue')
      }
    ]
  }
]

// Always leave this as last one
if (process.env.MODE !== 'ssr') {
  routes.push({
    path: '*',
    component: () => import('pages/Error404.vue')
  })
}

export default routes
