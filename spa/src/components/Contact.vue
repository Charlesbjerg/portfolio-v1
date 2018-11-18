<template>
    <div class="row main-content center-content">
        <section class="col-md-offset-5 col-md-7 col-sm-offset-2 col-sm-10 col-xs-12 form">
            <h1>Get in touch</h1>
            <form>
                <h3>Other Platforms</h3>
                <div class="socials">
                    <a href="https://github.com/charlesbjerg"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/charlesbjerg"><i class="fab fa-linkedin"></i></a>
                    <a href="https://instagram.com/charlesbjerg_"><i class="fab fa-instagram"></i></a>
                    <a href="mailto:charlie@charlesbjerg.com"><i class="fa fa-envelope"></i></a>
                </div>
                <p>Need a site designing or developing? Want to hire me? Or do you just have something you want to share with me? Send me a message!</p>
                <div class="field">
                  <label class="label" for="name">Full Name</label>
                    <input class="input" type="text" id="name" v-model="name" required/>
                </div>  
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <input class="input" type="email" id="email" v-model="email" required/>
                </div>  
                <div class="field">
                    <label class="label" for="subject">Subject</label>
                    <input class="input" type="text" id="subject" v-model="subject" required/>
                </div>  
                <div class="field">
                    <label class="label" for="message">Message</label>
                    <textarea id="message" v-model="message" required></textarea>
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
            e.preventDefault();

            // considering starting an animation here and end it/transition it into another animation in the then or catch function
            e.target.classList.add("sending");
            e.target.innerHTML = "<i class='fa fa-envelope'></i>Sending...";

            // build data object
            let data = {
                name: message.value,
                email: email.value,
                subject: subject.value,
                message: message.value
            };

            // Submit form data to cloud function end point
            Axios.post('https://europe-west1-cbpor2.cloudfunctions.net/addMessage', data)
                .then(res => {
                    console.log(res);
                    if (res.status == '200') {
                        e.target.classList.remove("sending");
                        e.target.classList.add("success");
                        e.target.innerHTML = "<i class='fa fa-envelope'></i>Sent!";
                    } else {
                        e.target.classList.remove("sending");
                        e.target.classList.add("error");
                        e.target.innerHTML = "<i class='fa fa-envelope'></i>Error sending!";
                    }
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
    }
    section.form form {
        background-color: #fff;
        padding: 2em;
    }   
    section.form form {
        color: #000;
    }
    section.form form h3 {
        margin-bottom: 0.25em;
        margin-top: 0;
    }
    section.form form div.socials {
        display: flex;
        align-content: center;
    }
    section.form form div.socials a {
        margin-right: 0.5em;
        margin-top: 0.5em;
    }
    section.form form div.socials a svg {
        color: #000;
        height: 32px;
        width: 32px;
        transition: 0.25s ease-in-out;
    } 
    section.form form div.socials a:hover svg {
        color: #fecb56;
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
        height: 130px;
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
    section.form form button.success svg,
    section.form form button.success:hover svg {
        color: #fff;
    }

    section.form form button svg.fa-envelope {
        left: 15px;
        margin-right: 1em;
        position: absolute;
        top: 15px;
    }
   @media screen and (max-width: 500px) {
       div.main-content {
           padding: 1em;
       }
       section.form form h3 {
           text-align: right;   
       }
       section.form form div.socials {
           justify-content: flex-end;
       }
       section.form form div.socials a {
           margin-left: 0.5em;
       }
       section.form form button.btn {
           width: 100%;
           display: block;
           text-align: center;
           padding: 1em 0.5em;
       }
   }


</style>

