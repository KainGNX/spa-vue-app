<template>
    <component :is="layout"></component>
</template>

<script>
    import LayoutDefault from './layouts/Default.vue';
    import LayoutIndex from './layouts/Index.vue';

    const default_layout = 'default'
    export default {
        name: 'App',
        computed: {
            layout () {
                return 'v-layout-' + (this.$route.meta.layout || default_layout);
            }
        },
        components: {
            'v-layout-default' : LayoutDefault,
            'v-layout-index' : LayoutIndex,
        }
    }
</script>
