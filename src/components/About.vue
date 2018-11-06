<template>
    <section class="row center-content">
        <div class="col-lg-offset-3 col-lg-9 col-sm-offset-2 col-sm-10 main-content">
            <h1>About me</h1>
            <article>
                <header></header>
                <div class="article-content">
                    <p>Lorem ipsum dolor amet single-origin coffee taiyaki pabst seitan, mumblecore vape gochujang slow-carb. Pour-over biodiesel YOLO street art synth, williamsburg edison bulb vinyl 90's etsy. Iceland put a bird on it readymade brunch thundercats wolf flexitarian, pickled normcore marfa farm-to-table. Gastropub kitsch cliche migas chia.</p>
                    <p>Tote bag heirloom vape listicle farm-to-table subway tile crucifix. Poke live-edge sartorial cray, single-origin coffee locavore waistcoat. Pork belly echo park occupy, small batch pabst kale chips flannel williamsburg vinyl. Mustache photo booth intelligentsia chambray, typewriter copper mug hoodie tumeric literally humblebrag.</p>
                    <p>Edison bulb fashion axe everyday carry meh, skateboard cloud bread iceland +1. Bushwick hot chicken ethical knausgaard letterpress. Fashion axe street art cliche, freegan wayfarers raclette knausgaard mlkshk cronut air plant seitan hell of banh mi stumptown. Normcore scenester cronut crucifix dreamcatcher quinoa, la croix tousled seitan meh craft beer master cleanse sartorial hoodie jean shorts. Plaid offal church-key ramps, raw denim taxidermy bushwick edison bulb. Viral post-ironic stumptown try-hard you probably haven't heard of them austin.</p>
                    <p>Lorem ipsum dolor amet single-origin coffee taiyaki pabst seitan, mumblecore vape gochujang slow-carb. Pour-over biodiesel YOLO street art synth, williamsburg edison bulb vinyl 90's etsy. Iceland put a bird on it readymade brunch thundercats wolf flexitarian, pickled normcore marfa farm-to-table. Gastropub kitsch cliche migas chia.</p>
                </div>
            </article>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>

<style>
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
        background-image: url('/static/images/about-head-1.jpg');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 300px;
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
</style>

