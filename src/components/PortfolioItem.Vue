<template>
    <section class="row">
        <div class="col-lg-10 col-sm-9 main-content">
            <h1>Portfolio Item</h1>
            <div class="breadcrumbs">
                <router-link to="/">Post</router-link>
                <router-link to="/portfolio">Portfolio</router-link>
                <router-link to="/">Home</router-link>
            </div>
            <article>
                <header></header>
                <div class="article-content">
                    <p>Lorem ipsum dolor amet single-origin coffee taiyaki pabst seitan, mumblecore vape gochujang slow-carb. Pour-over biodiesel YOLO street art synth, williamsburg edison bulb vinyl 90's etsy. Iceland put a bird on it readymade brunch thundercats wolf flexitarian, pickled normcore marfa farm-to-table. Gastropub kitsch cliche migas chia.</p>
                    <p>Tote bag heirloom vape listicle farm-to-table subway tile crucifix. Poke live-edge sartorial cray, single-origin coffee locavore waistcoat. Pork belly echo park occupy, small batch pabst kale chips flannel williamsburg vinyl. Mustache photo booth intelligentsia chambray, typewriter copper mug hoodie tumeric literally humblebrag.</p>
                    <p>Edison bulb fashion axe everyday carry meh, skateboard cloud bread iceland +1. Bushwick hot chicken ethical knausgaard letterpress. Fashion axe street art cliche, freegan wayfarers raclette knausgaard mlkshk cronut air plant seitan hell of banh mi stumptown. Normcore scenester cronut crucifix dreamcatcher quinoa, la croix tousled seitan meh craft beer master cleanse sartorial hoodie jean shorts. Plaid offal church-key ramps, raw denim taxidermy bushwick edison bulb. Viral post-ironic stumptown try-hard you probably haven't heard of them austin.</p>
                    <p>Crucifix cray hella lyft. Raw denim edison bulb tousled hoodie. Keffiyeh dreamcatcher literally cardigan. Godard mlkshk cronut tofu polaroid hell of keytar vinyl irony seitan fixie. Vaporware hella plaid, lyft cray before they sold out kickstarter pok pok typewriter freegan palo santo woke. Leggings iceland you probably haven't heard of them tousled typewriter shabby chic ethical. Adaptogen hot chicken typewriter raclette, succulents retro activated charcoal church-key cronut snackwave butcher 8-bit portland four dollar toast.</p>
                    <p>Lorem ipsum dolor amet single-origin coffee taiyaki pabst seitan, mumblecore vape gochujang slow-carb. Pour-over biodiesel YOLO street art synth, williamsburg edison bulb vinyl 90's etsy. Iceland put a bird on it readymade brunch thundercats wolf flexitarian, pickled normcore marfa farm-to-table. Gastropub kitsch cliche migas chia.</p>
                    <p>Tote bag heirloom vape listicle farm-to-table subway tile crucifix. Poke live-edge sartorial cray, single-origin coffee locavore waistcoat. Pork belly echo park occupy, small batch pabst kale chips flannel williamsburg vinyl. Mustache photo booth intelligentsia chambray, typewriter copper mug hoodie tumeric literally humblebrag.</p>
                    <p>Edison bulb fashion axe everyday carry meh, skateboard cloud bread iceland +1. Bushwick hot chicken ethical knausgaard letterpress. Fashion axe street art cliche, freegan wayfarers raclette knausgaard mlkshk cronut air plant seitan hell of banh mi stumptown. Normcore scenester cronut crucifix dreamcatcher quinoa, la croix tousled seitan meh craft beer master cleanse sartorial hoodie jean shorts. Plaid offal church-key ramps, raw denim taxidermy bushwick edison bulb. Viral post-ironic stumptown try-hard you probably haven't heard of them austin.</p>
                    <p>Crucifix cray hella lyft. Raw denim edison bulb tousled hoodie. Keffiyeh dreamcatcher literally cardigan. Godard mlkshk cronut tofu polaroid hell of keytar vinyl irony seitan fixie. Vaporware hella plaid, lyft cray before they sold out kickstarter pok pok typewriter freegan palo santo woke. Leggings iceland you probably haven't heard of them tousled typewriter shabby chic ethical. Adaptogen hot chicken typewriter raclette, succulents retro activated charcoal church-key cronut snackwave butcher 8-bit portland four dollar toast.</p>
                </div>
            </article>
        </div>
        <div class="col-lg-2 col-sm-3 sidebar">
            <h3>Project links</h3>
            <a href="#" class="btn codepen-link"><i class="fab fa-codepen"></i>View on Codepen</a>
            <a href="#" class="btn web-link"><i class="fas fa-link"></i>View Project</a>
            <a href="#" class="btn github-link"><i class="fab fa-github-square"></i>View on Github</a>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style scoped>
    section {
        height: 100%;
    }
    .main-content {
        text-align: right;
        padding: 1em 3em;
    }
    .main-content h1 {
        font-size: 2.5em;
    }
    .main-content .breadcrumbs {
        margin-bottom: 2em;
    }
    .main-content article {
        text-align: left;
    }
    .main-content article header {
        background-image: url('/static/images/header.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 300px;
    }
    .main-content article .article-content {
        background-color: #fff;
        color: #000;
        padding: 1em 2em;
        overflow-y: scroll;
        max-height: 450px;
    }
    .main-content article .article-content p {
        margin: 1em 0;
        line-height: 20px;
    }
    .sidebar {
        background-color: #24364a;
        margin: 0 auto;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* padding:   0; */
    }
    .sidebar h3 {
        text-decoration: underline;
        margin-bottom: 1em;
    }
    .sidebar .btn {
        margin-bottom: 1em;
        width: 100%;
    }
    /* .sidebar a {
        width: 100%;
        margin-bottom: 1em;
    }
    .sidebar a:hover {
        background-color: #1F2F42;
    }
    .sidebar a:hover svg {
        color: #fff;
    }
    .sidebar a::before {
        content: "";
        left: 0;
        top: 0;
        background-color: #fecb56;
        width: 36px;
        height: 50px;
        position: absolute;

    }   
    .sidebar a::after {
        content: "";
        left: 36px;
        top: 0;
        position: absolute;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 50px 25px 0 0;
        border-color: #fecb56 transparent transparent transparent;
    }
    .sidebar a svg { 
        position: absolute;
        top: calc(25px - 8px);
        left: 10px;
        color: #000;
        transition: all 0.25s;
    } */

</style>