const { createApp } = Vue;

createApp({
  data() {
    return {
        variable: "Ciao"
    };
  },
  created() {
        alert("ciao");
  }
}).mount("#app");