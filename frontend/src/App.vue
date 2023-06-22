<script>
  import axios from "axios";
  export default {
    mounted() {
      axios.get("http://localhost/backend/")
        .then(
          response => {
            console.log(JASON.stringify(response))
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

    </div>

    <form>

      <input type="text">
      <input type="submit">

    </form>
    
  </main>
  
</template>

<style>
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



</style>
