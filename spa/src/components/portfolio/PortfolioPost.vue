<template>
    <section class="container row center-content">
        <div v-if="loading">
            Loading
        </div>
        <div v-if="post" class="col-lg-10 col-md-9 col-sm-9 col-xs-12 main-content">
            <h1 v-html="post.title.rendered"></h1>
            <router-link to="/portfolio">Back > </router-link>
            <article>
                <header v-if="post.acf.header" class="center-content" id="header">
                    <img :src="post.acf.header" :alt="post.title.rendered" />
                </header>
                <header v-else class="center-content">
                    <i class="far fa-image fa-4x"></i>
                </header>
                <div class="html-content" v-html="post.content.rendered">
                </div>
            </article>
        </div>
        <ProjectLinks class="col-lg-2 col-md-3 col-sm-3 col-xs-12 sidebar" :acfData="post.acf"></ProjectLinks>
    </section>
</template>
<script>
import Axios from 'axios';
import PortfolioPostProjectLinks from  './PortfolioPostProjectLinks';

export default {
    components: {
        'ProjectLinks': PortfolioPostProjectLinks
    },
    props: {
        fetchNow: {
            type: Number,
            default: 1
        }
    },
    data() {
        return {
            loading: true,
            post: null,
            wpData,
            slug: '',
        };
    },
    mounted() {
        this.slug = this.$route.params.slug;
        this.fetchData();
    },
    methods: {
        fetchData() {
            if (0 < this.fetchNow) {
                this.getPosts(this.route);
                this.ApiResponse = 'loading this shit, but the real shit this time.';
            }
        },
        getPosts(route = 'posts', ver = 'wp/v2') {
             
             // Base URL to wp api
            const fetchURL = this.wpData.rest_url;

            // Fields to be returned by API
            const fields = "slug,title,content,acf,vue_meta";

            // Amount of posts to be returned
            const slug = this.slug;

            // build URL for API Request
            let request = `${fetchURL}/${ver}/${route}?slug=${slug}&_fields=${fields}`;

            // Send request with Axios
            Axios.get(request)
                .then((response) => {
                    // map data to this.posts array
                    this.post = response.data[0];
                    // Set this.isAvailable to true and this.apiResponse to an empty string
                    this.loading = false;
                })
                .catch((error) => {
                    console.log(error); // Remove in production environment
                });

        }
    }
}
</script>
<style>
    .main-content {
        text-align: right;
        padding: 1em 3em;
    }
    .main-content h1 {
        font-size: 2.5em;
    }
    .main-content a {
        font-size: 1em;
        display: block;
        margin-bottom: 1.25em;
    }
    .main-content .breadcrumbs {
        margin-bottom: 2em;
    }
    .main-content article {
        text-align: left;
    }
    .main-content article header {
        background-color: #24364a;
        width: 100%;
        max-height: 300px;
        overflow: hidden;
    }
    .main-content article header img {
        width: 100%;
    }
    .main-content article div.html-content {
        background-color: #fff;
        color: #000;
        padding: 1em 2em;
        overflow-y: auto;
        max-height: 450px;
    }
    .sidebar {
        background-color: #24364a;
        margin: 0 auto;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .sidebar h3 {
        text-decoration: underline;
        margin-bottom: 1em;
    }
    .sidebar .btn {
        margin-bottom: 1em;
        width: 100%;
    }
    @media screen and (max-width: 768px) {
        .main-content {
            padding: 1em;
        }
        .main-content article header,
        .main-content article header img {
            max-width: 100%;
            height: auto;
        }
        .sidebar {
            height: 100%;
            padding-bottom: 0.5em;
        }
    }
</style>
