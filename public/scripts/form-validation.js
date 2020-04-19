validate = (form) => {
	console.log(form)
	var inputs = [...form.getElementsByTagName("input")]
	var isValid = true
	for(var i = 0, len = inputs.length; i < len; i++) {
		input = inputs[i]
		console.log(input)
		if(!input.value) {
			isValid = false
			input.focus()
			alert("Please fill out all inputs!")
			break;
		}
	}
	return isValid
}