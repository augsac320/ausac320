/**
	scheduleSetup.js
	This is where the logic will be implemented for setting up the schedule.	
*/

$(document).ready(function(){
	$('.testButton').click(function(){
		$.ajax({			
			url: 'scheduleAlgor.php',
			type: "POST",
			data: {action: 'test'},
			success: function(output){
						alert(output);
					}
		});
	});
});

//if($_SERVER['REQUEST_METHOD'] == "POST"){
//	echo "You are successful";
//}
//__halt_compiler();