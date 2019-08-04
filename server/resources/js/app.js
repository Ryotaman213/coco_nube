require('./bootstrap');

window.Vue = require('vue');


import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

library.add(fas, fab, far)

Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.config.productionTip = false
Vue.use(BootstrapVue)
// ルーティングの定義をインポートする
import router from './router'
// ルートコンポーネントをインポートする
import App from './App.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

new Vue({
  el: '#app',
  router, // ルーティングの定義を読み込む
  components: { App }, // ルートコンポーネントの使用を宣言する
  template: '<App />' // ルートコンポーネントを描画する
});
