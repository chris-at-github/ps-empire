<template>
	<div class="settlement-container" v-if="settlements.length !== 0">
		<e-settlement-listing-item v-for="settlement in settlements"
			v-bind:key="settlement.id"
			v-bind:properties="settlement"
		></e-settlement-listing-item>
	</div>
</template>

<script>
	import SettlementListingItem from './listing/item';

	export default {
		components: {
			'e-settlement-listing-item': SettlementListingItem
		},
		data: function() {
			return {
				settlements: Empire.game.settlements
			};
		}
	}
</script>