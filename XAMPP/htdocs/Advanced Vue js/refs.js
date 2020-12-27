new Vue({
	el:'#refs',
	data:{
		name:'',

	},
	methods:{

		foodName:function(){

			// console.log(this.$refs.input.value);
			this.name=this.$refs.input.value;

		}
	}


})