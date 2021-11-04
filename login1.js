

$(document).ready(function(){
	
	// // Listen to register button
	// $('#register').on('click', function(){
	// 	register();
	// });
	
	// // Listen to reset password button
	// $('#resetPasswordButton').on('click', function(){
	// 	resetPassword();
	// });
	
	// Listen to login button
	$('#login').on('click', function(){
		login();
	});
});

// Function to login a user
function login(){
	var loginUsername = $('#loginUsername').val();
	var loginPassword = $('#loginPassword').val();
	
	$.ajax({
		url: 'checkLogin1.php',
		method: 'POST',
		data: {
			loginUsername:loginUsername,
			loginPassword:loginPassword,
		},
		success: function(data){
			$('#loginMessage').html(data);
			
			if(data.indexOf('Redirecting') >= 0){
				window.location = 'pageAcueille.html';
			}
		}
	});
}