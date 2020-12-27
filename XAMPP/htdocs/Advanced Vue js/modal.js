Vue.component('btn',{

	template:`
       
       <a class="button "  v-on:click="launch">Launch Modal</a>  
	`,
	methods:{
		launch:function(){
			this.$emit('button_clicked');
		}
	}
});


Vue.component('modal',{
      
   template:`
<div>
	<div class="modal" :class='active'>
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
			<p class="modal-card-title">
			<slot></slot>
				</p>
				<button class="delete"></button>
			
			</header>
				
			<section class="modal-card-body">
				
				<slot name='section'></slot>
			</section>
			<footer class="modal-card-foot>
              <a class="btn btn-success>Save Change</a>
              <a class="btn>cancel</a>
			 </footer>
		</div>
	</div>
</div>
      `,
      props:[
       'active'
      ]
});


new Vue({

	el:'#app',
	data:{
		activateModal:'',
	},
	methods:{
		launchModal(){
			this.activateModal='is-active';
		}
	}
})