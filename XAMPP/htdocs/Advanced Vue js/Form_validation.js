Vue.component('signupForm',{

	template:'#signupForm',
	data(){
		return{
			password:'',
			confirmPassword:'',
			email:'',
			msg:[],
			disableSubmit:true,

		}
	},

	watch:{
		email(value){
			this.eventName(),
			console.log(name),
			this.email=value,
			this.check_email(value)
		},
		password(value){
			this.eventName(),
			this.password=value,
			this.check_password(value)
		},

		confirmPassword(value){
			this.eventName(),
			this.confirmPassword=value,
			this.check_confirm(value)
		}
	},

	methods:{
		newpage(){
			this.$emit('change','tnc')
		},

		check_email(value){
			if (/^\w+([\.-]?\ w+)*@\w+([\.-]?\ w+)*(\.\w{2,3})+$/.test(value)){
				this.msg[name]='';
			}
			else
            this.msg[name]='keep trying....Untill the formate comes true'
		},
		check_password(value){
			this.password_LengthCheck(value);
		},

		check_confirm(value){
			if(this.password_LengthCheck(value)){
				if (value==this.password) {
				this.msg[name]='';
				this.disableSubmit=false
			}else{
				this.msg[name]='passwod didnt match try again'
			}

			}
			
		},

	password_LengthCheck(value){
		remainerChar=6-value.length;
			if (value.length < 6) {
				this.msg[name]='password should be caontainsix digit '+ remainerChar +'to go';
			}else{

				this.msg[name]=''
				return true;
			}

	},
	eventName(){
		name = event.target.name;
	},

	
	onSubmit(){
		alert('Is it worked?');
	}

	}
	

});

Vue.component('tnc',{

	template:'#tnc',

	methods:{
		login(){
      this.$emit('change','signupForm');

		}
	}
})

new Vue({
	el:'#app',
	data:{
		componentName:'signupForm'
	},
	methods:{
	changes(newcomp){
		this.componentName=newcomp;

	}

	}
})