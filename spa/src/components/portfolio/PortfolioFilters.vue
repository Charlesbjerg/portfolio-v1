<template>
    <div class="filters"> 
        <button type="button"    
                class="btn-filter"
                v-for="category in categories"
                v-if="categories"
                :key="category.id"
                :value="category.id"
                @click="filterSelected">{{ category.name }}</button>
    </div>
</template>

<script>
import Axios from 'axios';
import { filterBus } from '../../main.js';
export default {
    props: {
        categories: {
            type: Array
        },
        wpData : {
            type: Array
        }
    },
    data() {
        return {
            categories: [],
            filter: ''
        };
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories(route = 'categories', ver = 'wp/v2') {
            // Base URL to wp api
            const fetchURL = "http://dev.wordpress/wp-json";

            // Fields to be returned by API
            const fields = "id,name";

            // build URL for API Request
            let request = `${fetchURL}/${ver}/${route}?_fields=${fields}`;
            request = fetchURL + "/" + ver + "/" + route + "?_fields=" + fields; 
            console.log(request);
            // Send request with Axios
            Axios.get(request)
                .then((response) => {
                    // console.log(response);
                    // Set categories to reponse data
                    this.categories = response.data;
                })
                .catch((error) => {
                    console.log(error); // Remove in production environment
                });
        },
        filterSelected() {
            if (this.filter != '')  {
                // remove active classes from all buttons
                let btns = document.getElementsByClassName('btn-filter');
                for (let i = 0; i < btns.length; i++) {
                    btns[i].className = "btn-filter";
                }
       
                // if already filtered, remove
                if (this.filter.value == event.target.value) {
                    // remove filter and run default
                    event.target.className = "btn-filter";
                    this.filter = '';
                    filterBus.$emit('filterDisabled');
                    return;
                }
            }
            // emit event sending data to bus
            filterBus.$emit('filterSelected', event.target.value);
            // change class name of button
            event.target.className = "btn-filter active";
            // set filter active
            this.filter = event.target;
        }
    }
}
</script>

<style>
div.filters button {
    background-color: transparent;
    border: none;
    color: #fff;
    display: inline-block;
    font-size: 1.25em;
    margin-bottom: 1em;
    opacity: 0.75;
    width: 100%;
    text-align: center;
}
div.filters button:hover {
    cursor: pointer;
    opacity: 1;
    text-decoration: line-through;
}
div.filters button.active {
    opacity: 1;
    text-decoration: line-through;
}
</style>