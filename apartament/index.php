<!DOCTYPE html>
<html>
<head>
	<title>test office</title>
	<!-- <link rel="stylesheet" type="text/css" href="./complied/css/office.css"> -->
	<style type="text/css">
		.app {
			width: 100%;
		}
		.app > div {

		}
	</style>
</head>
<body>
	<div class="app" id="app">
		<div v-if="!floor && !type">
			<office></office>
		</div>
		<div v-else-if="!type && floor">
			<floor :floor="floor"></floor>
		</div>
		<div v-else>
			<type :type="type" :floor="floor"></type>
		</div>
	</div>
	<?php
		echo '<script type="text/javascript">
		window.path =\'' . bloginfo('template_url') . '/\';
		</script>';
	?>
	<script type="text/javascript">
		window.path = '';
	</script>
	<script type="text/javascript" src="./complied/js/app.js"></script>
	
	
</body>
</html>