//require('./bootstrap');

require('alpinejs');
window.axios = require('axios');

//require('./bootstrap'); //==========この行を削除
//==========ここから追加==========
import '../css/app.css'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import FollowButton from './components/FollowButton'
import TabMenu from './components/TabMenu'
import ModalWindow from './components/ModalWindow'

const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    FollowButton,
    TabMenu,
    ModalWindow,
  }
})
//==========ここまで追加==========
