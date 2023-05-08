
const  { createApp } = Vue;

createApp(
    {
        data(){
            return {
                title: 'PHP ToDo List JSON',
                apiUrl: '../php-todo-list-json/server.php',
            }
        },
        methods : {
            getData(){
                axios.get(this.apiUrl).then((res)=>{
                    console.log(res.data);
                    console.log(res.data[0]);
                
                })
            }
        },
        mounted(){
             this.getData();
        }
    }
).mount('#app');