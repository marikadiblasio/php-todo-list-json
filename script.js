
const  { createApp } = Vue;

createApp(
    {
        data(){
            return {
                title: 'PHP ToDo List JSON',
                apiUrl: 'server.php',
            }
        },
        methods : {
            getData(){
                axios.get(this.apiUrl).then((res)=>{
                    console.log(res.data);
                });
            }
        },
        mounted(){
            this.getData();
        }
    }
).mount('#app');