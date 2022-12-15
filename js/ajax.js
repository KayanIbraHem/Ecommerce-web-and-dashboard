

$('.leave-comment').submit(function(event){

	event.preventDefault();
	
	let name =$('input[name="name"]').val();
	let phone =$('input[name="phone"]').val();
	let email =$('input[name="email"]').val();
	let message =$('textarea').val();	

	$.post('functions/messages/sendMessages.php',
	{
		Name:name,
		Phone:phone,
		Email:email,
		Message:message
	},function(data){
		$('.res').html(data);
	})

});