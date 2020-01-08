<template>
	<div class="listing" v-if="games.length !== 0">
		<evx-game-listing-item v-for="game in games"
			v-bind:key="game.id"
			v-bind:properties="game"
		></evx-game-listing-item>
	</div>
</template>

<script>
	import GameListingItem from './listing/item';

	export default {
		components: {
			'evx-game-listing-item': GameListingItem
		},

		data: function() {
			return {};
		},

		props: ['games'],
	}
</script>