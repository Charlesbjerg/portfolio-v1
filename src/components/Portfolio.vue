<template>
    <section class="">
        <h1>My work</h1>
        <router-link to="/portfolio-item">Portfolio item</router-link>
        <section v-if="loading">
            Loading content..
        </section>
        <section v-if="error">
            Error loading content..
        </section>
        <section v-if="postsLoaded">
            <!-- <article v-for="post in posts">
                <h3>{{ post.subtitle }}</h3>
                <h2>{{ post.title }}</h2>
                <router-link :to="post.slug">View item</router-link>
            </article> -->
        </section>
        <section>
            <component :blok="story.content" :is="story.content.component"></component>
        </section>
    </section>
</template>

<script>
// import storyblok js 
import StoryblokClient from 'storyblok-js-client';

// Setup storyblok
let storyblok = new StoryblokClient({
  accessToken: 'rQrOfYPZ8eDMrGUwHAhYFwtt'
});

export default {
    name: 'HelloWorld',
    data() {
        return {
            msg: 'Welcome to this app thing',
            story: {
                content: {
                    body: []
                }
            }
        };
    },
    methods: {
        getStory(slug, version) {
            storyapi.get('cdn/stories/' + slug + '?token=rQrOfYPZ8eDMrGUwHAhYFwtt', {
                version: version
            })
            .then((response) => {
                this.story = response.data.story;
            })
            .catch((error) => {
                console.log(error);
            });
        },
    },
    created() {
        // Init client bridge to work alongisde the editor
        window.storyblok.init({
            accessToken: 'rQrOfYPZ8eDMrGUwHAhYFwtt'
        });
        window.storyblok.on('change', () => {
            this.getStory('home', 'draft');
        });
        window.storyblok.pingEditor(() => {
            if (window.storyblok.isInEditor()) {
                this.getStory('home', 'draft');
            } else {
                this.getStory('home', 'published');
            }
        });
    }
}
</script>

<style>

</style>

