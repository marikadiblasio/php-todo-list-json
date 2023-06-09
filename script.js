
const  { createApp } = Vue;

createApp(
    {
        data(){
            return {
                title: 'PHP ToDo List JSON',
                apiUrl: 'server.php',
                items: [],
                newTask: ''
            }
        },
        methods : {
            getData(){
                axios.get(this.apiUrl).then((res)=>{
                    console.log(res.data);
                    this.items = res.data;
                    console.log(this.items);
                });
            },
            addItem(){
                const data= {
                    item: this.newTask,
                    completed: false
                }; 
                axios.post(this.apiUrl, data, { headers : {
                    'Content-Type': 'multipart/form-data'
                } }).then((res) => {
                    console.log(res);
                    this.items.push(data);
                    this.newTask= '';
                })
            },
            crossItem(item, index){
                const data= {
                    completed: item.completed = !item.completed,
                    index: index
                };
                axios.post(this.apiUrl, data, { headers : {
                    'Content-Type': 'multipart/form-data'
                } }).then((res) => {
                    console.log(res);
                } );
            },
            deleteTask(index){
                const data = {
                    deleteItem: index
                };
                axios.post(this.apiUrl, data, { headers : {
                    'Content-Type': 'multipart/form-data'
                } }).then((res) => {
                    console.log(res);
                    this.items = res.data;
                } );
            }
        },
        mounted(){
            this.getData();
        }
    }
).mount('#app');