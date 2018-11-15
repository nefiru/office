<template>
	<div class="type">
		<div>
			<a :href="href">Выбор этажа</a>
			<span class="arrow">
				>
			</span>
			<a :href="href2">
				Этаж {{floor}}
			</a>
			<span class="arrow">
				>
			</span>
			<span>
				Планировка {{type}}
			</span>
		</div>
		<img :src="'img/type-' + type + '.png'">
	</div>
</template>

<style lang="scss" scoped>
	.type {
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;

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
			margin-left: 0;
			margin-right: auto;

			span.arrow {
				padding: 0 20px;
			}
		}
		img {
			height: 100vh;
			width: auto;
		}
		
	}
</style>

<script type="text/javascript">
	export default ({
		props: [ 'type', 'floor' ],
		data: function () {
			return {
				href: window.location.href.split('?')[0],
				href2: window.location.href.split('&')[0]
			}	
		},
		methods: {
			
		},
		computed: {
			
		},
		mounted: function () {

		}
	});
</script>