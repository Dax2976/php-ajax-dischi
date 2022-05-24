const app = new Vue({
    el:"#app",
    data:{
      data_dischi:[],
    },
    mounted(){
      axios.get("http://localhost:8800/php-ajax-dischi/php/api.php").then((response)=>{
        console.log(response);
        this.data_dischi = response.data.response
      })
    }
  })