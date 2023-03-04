//require('./bootstrap');

require('alpinejs');
window.axios = require('axios');

//require('./bootstrap'); //==========この行を削除
//==========ここから追加==========
import '../css/app.css'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'

const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
  }
})
//==========ここまで追加==========
