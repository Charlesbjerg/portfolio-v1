<template>
    <section class="row center-content">
        <div class="col-md-offset-5 col-md-7 col-sm-offset-2 col-sm-10 col-xs-12 main-content">
            <h1>About me</h1>
            <article>
                <header></header>
                <div class="article-content">
                    <p>I'm Charlie Underhill, a 19 year old web development student from the Forest of Dean in Gloucestershire. I'm currently studying at Staffordshire University in Stoke-on-Trent for a Bsc in Web Development. Alongside university, I've recently started working at <a href="https://www.netbizgroup.co.uk">Netbiz Group</a> in Newcastle under Lyme.</p>
                    <p>Before university I spent 2 years at Gloucestershire College working on a level 3 extended BTEC diploma in Web Development & Web Technologies, where I achieved D*D*D*.</p>
                    <p>I've been learning to code for the last 4 years, inside and outside of education. The majority of the work I currently do are a mix of side projects that I like to work on when I get some spare time. When I'm not working or coding, I like to get out and about with my camera whenever I can. Landscape photography is what I prefer when im out, but I usually take pictures of anything that interests me. <a href="https://www.flickr.com/photos/136767133@N08">My flickr</a> is full of pictures that I've taken over the last couple of years.</p>
                    <p>I am currently interested in year long placement opportunities for the start of summer 2019. If you're interested in recruiting me please <router-link to="/contact">get in touch.</router-link></p>
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
    .main-content {
        text-align: right;
        padding: 1em 3em;
    }
    .main-content h1 {
        margin-top: 0;
        font-size: 2.5em;
    }
    .main-content .breadcrumbs {
        margin-bottom: 2em;
    }
    .main-content article {
        text-align: left;
    }
    .main-content article header {
        background-image: url('/wp-content/themes/vue-portfolio-theme/assets/images/about-head-1.jpg');
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
    .main-content article .article-content p a {
        color: #000;
        font-family: inherit;
        font-size: 1em;
        text-decoration: underline;
    }
    @media screen and (max-width: 768px) {
        .main-content h1 {
            text-align: left;
            margin-top: 0.25em;
        }
    }
</style>

