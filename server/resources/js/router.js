import Vue from 'vue'
import VueRouter from 'vue-router'

// ページコンポーネントをインポートする
import Home from './pages/Home.vue'
import Menu from './pages/Menu.vue'
import Reservation from './pages/Reservation.vue'

// VueRouterプラグインを使用する
// これによって<RouterView />コンポーネントなどを使うことができる
Vue.use(VueRouter)

// パスとコンポーネントのマッピング
const routes = [
  {
    path: '/',
    component: Home
  },
  {
    path: '/menu',
    component: Menu
  },
  {
    path: '/reservation',
    component: Reservation
  },
]

// VueRouterインスタンスを作成する
const router = new VueRouter({
  mode: 'history',
  routes
})

// VueRouterインスタンスをエクスポートする
// app.jsでインポートするため
export default router
