<template>
    <div class="container" v-html="content"></div>
</template>

<script>
export default {
    name: 'ArticleContent',
    props: ['content']
}
</script>
