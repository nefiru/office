<!DOCTYPE html>
<html>
<head>
	<title>test office</title>
	<link rel="stylesheet" type="text/css" href="complied/css/photo-sphere-viewer.min.css">

	<style type="text/css">
		.app {
			width: 100%;
		}
		.app > div {

		}

		.slider {
			max-width: 700px;
			overflow: hidden;
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

		if ( !isset( $_GET[ 'floor' ] ) && !isset( $_GET[ 'type' ] )  ) {

			echo '<script type="text/javascript">
			window.descMain =\'' . carbon_get_post_meta(get_the_ID(),'eng_plan_main_description','rich-text') . '\';
			</script>';

		} else if ( isset( $_GET[ 'floor' ] ) && !isset( $_GET[ 'type' ] )  ) {

			if ( $_GET[ 'floor' ] < 8 ) {
				echo '<script type="text/javascript">
				window.descFloor =\'' . carbon_get_post_meta(get_the_ID(),'eng_stage' . $_GET[ 'floor' ] . '_description','rich-text') . '\';
				</script>';
			} else {
				echo '<script type="text/javascript">
				window.descFloor =\'' . carbon_get_post_meta(get_the_ID(),'eng_plan_8-21_stage_description','rich-text') . '\';
				</script>';

				for ( $i = 1; $i < 33; $i++ ) {
					$arrayAp[] = carbon_get_post_meta(get_the_ID(),'eng_apartament' . $i . '-excerpt','text');
				}
				echo '<script type="text/javascript">
				window.descAp =\'' . json_encode($arrayAp) . '\';
				</script>';
			}
			
		} else if ( isset( $_GET[ 'floor' ] ) && isset( $_GET[ 'type' ] )  ) {

			echo '<script type="text/javascript">
			window.richDescAp =\'' . carbon_get_post_meta(get_the_ID(),'eng_apartament' . $_GET[ 'type' ] . '-desc','rich-text') . '\';
			</script>';
			$dir = opendir( 'img/rooms/room-' . $_GET[ 'type' ] );
			while($file = readdir($dir)){
			    if( $file != '.' || $file != '..' ) {
			        $files[] = $file;
			    }
			}
			echo '<script type="text/javascript">
			window.imgs =\'' . json_encode($files) . '\';
			</script>';


		}


		// echo '<script type="text/javascript">
		// window.path =\'\';
		// </script>';

		// if ( !isset( $_GET[ 'floor' ] ) && !isset( $_GET[ 'type' ] )  ) {

		// 	echo '<script type="text/javascript">
		// 	window.descMain =\'описание дома\';
		// 	</script>';

		// } else if ( isset( $_GET[ 'floor' ] ) && !isset( $_GET[ 'type' ] )  ) {

		// 	if ( $_GET[ 'floor' ] < 8 ) {
		// 		echo '<script type="text/javascript">
		// 		window.descFloor =\'описание этажей с 1 по  8\';
		// 		</script>';
		// 	} else {
		// 		echo '<script type="text/javascript">
		// 		window.descFloor =\'описание этажей с 8\';
		// 		</script>';

		// 		for ( $i = 1; $i < 33; $i++ ) {
		// 			$arrayAp[] = 'краткое описание квартиры ' . $i;
		// 		}
		// 		echo '<script type="text/javascript">
		// 		window.descAp =\'' . json_encode($arrayAp) . '\';
		// 		</script>';
		// 	}
			
		// } else if ( isset( $_GET[ 'floor' ] ) && isset( $_GET[ 'type' ] )  ) {

		// 	echo '<script type="text/javascript">
		// 	window.richDescAp =\'развернутое описание квартиры\';
		// 	</script>';

		// 	$dir = opendir( 'img/rooms/room-' . $_GET[ 'type' ] );
		// 	while($file = readdir($dir)){
		// 	    if( $file != '.' || $file != '..' ) {
		// 	        $files[] = $file;
		// 	    }
		// 	}
		// 	echo '<script type="text/javascript">
		// 	window.imgs =\'' . json_encode($files) . '\';
		// 	</script>';

		// }

		
	?>
	<script type="text/javascript" src="./complied/js/app.js"></script>
	
</body>
</html>