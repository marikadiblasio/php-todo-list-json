<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="wrapper">
        <header class="bg-info-subtle dark-info">
            <h1>{{title}}</h1>
        </header>
        <main class="py-5">
            <div class="w-50 mx-auto h-75">
            <h3 class="dark-info">
                Cancella i task dopo averli completati!
            </h3>
            <ul class="mt-5 overflow-y-auto h-75 my-auto">
                <li v-for="(item, index) in items" @click="item.completed = !item.completed" :class="item.completed ? 'completed' : ''">
                    {{item.item}}
                </li>
            </ul>
            </div>
            <div class="w-50 mx-auto py-5 input-group">
                <h3 class="dark-info text-center mb-5 w-100">
                    Inserisci un nuovo task
                </h3>
                <input @keyup.enter="addItem" class="form-control" type="text" placeholder="Inserisci un nuovo item" v-model="newTask">
                <button @click="addItem" class="btn btn-outline-info">Invia</button>
            </div>
        </main>
        
        <footer class="bg-info-subtle dark-info">
            <span>Made with &hearts; by Boolean</span>
        </footer>
        </div>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>