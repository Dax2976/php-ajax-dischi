const app = new Vue({
    el:"#app",
    data:{
      data_dischi:[],
    },
    mounted(){
      axios.get("https://http://localhost:8800/php-ajax-dischi-1/src/php/api.php").then((res)=>{
        console.log(res);
        this.data_dischi = res.data
      })
    }
  })