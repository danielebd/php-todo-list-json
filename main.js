const { createApp } = Vue;

createApp({
    data(){
        return {
            todo: [],
        }
    },
    created(){
        axios.get('server.php')
        .then((response) => {
            this.todo = response
        })
    }
    
}).mount('#app');