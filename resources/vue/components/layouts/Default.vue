<template>
<div id="layout-default" class="layout-container">
    <v-header></v-header>
    <div id="main-view-container" class="d-flex">
        <main class="primary-content">
            <div class="container">
                <router-view :key="$route.path"></router-view>
            </div>
        </main>
        <v-sidebar></v-sidebar>
    </div>
    <v-footer></v-footer>
</div>
</template>

<script>
import Header from '../blocks/Header.vue';
import Footer from '../blocks/Footer.vue';
import Sidebar from '../blocks/Sidebar.vue';

export default {
    name: 'LayoutDefault',
    components: {
        'v-header': Header,
        'v-footer': Footer,
        'v-sidebar': Sidebar
    }
}
</script>
