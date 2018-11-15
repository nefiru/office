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
	<script type="text/javascript" src="./complied/js/app.js"></script>
	
</body>
</html>