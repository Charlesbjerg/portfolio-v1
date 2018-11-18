<template>
    <div class="container row">
        <div class="posts col-lg-10 col-md-9 col-sm-9 col-xs-12 center-content">
            <div class="posts-container">
                <h1>Portfolio</h1>
                <div class="mobile-filters">
                    <h2>Filters</h2>
                    <Filters />
                </div>
                <GetPortfolioPosts />
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 sidebar center-content">
            <div class="filters-container">
                <h2>Filters</h2>
                <Filters />
            </div>
        </div>
    </div>
</template>
<script>
// Import components
import GetPortfolioPosts from './GetPortfolioPosts';
import Filters from './PortfolioFilters'

// Add PostFilters component once it's been built

export default {
    components: {
        // setup components
        'GetPortfolioPosts': GetPortfolioPosts,
        'Filters': Filters
    },
    data() {
        // Data needed by components
        return {
            wpCategories: wpData.post_categories.map( term => term.toLowerCase() ),
            setFilters: [],
            posts: []
        };
    }
}
</script>
<style scoped>
#main {
    height: 100%;
}
div.container h1 {
    margin-top: 0;
    padding-right: 1rem;
    text-align: right;
}
div.posts {
    padding: 0 2em;
}
div.posts-container {
    width: 100%;
}
div.sidebar {
    background-color: #24364a;
    margin: 0 auto;
}
div.filters-container h2 {
    text-align: center;
    margin-bottom: 1em;
}

.mobile-filters {
    background-color: #24364a;
    display: none;
    width: 100%;
    text-align: center;
    padding: 1em;
    margin-bottom: 1em; 
}
.mobile-filters button {
    background-color: transparent;
    border: none;
    color: #fff;
    font-size: 1.25em;
    margin-bottom: 1em;
    opacity: 0.75;
}
.mobile-filters button:hover {
    cursor: pointer;
    opacity: 1;
    text-decoration: line-through;
}
.mobile-filters button.active {
    opacity: 1;
    text-decoration: line-through;
}

@media screen and (max-width: 768px) {
    #main {
        height: auto;
    }
    .posts {
        display: block;
        padding: 0 !important;
    }
    .posts-container h1 {
        font-size: 2em;
        margin: 0.75em 0 !important;
    }
    .mobile-filters {
        display: block;
    }
    .sidebar {
        display: none;
    }
}
</style>

