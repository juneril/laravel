function Create(){
	var obj=new Object();
	obj.email= $('#emails').val();
	obj.firstname=$('#firstname').val();
	obj.lastname=$('#lastname').val();
	obj.password=$('#password').val();

	$.ajax({
		url: '/jun',
		type: 'POST',
		datatype: 'json',
		data: {
			user : obj
		},
		success: function(response){

			console.log(response);

		},
		error: function(err){
			console.log(err);
		}
	});
}

function Login(){
	var obj=new Object();
	obj.username= $('#login-username').val();
	obj.password=$('#login-password').val();

	$.ajax({
		url: '/login',
		type: 'POST',
		datatype: 'json',
		data: {
			user : obj
		},
		success: function(response){

			console.log(response);

		},
		error: function(err){
			console.log(err);
		}
	});
}
