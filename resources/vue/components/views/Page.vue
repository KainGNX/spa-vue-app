<template>
    <v-article v-if="loaded" :article="data"/>
</template>

<script>
import MixinRouteToApi from '../../mixins/route-to-api.js'
import BlockArticle from '../blocks/Article.vue';

export default {
    name: 'Page',
    mixins: [ MixinRouteToApi ],
    components: {
        'v-article': BlockArticle
    },
}
</script>
