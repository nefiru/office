<!DOCTYPE html>
<html>
<head>
	<title>test office</title>
	<link rel="stylesheet" type="text/css" href="complied/css/photo-sphere-viewer.min.css">

	<style type="text/css">
		* {
			font-family: Assistant, Roboto;
		}
		.app {
			width: 100%;
		}
		.app > div {

		}
		.slider {
			max-width: 700px;
			overflow: hidden;
		}
		.app > div:last-child {
			width: 100vw;
			height: 100vh;
			top: 0;
			left: 0;
			position: fixed;
			display: flex;
			opacity: 0;
			z-index: -1000;
		}			
		.app > div:last-child.active {
			opacity: 1;
			z-index: 1000;
		}
		.app > div:last-child > div:first-child {
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.5);
			position: absolute;
			top:0;
			left: 0;
			cursor: pointer;
		}
		.app > div:last-child > div:nth-child(2) {
			width: 70px;
			height: 70px;
			position: absolute;
			top: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			cursor: pointer;
			z-index: 2;
		}
		.app > div:last-child > div:nth-child(2):before, .app > div:last-child > div:nth-child(2):after {
			content: '';
			width: 60px;
			height: 5px;
			background: #fff;
			opacity: 0.8;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%) rotate(45deg);
		}
		.app > div:last-child > div:nth-child(2):after {
			transform: translate(-50%, -50%) rotate(-45deg);
		}
		.app > div:last-child > div:last-child {
			width: 80vw;
			height: 50vh;
			margin: auto;
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
			<type :type="type" :floor="floor" @panclick="viewPano"></type>
		</div>
		<div :class="panorama ? 'active' : ''">
			<div @click="panorama = false"></div>
			<div @click="panorama = false"></div>
			<div id="viewer">
				
			</div>
		</div>
		{{scrollToP}}
	</div>
	<?php

		echo '<script type="text/javascript">
		window.path =\'' . get_bloginfo('template_url') . '/\';
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
			window.richDescAp =`' . carbon_get_post_meta(get_the_ID(),'eng_apartament' . $_GET[ 'type' ] . '-desc','rich-text') . '`;
			</script>';
			// $dir = opendir( get_bloginfo('template_url') . '/img/rooms/room-' . $_GET[ 'type' ] );
			// while($file = readdir($dir)){
			//     if( $file != '.' || $file != '..' ) {
			//         $files[] = $file;
			//     }
			// }
			// echo '<script type="text/javascript">
			// window.imgs =\'' . json_encode($files) . '\';
			// </script>';

			$output = `ls ./wp-content/themes/kievproject/img/rooms/room-{$_GET[ 'type' ]}`;
			$files = array_filter(preg_split( '/\n/', $output ));
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

		// 		for ( $i = 1; $i < 34; $i++ ) {
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
	
	<script type="text/javascript" src="<?=get_bloginfo('template_url')?>/complied/js/app.js"></script>
	
</body>
</html>