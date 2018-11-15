<template>
	<div class="floor">
		<div>
			<a :href="href">Выбор этажа</a>
			<span class="arrow">
				>
			</span>
			<span>
				Этаж {{floor}}
			</span>
		</div>
		<img v-show="!apartament" :src="link">
		<svg
		   v-show="apartament"
		   width="232mm"
		   height="80mm"
		   viewBox="0 0 232 80">

		  <g
		     inkscape:label="Layer 1"
		     inkscape:groupmode="layer"
		     id="layer1"
		     transform="translate(0,-217)" >

		    <image
		       y="216.40404"
		       x="-0.10856482"
		       id="image160"
		       xlink:href="img/floor.svg"
		       preserveAspectRatio="none"
		       height="80.697914"
		       width="232.83333" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 75.837728,230.08241 h 10.289877 l -0.06682,22.71791 -10.022611,0.0668 z"
		       id="path973-3"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 86.060788,230.0824 h 9.888973 l -0.06422,22.71791 -9.63212,0.0668 z"
		       id="path973-6"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 222.16779,220.05979 h 10.28988 l -0.0668,22.71791 -10.02261,0.0668 z"
		       id="path973-7"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 211.8111,219.99298 h 10.28987 l -0.0668,22.71791 -10.02261,0.0668 z"
		       id="path973-5"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 201.52122,219.92616 h 10.28988 l -0.0668,22.71791 -10.02261,0.0668 z"
		       id="path973-35"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 191.4318,219.99298 h 10.28988 l -0.0668,22.71791 -10.02262,0.0668 z"
		       id="path973-62"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 165.03893,216.74929 10.28988,0.19541 -0.0668,26.09917 -10.02261,-0.11363 z"
		       id="path973-9"
		       inkscape:connector-curvature="0"
		       inkscape:transform-center-x="-2.9399648"
		       inkscape:transform-center-y="0.55418224" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 175.39563,219.85933 h 16.03617 l -0.1041,23.05102 -15.61965,0.0678 z"
		       id="path973-1"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 144.59281,216.6521 h 20.44612 l -0.13273,26.11561 -19.91505,0.0768 z"
		       id="path973-2"
		       inkscape:connector-curvature="0"
		       inkscape:transform-center-x="-10.886891"
		       inkscape:transform-center-y="-6.2984639" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 95.882944,230.14922 h 10.289876 l -0.0668,29.91303 -10.02261,0.088 z"
		       id="path973-70"
		       inkscape:connector-curvature="0"
		       inkscape:transform-center-x="-1.8708867"
		       inkscape:transform-center-y="-7.0383392" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 106.30646,230.14922 h 10.28988 l -0.0668,29.84641 -10.02261,0.0878 z"
		       id="path973-93"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 116.93042,230.01558 h 10.55715 l -0.0685,29.91303 -10.28293,0.088 z"
		       id="path973-60"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 127.6212,230.0824 h 10.28988 l -0.0668,29.91303 -10.02261,0.088 z"
		       id="path973-626"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="M 1.2027131,265.16153 H 17.907059 l -0.108474,22.71791 -16.2704725,0.0668 z"
		       id="path973-18"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 17.907059,265.09471 h 10.289876 l -0.06682,22.71791 -10.02261,0.0668 z"
		       id="path973-79"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="M 27.996484,265.09471 H 38.28636 l -0.06682,22.71791 -10.02261,0.0668 z"
		       id="path973-20"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 38.353177,264.89426 h 10.289877 l -0.06682,22.71791 -10.022611,0.0668 z"
		       id="path973-23"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 48.24215,264.96107 h 10.289877 l -0.06682,22.71791 -10.022611,0.0668 z"
		       id="path973-75"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 58.398392,257.87844 h 10.289877 l -0.06682,29.77979 -10.022611,0.0876 z"
		       id="path973-92"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 68.770713,261.91578 13.364347,0.0775 0.148736,28.31314 -13.150162,-2.06334 z"
		       id="path973-28"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 82.319015,264.49335 h 13.76438 l -0.08938,28.31412 -13.473685,-2.38904 z"
		       id="path973-97"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 96.283847,269.70511 h 20.045223 l -0.13012,26.72029 -19.709994,-3.60674 z"
		       id="path973-36"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 116.39588,265.56243 h 11.22531 l -0.0729,29.57659 -10.93376,1.2262 z"
		       id="path973-12"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 127.75483,270.77419 h 16.9048 l -0.0429,22.64658 -16.53254,1.67492 z"
		       id="path973-931"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 144.59282,269.77192 h 10.0226 l 0.002,22.51491 -9.82911,1.13838 z"
		       id="path973-94"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 154.68224,268.97011 h 10.28988 l 0.0668,22.38206 -10.15624,1.00404 z"
		       id="path973-78"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 164.9053,267.96786 h 10.28987 l 0.0668,22.38206 -10.15624,1.00404 z"
		       id="path973-4"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 175.12836,266.56469 h 13.89802 l 0.0434,22.31406 -13.67067,1.47287 z"
		       id="path973-50"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 214.81789,261.41975 h 18.17432 l 0.21611,23.17858 -18.03637,2.0116 z"
		       id="path973-361"
		       inkscape:connector-curvature="0"
		       sodipodi:nodetypes="ccccc" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 198.04672,261.6536 0.0668,17.03843 h 1.73725 l 0.13363,8.88672 14.9671,-1.20272 -0.26728,-24.72243 z"
		       id="path1158"
		       inkscape:connector-curvature="0" />
		  </g>
		  <g
		     inkscape:groupmode="layer"
		     id="layer3"
		     inkscape:label="Layer 2"
		     transform="translate(0,-1)" >

		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="M 1.0022607,8.503138 22.985179,8.636773 23.051996,29.550614 1.1358955,29.416978 Z"
		       id="path164"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="M 23.252449,8.5699557 44.433558,8.4363207 V 29.283345 l -21.181109,0.133633 z"
		       id="path971"
		       inkscape:connector-curvature="0" />
		    <path
		       style="opacity:0.4;fill:#cccccc;stroke:#000000;stroke-width:0;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
		       d="m 65.614668,14.182616 h 10.289876 l -0.06682,22.717908 -10.02261,0.06682 z"
		       id="path973"
		       inkscape:connector-curvature="0" />
		  </g>
		</svg>
	</div>
</template>

<style lang="scss" scoped>
	.floor {
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: flex-start;

		&>div {
			width: 500px;
			padding: 30px;
			margin-bottom: 25px;
			display: flex;
			align-items: center;
			justify-content: flex-start;
			background: #B8D9EC;
			border-top-right-radius: 35px;
			border-bottom-right-radius: 35px;

			span.arrow {
				padding: 0 20px;
			}
		}
		&>img, &>svg {
			width: 100%;
			height: auto;
			min-width: 1000px;

			&>g > path {
				cursor: pointer;
			}
			&>g > path:hover {
				opacity: 0.8 !important;
				fill: green !important;
			}
			// &>g:last-child > path:nth-child(-n+6) {
			// 	fill: green !important;
			// }
		}
	}
</style>

<script type="text/javascript">
	export default ({
		props: [ 'floor' ],
		data: function () {
			return {
				href: window.location.href.split('?')[0],
				link: '',
				apartament: false,
				paths: '',
				type: '',
				T1: [0,1,2,3,4,5,6,14,15,16,17,24,25,26,32],
				T2: [9,10,11,12,18,22],
				T3: [19,20,27],
				T4: [21,23,31],
				T5: [28,30],
				T6: 13,
				T7: 29,
				T8: 7,
				T9: 8
			}	
		},
		methods: {
			
		},
		computed: {
			
		},
		mounted: function () {
			if ( this.floor == 1 ) {
				this.link = 'img/first_mall.png';
			} else if ( ['2','3','4'].indexOf( this.floor ) != -1 ) {
				this.link = 'img/mall.png';
			} else if ( this.floor == 5 ) {
				this.link = 'img/office-5.png';
			} else if ( this.floor == 6 ) {
				this.link = 'img/office-6.png';
			} else if ( this.floor > 6 ) {
				this.apartament = true;
			}

			this.paths = document.querySelectorAll( ".floor path" );
			console.log( this.paths );
			for ( let i = 0; i < this.paths.length; i++ ) {
				
				this.paths[ i ].addEventListener( 'click', function () {

					if ( this.T1.indexOf( i ) != -1 ) {
						this.type = 1;
					} else if ( this.T2.indexOf( i ) != -1 ) {
						this.type = 2;
					} else if ( this.T3.indexOf( i ) != -1 ) {
						this.type = 3;
					} else if ( this.T4.indexOf( i ) != -1 ) {
						this.type = 4;
					} else if ( this.T5.indexOf( i ) != -1 ) {
						this.type = 5;
					} else if ( this.T6 == i ) {
						this.type = 6;
					} else if ( this.T7 == i ) {
						this.type = 7;
					} else if ( this.T8 == i ) {
						this.type = 8;
					} else if ( this.T9 == i ) {
						this.type = 9;
					}
					window.location.href = location.href + '&type=' + this.type;
				}.bind(this) );
			}
		}
	});
</script>