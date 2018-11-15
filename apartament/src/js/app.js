import Vue from 'vue';
import Office from './office.vue';
import Floor from './floor.vue';
import Type from './type.vue';


var app = new Vue({
	el: '#app',
	data: {
		floor: false,
		type: false
	},
	components: {
		office: Office,
		floor: Floor,
		type: Type
	},
	methods: {

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
			console.log(this.floor + ' ' + this.type);
		}
	},
	computed: {

	},
	mounted: function () {

	},
	beforeMount: function () {
		this.setGetParams();
	}
})


