# Laravel UIKit Starter

This application is a boilerplate for the package [Laravel UIKit](https://github.com/sowrensen/laravel-uikit). Explicitly installed packages are:

- Laravel Fortify
- Laravel UIKit

Fortify is configured to work with Laravel UIKit views and layout. The resources of **Laravel UIKit** are not published, leaving the opportunity to configure from scratch. 

However, **there are two branches, one is with Vue and another is without**. The `master` branch is configured without Vue, the `vue` branch is with Vue. If you are using Vue, you might want to try out [Wormhole](https://github.com/sowrensen/Wormhole), a Laravel package for uploading large files easily. A Vue component built with UIKit is provided with the package which may come handy.

Since, UIKit 3 doesn't come with date picker element, I recommend you to try out [Flatpickr](https://flatpickr.js.org/). Its styling is pretty consistent with UIKit and it has been built using pure JavaScript. Also, the library is much more lightweight than jQuery based pickers.
