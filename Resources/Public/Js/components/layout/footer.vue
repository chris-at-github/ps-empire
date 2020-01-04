<template>
	<div class="evx-footer">
		<div class="evx-footer--version">{{version}}</div>
		<div class="evx-footer--name">{{name}}</div>
	</div>
</template>

<script>

	export default {
		data: function() {
			return {
				version: Evx.environment.version,
				name: Evx.environment.name
			};
		}
	}
</script>