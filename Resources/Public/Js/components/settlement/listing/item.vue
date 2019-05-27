<template>
	<div class="settlement">
		<header class="settlement--header">{{settlement.name}}</header>
	</div>
</template>

<script>
	export default {
		data: function() {
			return {};
		},

		props: ['properties'],

		computed: {
			settlement: function() {
				return this.properties;
			}
		}
	}
</script>