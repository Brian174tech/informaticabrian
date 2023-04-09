document.addEventListener('click', function(event) {
	if( event.target.matches('input[type=submit], input[type=submit] *') ) 
	{
		event.preventDefault();
	
		//Alles is verplicht, niet alles is ingevuld
		var inputs = document.querySelectorAll("input");
		
		var hasError = false;
		for(var i = 0; i < inputs.length; i++)
		{
			if(inputs[i].value == '')
			{
				hasError = true;
			}
		}
		
		if(hasError)
		{
			alert('Je moet alles invullen!');
		}
		
		//Email check
		var emailInput = document.querySelector('#email2').value;
		if(emailInput.indexOf('@') == -1)
		{
			alert('Emailadres incorrect');
			hasError = true;
		}
		var emailInput1 = document.querySelector('#email1').value;
		if(emailInput1 != emailInput)
		{
			alert('Emailadres is not the same');
			hasError = true;
		}
		if(!hasError)
			document.querySelector('form').submit();
	}			
});

function help(){
	var popup = document.getElementById("myPopup");
  	popup.classList.toggle("show");

}