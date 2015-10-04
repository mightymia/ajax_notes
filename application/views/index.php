<html>
<head>
	<title>Ajax Notes</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function() {
			$.get('/main/index_html', function(res) {
				$('#note_list').html(res);
			});

		});
	</script>
</head>
<body>
	<div id='container'>
		<h2>Notes</h2>
		<hr>
		<div id='note_list'>
		</div>
		<div id='new_note'>
			<form action='/main/create' method='post'>
				<input type='text' name='title' placeholder='Insert note title here...'>
				<input type='submit' value='Add Note'>
			</form>
		</div>
	</div>
</body>
</html>