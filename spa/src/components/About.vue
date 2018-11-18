<template>
    <section class="row center-content">
        <div class="col-md-offset-5 col-md-7 col-sm-offset-2 col-sm-10 col-xs-12 main-content">
            <h1>About me</h1>
            <article>
                <header v-if="post.acf.header_url" class="center-content" id="header">
                    <img :src="post.acf.header_url" :alt="post.title.rendered"/>
                </header>
                <div class="article-content" v-html="post.content.rendered">
                </div>
            </article>
        </div>
    </section>
</template>

<script>
// Import Axios
import Axios from 'axios';

export default {
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
            slug: ''
        };
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        fetchData() {
            if (0 < this.fetchNow) {
                this.getPosts(this.route);
                this.ApiResponse = 'Loading this shit';
            }
        },
        getPosts()  {
            const fetchURL = this.wpData.rest_url;
            const fields = "slug,title,content,acf";  
            let request = `${fetchURL}/wp/v2/pages?slug=about-me&_fields=${fields}`;

            Axios.get(request)
                .then((response) => {
                    this.post = response.data[0];
                    this.loading = false;
                })
                .catch((error) => {
                    console.log(error);
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
        margin-top: 0;
    }
    .main-content .breadcrumbs {
        margin-bottom: 2em;
    }
    .main-content article {
        text-align: left;
    }
    .main-content article header {
        width: 100%;
        height: 300px;
        overflow: hidden;
    }
    .main-content article .article-content {
        background-color: #fff;
        color: #000;
        padding: 1em 2em;
        overflow-y: auto; 
        max-height: 450px;
    }
    .main-content article .article-content p {
        margin: 1em 0;
        line-height: 20px;
    }
    .main-content article .article-content a {
        color: #000;
        font-size: 1em;
    }
    .main-content article .article-content a:hover {
        text-decoration: line-through;
    }
</style>

