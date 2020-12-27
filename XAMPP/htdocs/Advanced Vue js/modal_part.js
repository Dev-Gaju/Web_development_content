Vue.component('btn',{
	template:`
    
     <a class="button is-dark" v-on:click="launch">Launch Modal</a>

	`,
	methods:{
		launch(){
			this.$emit('button_clicked');
		}
	}



});

Vue.component('modal',{
	template:`

	<div class="modal" :class='active'>
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">
        <slot></slot>
      </p>
      <button class="delete" v-on:click="close"></button>
    </header>
    <section class="modal-card-body">
      <slot name='section'></slot>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-success">Save changes</button>
      <button class="button">Cancel</button>
    </footer>

  </div>
</div>
      

	`,
	props:[
      'active'
	],

	methods:{
	  close(){
	  	this.$emit('close_modal');
	  }
	}



});




new Vue({
	el:'#app',
	data:{
		activateModal:'',

	},

	methods:{
		launchModal(){
			this.activateModal='is-active'
		},
		closeModalInfo(){
			this.activateModal='';
		}
	}
})