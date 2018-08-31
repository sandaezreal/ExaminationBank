$(function(){
	
	var note = $('#note'),
		ts = new Date(2018, 1, 1),
		newYear = true;//sasdasd
	
	if((new Date()) > ts){

		// ssssssssssssThe new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 0*0*0*00*0;
		newYear = true;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			if(seconds===0)
			{
				alert('');
			}
			
			
		}
	});
	
});
