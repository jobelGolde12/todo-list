<template> 
<h1 >Sinup</h1>
<div class="signupForm">

        <input type="text" placeholder="username" v-model="username">
        <input type="text" placeholder="email" v-model="email">
        <input type="password" placeholder="password" v-model="password">
        <input type="button" value="submit" id="submitBtn" @click="submit">
   
</div>

<div class="container">
   

</div>
</template>

<script> 
export default{
 name: 'signUp',
   data(){
    return{
     username: '',
     email: '',
     password: '',
     usernameArr: [],
     emailArr: [],
     passwordArr: [],
     personArray: [],
     loginSuccess: false
    }
   },

   methods: {
    submit(){
        for(let i = 0; i < this.personArray.length; i++){
         if(this.username === this.personArray[i].personUsername && this.email === this.personArray[i].personEmail && this.password === this.personArray[i].personPassword){
        this.loginSuccess = true
        break;
         }else{
            this.loginSuccess = false
         }
        }
    },

    checkIfHere(){
        class Person{
            constructor(personUsername, personEmail, personPassword){
                this.personUsername = personUsername;
                this.personEmail = personEmail;
                this.personPassword = personPassword
            }

            getUsername(){
                return this.personUsername;
            }
            getEmail(){
                return this.personEmail;
            }
            getPassword(){
                return this.personPassword;
            }
        }
        const person1 = new Person('jobel v. golde', 'goldejobel@gmail.com','nonong123');
        const person2 = new Person('andre gerona', 'ggeronaandre@gmail.com','gerona123');
        const person3 = new Person('alder clemente', 'clementealder@gmail.com','clemente123');
        const person4 = new Person('remalyn armenta', 'armenta@gmail.com','armenta123');
       this.personArray.push(person1, person2, person3, person4)

     
    },
     created() {
     this.checkIfHere()
   }
   }, //end of methods

   created() {
     this.checkIfHere()
   }
}
</script>
