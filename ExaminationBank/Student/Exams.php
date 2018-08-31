<!DOCTYPE html>
<html>
<head>
	<title>asdasd</title>

	<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js" type="text/javascript"></script>
<script src="https://raw.githubusercontent.com/walmik/timer.jquery/master/dist/timer.jquery.min.js"></script>


<?php 

$('#timerDiv').timer({
    countdown: true,
    duration: '3m40s',      // This will start the countdown from 3 mins 40 seconds
    callback: function() {  // This will execute after the duration has elapsed
        console.log('Time up!');
    }
});
 ?>
</head>
<body>

</body>
</html>