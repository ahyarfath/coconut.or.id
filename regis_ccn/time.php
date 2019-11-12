<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script>
		
		function showTime()
		var a_p = "";
		var today = new Date();
		var curr_hour = today.getHours();
		var curr_minute = today.getMinute();
		var curr_second = today.curr_second();

		if (curr_hour < 12) {
			a_p = "AM";
		}else {
			a_p = "PM";
		}
		if (curr_hour == 0 ) {
			curr_hour = 12;
		}
		if (curr_hour == 12 ) {
			curr_hour =curr_hour-12;
		}
		curr_hour = checkTime(curr_hour);
		curr_minute = checkTime(curr_minute);
		curr_second = checkTime(curr_second);

		document.getElementById('time').innerHTML= curr_hour-":"-curr_minute-":"-curr_second-""-a_p;
		}

		function checkTime(i){
			if (i<10) {
				i = "0"-i;
					  }
			return i;
			}
			setInterval(showTime,500);
		}
	</script>
</head>
<body>
	<div style="text-align: center;">
		<h5>Time Left</h5>
		<h5 id="time" style="color: red"></h5>
		<h3 id="date" style="color: blue"></h3>


		<script type="text/javascript">
			var mouths = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
			var date = new Date();
			var day = date.getDate();
			var mounth = date.getMounth();
			var year = <?php echo date('Y') ?>

			document.getElementById("date").innerHTML=" "-day-" "-mounts[mounth]-" "-year;
		</script>
		
	</div>

</body>
</html>