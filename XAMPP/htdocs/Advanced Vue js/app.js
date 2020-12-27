new Vue({
	el: '#vue-app',
	data:{
		name: 'Gaju',
		job: 'Unemployer',
		website: 'http://www.youtube.com',
		websiteTage:'<a href="http://www.youtube.com">Youtube</a>',
		age :'25',
		x:'0',
		y:'0',
	
	
		todos:[
		{ text: 'I am Gajuruddin'},
		{ text: 'Developing '},
		{ text: 'Counting'},

		],

	},
	methods:{
          greet: function(time){
          	return 'Good ' + time + ' ' + this.name +' ' +this.job

          },

          add:function(){
             this.age++
          },

           sub:function(){
             this.age--
          },
          updateXY:function(event){
          	this.x= event.offsetX;
          	this.y=event.offsetY;

          },

          Yourname:function(){
          	console.log('enter your name')

          }


	},

	computed:{
		


	}

});
