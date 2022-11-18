new Vue({
    el: '#app-register',
	data() {
			return {
				input: {
					username: "",
					password: "",
					confirmpassword:"",
				}
			}
		},
  methods: {
    register: function () {

		var lowerCaseLetters = /[a-z]/g;
		var upperCaseLetters = /[A-Z]/g;
		var numbers = /[0-9]/g;

		if(this.input.username == 0){
			alert('Please fill in email');

		}else if(this.input.password == 0){
			alert('Please fill in password');

		}else if(this.input.username == 0 && this.input.password == 0 && this.input.confirmpassword == 0 ){
			alert('Please fill in email and password');

		}else if(this.input.password != this.input.confirmpassword ){
			alert('Please ensure password and confirmpassword match.');

		}
		else if(this.input.password.length > 8){
			alert('Max of 8');

		}else if(!this.input.password.match(numbers)){
			alert('please add 1 number');

		}else if(!this.input.password.match(upperCaseLetters)){
			alert('please add 1 uppercase letter');

		}else if(!this.input.password.match(lowerCaseLetters)){
			alert('please add 1 lowercase letter');

		}else{
			localStorage.setItem('name', this.input.username);
			localStorage.setItem('pw', this.input.password);
			alert('Your account has been created');
			location.href  = "index.php";
		}
    }
  }
})