<template>
<nav class="nav-main navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <router-link to="/" class="navbar-brand">SPA Vue App</router-link>
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item">
                <router-link to="/" class="nav-link">Home</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/about" class="nav-link">About</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/contact" class="nav-link">Contact</router-link>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown08" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
                <div class="dropdown-menu" aria-labelledby="dropdown08">
                    <a class="dropdown-item" href="https://laravel.com/" target="_blank">Laravel: PHP Framwork</a>
                    <a class="dropdown-item" href="https://vuejs.org/" target="_blank">Vue.js: Javascript Framwork</a>
                    <a class="dropdown-item" href="https://webpack.js.org/" target="_blank">Webpack</a>
                    <a class="dropdown-item" href="https://sass-lang.com/" target="_blank">Sass Stylsheets</a>
                    <a class="dropdown-item" href="https://greaterdevelopment.com/" target="_blank">Greater Development</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
</template>

<script>
export default {
    name: 'NavMain'
}
</script>
