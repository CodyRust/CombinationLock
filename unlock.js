// Reset all values to default on page load to ensure clean canvas
function clearInput() {
	document.getElementById('enteredKey').value = '';
	document.getElementById('submitButton').value = lockedValue;
	document.getElementById('submitButton').disabled = true;
}

// Update button pressed state and validate code entry
function pressKey(pressedKey, number) {
	var newKey = document.getElementById('newKey');
	var enteredKey = document.getElementById('enteredKey');
	var submit = document.getElementById('submitButton');

	$(pressedKey).addClass('pressed');
	enteredKey.value = enteredKey.value + number;

	if (newKey.value == enteredKey.value) {
		submit.disabled = false;
		submit.value = unlockedValue;
	}

}

// Manual reset in case of input-error
function resetKeys() {
	document.getElementById('enteredKey').value = '';
	document.getElementById('submitButton').value = lockedValue;
	document.getElementById('submitButton').disabled = true;
	$('#combinationLock').find('*').removeClass('pressed');
}