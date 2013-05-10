<?php $this->load->helper('url'); ?>
<html>
	<head>
		<title>home</title>
	</head>
	<body>
		<form method='post' action='/article/create'>
			<input type='text' name='title'/>
			<textarea name='content' cols='60' rows='10'></textarea>
			<input type='submit' value='Submit'/>
		</form>
	</body>
</html>
