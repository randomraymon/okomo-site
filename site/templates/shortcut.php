<?php	
	$first = $input->urlSegment1;
	$second = $input->urlSegment2;
	$third = $input->urlSegment3;
?>

<script type="text/javascript">
	var first = '<?php echo $first; ?>'
	var second = '<?php echo $second; ?>'
	var third = '<?php echo $third; ?>'
	console.log(first)
	console.log(second)
	console.log(third)
	if (first == 'call' && (third == 'video' || third == 'voice')) {
		startCall(second, third)		
	} else if (first && second) {
		openExpert(first, second)
	}
	
	function openExpert(company, expert) {
	console.log('open expert')
		var win = window.open('https://okomo-user.azurewebsites.net/' + company + '/' + expert, 'windowOpenTab', 'menubar=0,resizable=0,width=375,height=667,left=100,top=100')

		if (win) {
			location.href = 'https://okomo.com'
			win.focus()
		}
	}
	
	function startCall(id, channel) {
	console.log('start call')
		var win = window.open('https://okomo-user.azurewebsites.net/call/' + id + '/' + channel + '?id=4377b665-45d7-4682-b8fd-20c54b392d6c', 'windowOpenTab', 'menubar=0,resizable=0,width=375,height=667,left=100,top=100')

		if (win) {
			location.href = 'https://okomo.com'
			win.focus()
		}
	}
</script>