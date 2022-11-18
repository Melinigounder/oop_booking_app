new Vue({
    el: '#app-login',
	data() {
			return {
				input: {
					username: "",
					password: ""
				}
			}
		},
  methods: {
    login: function () {
     
	       
			var storedName = localStorage.getItem('name');
			var storedPw = localStorage.getItem('pw');

			if(this.input.username == storedName && this.input.password == storedPw){
				alert('You are logged in.');
				location.href  = "pages/landingPage.php";
			}else{
				alert('User does not exist. Please sign up.');
			}
    }
  }
})