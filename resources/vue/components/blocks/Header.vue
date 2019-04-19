<template>
    <header>
        <v-nav-main></v-nav-main>
    </header>
</template>

<script>
import NavMain from './NavMain.vue';
export default {
    name: 'Header',
    components: {
        'v-nav-main': NavMain
    }
}
</script>
