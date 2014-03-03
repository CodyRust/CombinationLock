<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Combination Lock</title>

		<link rel="stylesheet" type="text/css" href="styles.css" />

		<script type="text/javascript" src="jquery.js"></script>

		<script type="text/javascript">
			var lockedValue = 'Locked';
			var unlockedValue = 'Unlocked!';
		</script>

		<script type="text/javascript" src="unlock.js"></script>

	</head>

	<body onload="clearInput()">

		<div id="combinationLock">
			<div class="combinationKey" onclick="pressKey(this, '1')">1</div>
			<div class="combinationKey" onclick="pressKey(this, '2')">2</div>
			<div class="combinationKey" onclick="pressKey(this, '3')">3</div>
			<div class="combinationKey" onclick="pressKey(this, '4')">4</div>
			<div class="combinationKey" onclick="pressKey(this, '5')">5</div>
			<div class="combinationKey" onclick="pressKey(this, '6')">6</div>
			<div class="combinationKey" onclick="pressKey(this, '7')">7</div>
			<div class="combinationKey" onclick="pressKey(this, '8')">8</div>
			<div class="combinationKey" onclick="pressKey(this, '9')">9</div>
			<div class="combinationKey" onclick="pressKey(this, '0')">0</div>
			<div class="combinationKey resetKey" onclick="resetKeys()">RESET</div>
		</div>

		<p>The combination is today's date in MMYY format.<p>

		<form>
			<input type="hidden" id="newKey" value="<?php echo date('my'); ?>" />
			<input type="hidden" id="enteredKey" value="" />
			<input type="submit" id="submitButton" value="" disabled />
		</form>

	</body>
	
</html>