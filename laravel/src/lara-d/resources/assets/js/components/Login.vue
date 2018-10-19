<template>
    <div class="uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
    	<div class="uk-width-1-1">
    		<div class="uk-container">
    			<div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
    				<div class="uk-width-1-1@m">
    					<div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
    						<h3 class="uk-card-title uk-text-center">Welcome back!</h3>
                            <h4>{{ error }}</h4>
    							<div class="uk-margin test">
    								<div class="uk-inline uk-width-1-1">
    									<span class="uk-form-icon" uk-icon="icon: mail"></span>
    									<input class="uk-input uk-form-large" type="text" v-model="userId">
    								</div>
    							</div>
    							<div class="uk-margin">
    								<div class="uk-inline uk-width-1-1">
    									<span class="uk-form-icon" uk-icon="icon: lock"></span>
    									<input class="uk-input uk-form-large" type="password" v-model="pass">	
    								</div>
    							</div>
    							<div class="uk-margin">
    								<button class="uk-button uk-button-primary uk-button-large uk-width-1-1" @click="login()">Login</button>
    							</div>
    							<div class="uk-text-small uk-text-center">
    								Not registered? <a href="#">Create an account</a>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</template>
<script>
module.exports = {
    data: function() {
        return {
            userId: "",
            pass: "",
            error: "NO!", 
        }
    },
    methods: {
        login: function(){
            console.log('req');
            axios.post('/api/login', {
                userId: this.userId,
                password: this.pass
            }).then((res)=>{
                if (res){
                    this.error = "NO!";
                }else{
                    this.error = "YES!";
                }
                console.log('res');
            })
        },
    }
}
</script>
