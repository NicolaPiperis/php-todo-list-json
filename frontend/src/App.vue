<script>
  import axios from "axios";
  export default {
    data() {
      return{
        todolist: [],
        newTasks: {
          task: ""
        }
      }
    },
    methods: {      
      onSubmit() {
        // trasformo dei dati necessari in variabili per ordine
        const headers = {
          headers: {"Content-Type": "multipart/form-data"}
        };
        const data = this.newTasks;
        const url = "http://localhost/backend/postTask.php";

        // chiamata axios col post
        axios.post(url, data, headers)
        // mi ritorna nel response ciò che ho scritto nel postTask.php
        .then(response => {
          this.todolist = response.data;
          // this.newTasks = "";
          }
        )      
      }
    },
    mounted() {
      axios.get("http://localhost/backend/index.php")
        .then(
          response => {
            this.todolist = response.data;
          }
        )
    }
  }
</script>

<template>

  <main>

    <h1>
      TO DO LIST
    </h1>

    <div class="todo">
        <ul>
          <li v-for="(todoItem, listidx) in todolist" :key="listidx">
          {{ todoItem.task }}</li>
        </ul>
    </div>

    <form @submit.prevent="onSubmit">

      <input type="text" id="task" v-model="newTasks.task">
      <input type="submit" value="ADD TASK">

    </form>
    
  </main>
  
</template>

<style>
*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body{
  background-color: rgb(0, 0, 42);
  font-family: Arial, Helvetica, sans-serif;
}

h1{
  text-align: center;
  color: rgba(128, 128, 128, 0.5);
  font-size: 50px;
  padding-top: 50px;
}

.todo{
  height: 550px;
  width: 500px;
  border-radius: 10px;
  background-color: white;
  margin: auto;
}

form{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

input{
  height: 50px;
  border: none;
}

li{
  height: 50px;
  border-bottom: 1px solid black;
  list-style: none;
  font-size: 32px;
  padding: 5px;
}


</style>
