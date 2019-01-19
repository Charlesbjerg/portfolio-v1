<template>
    <div class="row main-content center-content">
        <section class="col-md-offset-5 col-md-7 col-sm-offset-2 col-sm-10 col-xs-12">
        <h1>Contact Me</h1>   
            <article>
                <h2>Drop us a message</h2>
                <p>Need a site designing or developing? Want to hire me? Or do you just have something you want to share with me? Get in touch!</p>
                <p>Send me an <a href="mailto:charlie@charlesbjerg.com">email</a>!</p>       
                <p class="no-margin">or</p>
                <p>Send me a message on <a href="https://www.linkedin.com/in/charlesbjerg/">linkedin</a>!</p>   
                <h2>Find me on other platforms</h2>
                <div class="socials">
                    <a href="https://github.com/charlesbjerg">Github <i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/charlesbjerg">Linkedin <i class="fab fa-linkedin"></i></a>
                    <a href="https://www.flickr.com/people/136767133@N08/">Flickr <i class="fab fa-flickr"></i></a>
                    <a href="https://twitter.com/charlesbjerg">Twitter <i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/charlesbjerg">Instagram <i class="fab fa-instagram"></i></a>
                </div>
            </article>
        </section>
    </div>
</template>

<style scoped>
    div.main-content {
        padding: 3em;
    }
    article {
        background-color: #fff;
        color: #000;
        padding: 2em;
    }
    h1 {
        text-align: right;
    }  
    article p, article a {
        color: #000;
        font-size: 18px;
    }
    article p.no-margin {
        margin: 0;
    }
    article div.socials {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    article div.socials a {
        display: inline-block;
        text-decoration: none;
        padding: 0.5em 1em;
        margin-bottom: 0.75em;
        transition: all 0.25s ease-in-out;
    }
    article div.socials a:hover {
        background-color: #fecb56;
        color: #000;
    }
</style>

