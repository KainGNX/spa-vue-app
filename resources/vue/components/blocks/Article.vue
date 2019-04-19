<template>
<article>
    <v-heading-main :title="article.title"/>
    <v-article-content :content="article.content"/>
</article>
</template>

<script>
import HeadingMain from '../elements/HeadingMain.vue';
import ArticleContent from './ArticleContent.vue';

export default {
    name: 'Article',
    props: ['article'],
    components: {
        'v-heading-main': HeadingMain,
        'v-article-content': ArticleContent
    }
}
</script>
