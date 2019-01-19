<template>
    <!-- Only displays the content if isAvailable -->
    <section v-if="isAvailable">
    <!-- Displays portfolio post for each post -->
        <!-- <transition-group name="custom-classes-transition" enter-active-class="animated fadeIn" leave-active-class="animated fadeOut" mode="out-in" -->
            <transition-group name="flip-list"
                          tag="div"
                          class="row"
                          id="posts">
            <PortfolioPostLink v-for="post in posts"
                        v-bind:key="post.slug"
                        :post="post"
                        class="col-xs-12 col-md-6 col-lg-4"/>
          <router-view id="main"/>
        </transition-group>

    </section>
</template>
<script>

// Get Axios and post 
import Axios from 'axios';
import PortfolioPostLink from './PortfolioPostLink';
import { filterBus } from '../../main.js'

export default {
    components: {
        'PortfolioPostLink': PortfolioPostLink
    },
    props: {
        // A prop for passing through the categories filters can be added at a later date
        route: {
            type: String,
            default: 'posts'
        },
        fetchNow: {
            type: Number,
            default: 1
        }
    },
    data() {
        return {
            ApiResponse: '',
            posts: [],
            wpData,
            isAvailable: false
        };
    },
    watch: {
        fetchNow: 'fetchData'
    },
    mounted() {
        // Gets data from API when component is loaded
        this.fetchData();
        // Set up event listener for filter selections
        filterBus.$on('filterSelected', (id) => {;
            this.getFilteredPosts('posts', 'wp/v2', id);
        });
        filterBus.$on('filterDisabled', () => {
            this.fetchData();
        })
    },
    methods: {
        fetchData() {
            if (0 < this.fetchNow) {
                this.getPosts(this.route);
                this.ApiResponse = 'Loading this shit';
            }       
        },
        getPosts(route = 'posts', ver = 'wp/v2') {

            // Base URL to wp api
            const fetchURL = this.wpData.rest_url;

            // Fields to be returned by API
            const fields = "slug,title,acf,vue_meta";

            // Amount of posts to be returned
            const numPosts = 6;

            // build URL for API Request
            let request = `${fetchURL}/${ver}/${route}?per_page=${numPosts}&_fields=${fields}`;

            console.log(request);

            // Send request with Axios
            Axios.get(request)
                .then((response) => {
                    // map data to this.posts array
                    this.posts = response.data;
                    // Set this.isAvailable to true and this.apiResponse to an empty string
                    this.isAvailable = true;
                    this.ApiResponse = 'This shit should be fully loaded';
                    console.log(response.data);
                })
                .catch((error) => {
                    this.ApiResponse = "Big time fail, maybe next time though.";
                    console.log(error); // Remove in production environment
                });
        },
        getFilteredPosts(route = 'posts', ver = 'wp/v2', id) {

            // fade posts out
            document.getElementById('posts').style.opacity = 0;
            setTimeout(function() {
            //  document.getElementById('posts').style.display = "none";                
            }, 250);

            console.log("It's running");

            // const fetchURL = this.wpData.rest_url;
            const fetchURL = 'http://dev.wordpress/wp-json';
            const fields = "slug,title,acf,vue_meta";
            const numPosts = 6;
            const catId = id;

            let request = `${fetchURL}/${ver}/${route}?categories=${catId}&per_page=${numPosts}&_fields=${fields}`;

            console.log(request);

            Axios.get(request)
                .then((response) => {

                    this.posts = response.data;
                    this.ApiResponse = 'Content loaded';
                    this.isAvailable = true;

                    // Fade posts in
                    document.getElementById('posts').style.display = "none";                    
                    document.getElementById('posts').style.display = "flex";                    
                    document.getElementById('posts').style.opacity = 1;

                })
                .catch((error) => {
                    this.ApiResponse = 'Content failed to load';
                    this.isAvailable = false;
                    console.log(error);
            });
        }
    }

};
</script>
<style>
section.main-content {
  display: flex;  
  justify-content: flex-end;
}
#posts {
    transition: 0.25s ease-in-out;
    justify-content: flex-end;
}
</style>
    
