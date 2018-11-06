<template>
    <section class="">
        <h1>My work</h1>
        <router-link to="/portfolio-item">Portfolio item</router-link>
    </section>
</template>

<script>
import Ajax from '../ajax';
export default {
    data() {
        return {
            loading: false,
            posts: [],
            error: null
        };
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts() {
            this.error = this.post = null;
            this.loading = true;
            Ajax.getPosts((err, post) => {
                
            });
        }
    }
}
</script>

<style>

</style>

