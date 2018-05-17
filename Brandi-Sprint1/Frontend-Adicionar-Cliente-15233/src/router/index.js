import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import Login from '@/components/Login'
import TecnicalForm from '@/components/TecnicalForm'
import AddClient from '@/components/AddClient'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/home',
      name: 'Home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      component: Login
    },
    {
      path: '/form',
      name: 'TecnicalForm',
      component: TecnicalForm
    },
    {
      path: '/addClient',
      name: 'AddClient',
      component: AddClient
    },
    {
      path: '*',
      name: 'login',
      component: Login
    } 
  ]
})
