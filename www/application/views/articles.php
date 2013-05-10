<?php $this->load->helper('url'); ?>
<html>
	<head>
		<title>home</title>
	</head>
	<body>
		<ul>
			<?php foreach ($entries as $entry):?>
			<li><?php echo $entry->title_c . ': ' . $entry->content_c; ?></li>
			<?php endforeach;?>
		<ul>
		<?php echo anchor('article/creating', 'create entry'); ?>
	</body>
</html>
