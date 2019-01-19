<template>
    <section>
        <h2>Project links</h2>
        <a v-if="acfData.codepen" :href="acfData.codepen" class="btn"><i class="fab fa-codepen"></i>Codepen</a>
        <a v-if="acfData.github" :href="acfData.github" class="btn"><i class="fab fa-github"></i>Github</a>    
        <a v-if="acfData.project" :href="acfData.project" class="btn"><i class="fas fa-link"></i>Project</a>    
    </section>
</template>
<script>
export default {
    props: {
        acfData: {
            type: Object,
            default: {}
        }
    }
};
</script>
<style>
    a.btn {
        padding-left: 4.5em;
    }
    h2 {
        text-decoration: underline;
    }
</style>
