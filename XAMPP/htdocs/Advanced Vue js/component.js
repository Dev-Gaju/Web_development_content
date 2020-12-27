	Vue.component('greetings', {
    template:'<p>hey! I am Gaju and I am a {{name}}<button v-on:click="ChangeName">Name Changed</button></p>',
         
         data:function(){
         	return{
         		name: 'Developer and Designer'
         	}
         },

         methods:{
			ChangeName:function(){
				this.name= "Dev-Gaju"
			}
		}

 
	});




	new Vue({
		el:'#first-one',

	});


	new Vue({
		el:'#second-one',

	})

