import Vue from 'vue';
import Office from './office.vue';
import Floor from './floor.vue';
import Type from './type.vue';
import Photo from 'photo-sphere-viewer';

var app = new Vue({
	el: '#app',
	data: {
		floor: false,
		type: false,
		panorama: false,
		path: window.path
	},
	components: {
		office: Office,
		floor: Floor,
		type: Type
	},
	methods: {
		viewPano ( status ) {
			this.panorama = true;
			console.log('kek');
		},
		setGetParams () {
			var params = window
			    .location
			    .search
			    .replace('?','')
			    .split('&')
			    .reduce(
			        function(p,e){
			            var a = e.split('=');
			            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
			            return p;
			        },
			        {}
			    );
			if ( params[ 'floor' ] ) {
				this.floor = params[ 'floor' ];
			}
			if ( params[ 'type' ] ) {
				this.type = params[ 'type' ];
			}
		}
	},
	computed: {
		scrollToP: function () {
			if ( !this.panorama ) {
				document.documentElement.style.overflowX = 'hidden';
        		document.documentElement.style.overflowY = 'auto';
			} else {
				document.documentElement.style.overflow = 'hidden';
			}
		}
	},
	mounted: function () {
		if ( this.type ) {
			window.viewer = new Photo({
				container: 'viewer',
				panorama: this.path + './img/panorama.jpg'
			});
		}
	},
	beforeMount: function () {
		this.setGetParams();
	},
	events: {
		panorama () {
			this.panorama = true;
			console.log('kek');
		}
	}
})

// var params = window
//     .location
//     .search
//     .replace('?','')
//     .split('&')
//     .reduce(
//         function(p,e){
//             var a = e.split('=');
//             p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
//             return p;
//         },
//         {}
//     );
// if ( params[ 'type' ] ) {
// 	window.viewer = new Photo({
// 		container: 'viewer',
// 		panorama: this.path + './img/panorama.jpg'
// 	});
// }

