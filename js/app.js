const { createApp } = Vue

createApp({
    data() {
        return {
            // message: 'Hello Vue!',


        }
    },

    mounted() {

        axios.get('./server.php').then(res => { console.log(res.data) });

        // console.log(axios)
    },
}).mount('#app')