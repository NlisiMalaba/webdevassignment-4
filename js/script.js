const form = document.getElementById('contact');
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const enquiry = document.getElementById('enquiry');

form.addEventListener('submit', e => {
	e.preventDefault();
	checkInputs();
});


function checkInputs() {

	if (name.value === '' || email.value ==='' || number.value ==='' || enquiry.value ===''){
		alert("Fields can not be empty");
		(name.value === '') ? name.classList.add("highlight") : '' ;
		(number.value === '') ? number.classList.add("highlight") : '' ;
		(email.value === '') ? email.classList.add("highlight") : '' ;
		(enquiry.value === '') ? enquiry.classList.add("highlight") : '' ;
	} else if (!(isEmail(email.value))){
		alert("insert a valid email");
	} else if (!(isNumber(number.value))){
		alert("insert a valid phone number");
	}  else 	{
		//alert("Your enquiry has been sent, we will be in touch shortly");
		//name.value = "";
		//number.value = "";
		//email.value = "";
		//enquiry.value = "";
	}

	
}


	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isNumber(number) {
	var patt = new RegExp(/^\+?1?\s*?\(?\d{3}(?:\)|[-|\s])?\s*?\d{3}[-|\s]?\d{4}$/);
	return patt.test(number);
}
  

function clearInput (){
    phone.value="";
    email.value= "";
    enquiry.value = "";
    name.value ="";
}
