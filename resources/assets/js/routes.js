import VueRouter from 'vue-router';

let routes = [
  {
    path: '/driver',
    component: require('./components/Example')
  }
]

export default new VueRouter({
  routes
})
