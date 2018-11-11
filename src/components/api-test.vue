<template>
    <section>
        <h1>API Test</h1>
        <h2>Probably just console logged data here</h2>
        <p>{{ info }}</p>
    </section>
</template>
<script>
import Axios from 'axios';
    export default {
        data() {
            return {
                info: null
            }
        },
        mounted () {
            Axios.get('https://api.openweathermap.org/data/2.5/forecast?id=524901&APPID=803979759232a002bbc7403c7edc210e')
                 .then(response => {
                     console.log(response);
                     this.info = response.data;
                }
            );
        }
    }
</script>
<style>

</style>
    
