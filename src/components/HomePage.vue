<template>
     <div class=" bg-dark _home-page d-flex flex-row">
       <div class="sidenav">
        <div class="_sidenav-header pt-3 pb-3 mb-2 ps-1 bg-primary">
            <h1 class="text-light fs-3 fw-bold mb-0 pb-0">Uprgrade to premume</h1>
            <p class="text-dark">Try our new features</p>
            <button class="btn btn-warning">Go premume <i class="bi bi-arrow-right"></i></button>
        </div>
       <div class="li container p3 rounded pb-3 pt-3 mb-3" data-bs-toggle="modal" data-bs-target="#addTodoModal">
        <i class="bi bi-plus-lg fw-bold"></i> Add todo</div>
       <div class="li container  p3 rounded pb-3 pt-3 mb-3">
        <i class="bi bi-trash"></i> Trash</div>
       <div class="li container  p3 rounded pb-3 pt-3 mb-3">
        <i class="bi bi-person"></i>
        Me</div>
       <div class="li container   p3 rounded pb-3 pt-3 mb-3">
        <i class="bi bi-info-circle"> </i>
        About</div>
       </div> <!-- End of sidenav -->
       
          <div class="main-content">
            <button id="toggleSidenavBtn" @click="toggleSidenavFunc">
          <span><i class="bi bi-arrow-left-circle fs-3 cursor-pointer" v-if="toggleSidenav"></i></span>
           <span><i class="bi bi-arrow-right-circle fs-3 cursor-pointer" v-if="!toggleSidenav"></i></span>
        </button>
            <div class="_main-content-header container-fluid text-light pt-4 d-flex flex-row justify-content-between align-items-center">
            <div><h1 class="fw-bold fs-1">Todo-List</h1></div>
            <div class="top-right-header d-flex flex-row gap-2 ">
             <div><i class="bi bi-sun"></i></div>
             <div><i class="bi bi-three-dots"></i></div>
             <div><i class="bi bi-person"></i></div>
            </div>          
        </div> <!--End of main-content-header -->


         <div class="container _todo-list mt-5" >
              <table class="table">
               <thead>
                <tr class="_todo-data container d-flex flex-row mb-2">
                  <th class="todo-header-title text-primary">Todo</th>
                  <th class="todo-header-time text-primary">Time</th>
                  <th class="todo--header-edit text-primary ms-3">Edit</th>
                  <th class="todo-header-delete text-primary ms-4">Delete</th>
                  
                </tr>
               </thead>

              <tbody v-for="(array,index) in todoArray" :key="index">
                 <tr class="_todo-data container d-flex flex-row mb-3">
                  <td class="todo-title text-light pt-3">{{array.todoName}}</td>
                  <td class="todo-date text-light ms-0 pt-3">{{array.time}}</td>
                  <td class="todo-edit text-light"><button class="btn btn-info ms-4">Edit</button></td>
                  <td class="todo-delete text-light"><button class="btn btn-warning">Delete</button></td>
                  
                </tr>
              </tbody>
              </table>
            </div>

          <!-- add todo Modal-->
<div class="modal fade" id="addTodoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">What's your Todo now?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form">
           <input type="text" class="form-control mb-4 pt-3 pb-3" placeholder="Enter todo..." v-model="todoInput">
           <input type="date" class="form-control mb-4" v-model="date">
           <input type="time" class="form-control mb-4" v-model="time">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="addTodoFunc">Done</button>
      </div>
    </div>
  </div>
</div>


         <div class="_circle-add container bg-primary text-light" @click="toggleModal" data-bs-toggle="modal" data-bs-target="#addTodoModal"><i class="bi bi-plus"></i></div>


       </div>  <!-- End of main-content--->
        
     </div>
</template>

<script>

export default {
    
   name:  'HomePage',

   data(){
    return{
      toggleSidenav: true,
      showAddModal: false,
      todoArray: [],
      todoInput: '',
      date: '',
      time: '',
      dateModify: ''
    }
   },
   methods: {
    toggleSidenavFunc(){
     if(this.toggleSidenav === true){
      document.querySelector('.sidenav').style.width = '0%'
      this.toggleSidenav = false
      
     }else{
      document.querySelector('.sidenav').style.width = '20%'
      this.toggleSidenav = true
     }
    },
    toggleModal(){
      this.showAddModal = !this.showAddModal
    },
    addTodoFunc(){
      const todoObj = {
        todoName: this.todoInput,
        date: this.date,
        time: this.time
      }
      this.todoArray.push(todoObj)
      this.todoInput = ''
      this.date = ''
      this.time = ''
    }
   } //End of methods
}
</script>


<style scoped>
    @import  './styles/HomePageStyle.css';
  

</style>
