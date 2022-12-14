const { createApp } = Vue;

createApp({
  data() {
    return {
        toDoList: [],
        newToDo: ""
    };
  },
  created() {
    axios.get("server.php").then((resp) => {
      this.toDoList = resp.data;
      console.log(this.toDoList);
    })
  },
  methods: {
    addToDo(){
      const data = {
        newToDo: this.newToDo,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.toDoList = resp.data;
          this.newToDo = "";
        });
    },
    doneNotDone(index) {
      const data = {
        toggleIndex: index,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.toDoList = resp.data;
        });
  },
  deleteToDo(index) {
          const data = {
            deleteIndex: index,
          };
    
          axios
            .post("server.php",data, {
              headers: { "Content-Type": "multipart/form-data" },
            })
            .then((resp) => {
              this.todoList = resp.data;
            });
  }
}
}).mount("#app");