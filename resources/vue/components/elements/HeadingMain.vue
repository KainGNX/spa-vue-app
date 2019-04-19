<template>
<header>
    <h1>{{ title }}</h1>
</header>
</template>

<script>
import Vue from 'vue';

export default {
    name: 'HeadingMain',
    props: ['title'],
}
</script>
