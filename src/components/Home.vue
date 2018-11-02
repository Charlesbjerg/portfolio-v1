<template>
    <div class="row center-content">
        <div class="col-sm-6 animated-item center-content">
            <p>Animated thing here</p>
        </div>
        <div class="col-md-6 main-content">
            <h1>Hey, I'm Charlie. A web developer from Gloucestershire</h1>
            <router-link to='/about'>Find out all about me -></router-link>
        </div>
    </div>
</template>
<style scoped>
    .animated-item {
        height: 425px;
        padding: 2em;
    }
    .animated-item p {
        background-color: #fecb56;
        padding: 1em;
        color: #000;
    }
    .main-content {
        color: #fff;
        text-align: right;
    }
    .main-content h1 {
        font-size: 3.5em;
    }
    .main-content a {
        background-color: transparent;
        padding: 0.5em;
        margin-top: 0.25em;
        display: inline-block;
        transition: all 0.25s ease-in-out;
    }
    .main-content a:hover {
        background-color: #fecb56;
        color: #000;
    }
</style>
