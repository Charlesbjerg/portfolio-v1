<template>
    <div class="row main-content center-content">
        <section class="col-md-offset-5 col-md-7 col-sm-offset-3 col-sm-9 col-xs-12 form">
            <h1>Get in touch</h1>
            <form>
                <p>Need a site designing or developing? Want to hire me? Or do you just have something you want to share with me? Send me a message!</p>
                <div class="field">
                  <label class="label" for="name">Full Name</label>
                    <input class="input" type="text" id="name" v-model="name"/>
                </div>  
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <input class="input" type="email" id="email" v-model="email"/>
                </div>  
                <div class="field">
                    <label class="label" for="subject">Subject</label>
                    <input class="input" type="text" id="subject" v-model="subject"/>
                </div>  
                <div class="field">
                    <label class="label" for="message">Message</label>
                    <textarea id="message" v-model="message"></textarea>
                </div>  
                <button class="btn" type="button" v-on:click="submit"><i class="fa fa-envelope"></i>Send it</button>
            </form>
        </section>
    </div>
</template>

<script>
import Axios from 'axios';
export default {
    methods: {
        submit: function(e) {
            // considering starting an animation here and end it/transition it into another animation in the then or catch function
            console.log(e.target);
            e.target.classList.add("sending");
            e.target.innerHTML = "<i class='fa fa-envelope'></i>Sending...";
            // Submit form data to cloud function end point
            Axios.post('https://europe-west1-cbpor2.cloudfunctions.net/addMessage', {
                name: message.value,
                email: email.value,
                subject: subject.value,
                message: message.value
            })
            // process response
            .then((res) => {
                e.target.classList.remove("sending");
                e.target.classList.add("success");
                e.target.innerHTML = "<i class='fa fa-envelope'></i>Sent!";
            })
            // process error
            .catch((err) => {
                e.target.classList.remove("sending");
                e.target.classList.add("error");
                e.target.innerHTML = "<i class='fa fa-envelope'></i>Error sending!";
            });
        }   
    }
};
</script>

<style>
    div.main-content {
        padding: 3em;
    }
    section.form h1 {
        text-align: right;
        font-size: 2.5em;
    }
    section.form form {
        background-color: #fff;
        padding: 2em;
    }   
    section.form form p {
        color: #000;
    }
    section.form form div.field {
        display: block;
        width: 100%;
        margin-bottom: 1em;
    }
    section.form form div.field label {
        display: block;
        color: #000;
        text-align: left;
        margin-bottom: 0.5em;
        font-family: 'IBM Plex Mono', monospace;
    }
    section.form form div.field input {
        height: 32px;
    }
    section.form form div.field input,
    section.form form div.field textarea {
        font-family: 'IBM Plex Mono', monospace;
        border: none;
        background-color: #f3f3f3;
        padding: 0.25em 0.5em;
        width: 100%;
    }
    section.form form div.field textarea {
        height: 175px;
        max-height: 250px;
        max-width: 100%;
    }
    section.form form button.btn {
        width: 200px;
        padding-left: 4.5em;
        cursor: pointer;
    }
    section.form form button.sending {
        border-color: #fff;
        background-color: #fff;
        color: #000;
    }
    section.form form button.success,
    section.form form button.success:hover {
        border-color: #2ed573;
        background-color: #2ed573;
    }
    section.form form button.success::before {
        background-color: #2ed573;
    }
    section.form form button.success::after {
        border-color: #2ed573;
    }
    section.form form button.error,
    section.form form button.error:hover {
        border-color: #ee5253;
        background-color: #ee5253;
    }
    section.form form button.error::before {
        background-color: #ee5253;
    }
    section.form form button.error::after {
        border-color: #ee5253;
    }
    section.form form button svg.fa-envelope {
        left: 15px;
        margin-right: 1em;
        position: absolute;
        top: 15px;
    }
   /* section.form form button:hover {
        background-color: #fecb56;
    }*/


</style>

