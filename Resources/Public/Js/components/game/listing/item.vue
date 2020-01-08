<template>
	<div class="listing--item">
		<header class="listing--item-header">{{game.title}}</header>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {};
		},

		props: ['properties'],

		computed: {
			game: function() {
				return this.properties;
			}
		}
	}
</script>