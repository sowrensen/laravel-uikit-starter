require('./bootstrap')

import Vue from 'vue'
window.Vue = Vue

// Import the package's JS
import LaravelUikit from '../../vendor/sowrensen/laravel-uikit/resources/js/laravel-uikit'

const app = new Vue({
  el: '#app',
  mounted () {
    // Initialize Laravel UIKit
    const laravelUikit = new LaravelUikit()
  }
})
