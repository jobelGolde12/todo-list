<template>
  
<HomePage v-if="homeIsClicked" />

</template>

<script>

import HomePage from './components/HomePage.vue'



export default {
  name: 'App',
  data(){
    return{
     homeIsClicked: true
    }
  },
  components:{
    HomePage
  }
   
}
</script>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  width: 100vw;
  height: 100vh;
}


</style>
