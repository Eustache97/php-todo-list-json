<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>ToDo-List</title>
</head>
<body>
    <main>
        <div id="app">
            <div class="ms_container text-center">
                <h1> ToDo List </h1>
                <div>
                    <label for="to-do"></label>
                    <input type="text" id="to-do" placeholder="Inserisci un nuovo toDo" v-model="newToDo">
                    <button class="btn btn-primary ms-2" @click="addToDo">Salva</button>
                </div>
                <div class="todolist">
                    <ul>
                        <li class=" d-flex justify-content-between align-items-center" v-for="(toDo, index) in toDoList" :key="index">
                            <div>
                                <span class="check-todo"
                                v-if="toDo.done">&check;</span>
                                <p
                                class="d-inline-block"
                                :class="toDoList[index].done === true ? 'done' : ''"
                                @click="doneNotDone(index)"> {{toDo.text}} </p> 
                            </div>
                            <span class="delete-todo"><i class="fa-solid fa-trash" @click="deleteToDo(index)"></i></span>   
                        </li>
                    </ul>
                </div>
            
            </div>
        </div> 
    </main>
  <script src="js/script.js"></script>  
</body>
</html>