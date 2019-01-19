<template>
    <article>
        <div class="post">
            <picture>
                <img v-if="post.acf.icon"
                        :src="post.acf.icon"
                        :alt="post.acf.icon || 'Post thumbnail'" >
            </picture>
            <div class="content">
                <span v-html="post.acf.technologies"></span>
                <h2 v-html="post.title.rendered"></h2>
                <router-link :to='this.url()' class="btn btn-wide"><i class="far fa-eye"></i>View</router-link>
            </div>
        </div>
    </article>
</template>
<script>
export default {
    props: {
        post: {
            type: Object,
            required: true,
            default: null
        }
    },
    methods: {
        url() {
            return '/portfolio/' + this.post.slug;
        }
    }

};
</script>
<style>
.post {
    background-color: #13212e;
    color: #fff;
    height: 300px;
    margin-bottom: 20px;
    overflow: hidden;
    position: relative;
    transition: background-color, box-shadow, transform 0.25s ease-in-out;
    width: 100%;
}
.post picture {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.post picture img {
    backface-visibility: hidden;
    display: block;
    max-height: 100%;
    max-width: 300px;
    transition: 0.25s ease-in-out;
    opacity: 0.25;
    width: auto;
}
.post .content {
    background-color: rgba(0,0,0,0.1);
    box-sizing: border-box;
    height: inherit;
    left: 50%;
    padding: 25px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transition: 0.25s ease-in-out;
    width: inherit;
}
.post:hover {
    -webkit-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 12px 0px rgba(0,0,0,0.75);
    transform: translateY(-10px);
}
.post:hover .content{
    background-color: rgba(0,0,0,0.5)
}
.post:hover picture img {
    opacity: 0.75;
}
.content span {
    font-size: 0.9em;
    opacity: 0.9;
    text-transform: uppercase;
    transition: all 0.25s ease-in-out;
}
.post:hover span {
    opacity: 1;
}
.content h3 {
    font-size: 2em;
}
.content a {
    bottom: 50px;
    display: block;
    margin: 0 auto;
    position: absolute;
    width: calc(100% - 50px);
    transition: border-color, background-color 0.4s ease;
    overflow: hidden;
}
.content a::after {
    left: 35px;
    border-top-width: 52px;
}
.content a.btn {
    padding-left: 0.5em;
    text-align: center;
}

</style>
    
