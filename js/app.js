const { createApp } = Vue

createApp({
    data() {
        return {
            arrayDischi: [],

        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);
            this.arrayDischi = res.data;
        }
        );


    },
}).mount('#app')