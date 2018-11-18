<template>
    <div class="row center-content">
        <div class="col-sm-6 animated-item center-content">
            <figure class="logo">
                    <div class="bg-square"></div>
                    <div class="fg-square"></div>
                    <div class="code-img">
                        <img src="http://dev.wordpress/wp-content/themes/vue-portfolio-theme/assets/icons/idea.png" alt="Light bulb code icon" />
                    </div>
                </figure>
        </div>
        <div class="col-md-6 main-content">
            <h1>Hey, I'm Charlie. A web developer from Gloucestershire<!--<span class="cursor"></span>--></h1>
            <div>
                <router-link to='/about'>Find out all about me -></router-link>
            </div>
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
        padding: 2em;
    }
    .main-content h1 {
        font-size: 2.5em;
        display: inline;
        padding-right: 15px;
        position: relative;
    }
    .main-content h1::after {
        content: "";
        width: 6px;
        height: 35px;
        display: block;
        position: absolute;
        background-color: rgba(256,256,256,1);
        bottom: 8px;
        right: 5px;
        animation: pulse 0.5s ease-in-out infinite alternate;
    }
    @keyframes pulse {
        0% {
            background-color: rgba(256,256,256,1);
        }
        100% {
            background-color: rgba(256,256,256,0);
        }
    }
    .main-content span.cursor {
        width: 15px;
        height: 100%;
        background-color: #fff;
    }
    .main-content a {
        background-color: transparent;
        font-size: 1.25em;
        padding: 0.5em;
        margin-top: 0.25em;
        display: inline-block;
        transition: all 0.25s ease-in-out;
    }
    .main-content a:hover {
        background-color: #fecb56;
        color: #000;
    }
    .logo {
        width: 200px;
        height: 200px; 
        margin: 40px auto;
        position: relative;
    }
    .bg-square {
        width: 200px;
        height: 200px;
        background-color: #fecb56;
        position: absolute;
        z-index: 5;
        animation: logoBg 5s cubic-bezier(0.69, 0.03, 0.21, 1.01) 2s infinite alternate;
    }
    .fg-square {
        width: 200px;
        height: 200px;
        background-color: #24364a;
        position: absolute;
        z-index: 6; 
        transform: rotate(45deg);
        animation: logoFg 5s cubic-bezier(0.69, 0.03, 0.21, 1.01) 2s infinite alternate;
        box-shadow: 0 5px 5px -3px rgba(0,0,0,.2), 0 8px 10px 1px rgba(0,0,0,.14), 0 3px 14px 2px rgba(0,0,0,.12);
    }
    .code-img {
        display: inline-block;
        width: 185px;
        height: 185px;
        position: absolute;
        z-index: 7;
        top: 7px;
        left: 7px;
        animation: logoIcon 5s cubic-bezier(0.69, 0.03, 0.21, 1.01) 2s infinite alternate;
    }
    .code-img img {
        width: 185px;
        height: 185px;
    }
    /* animation */
    @keyframes logoBg {
    0% {
        transform: rotate(0deg);
    }
    42.5% {
        transform: rotate(0deg);
    }  
    57.5% {
        transform: rotate(45deg);
    }
    100% {
        transform: rotate(45deg)
    }
    }
    @keyframes logoFg {
    0% {
        transform: rotate(45deg);
    }
    42.5% {
        transform: rotate(45deg);
    }
    57.5% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(0deg)
    }
    }
    @keyframes logoIcon {
    0% {
        transform: rotate(0deg);
    }
    42.5% {
        transform: rotate(0deg);
    }
    57.5% {
        transform: rotate(360deg);
    }
    100% {
        transform: rotate(360deg);
    }
    }
</style>
