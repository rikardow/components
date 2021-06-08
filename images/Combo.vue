<template>
	<div class="input-group mb-3">
		<span class="input-group-text" v-if="icon">
			<i :class="icon"></i>
		</span>
		<select class="form-select browser-default" :aria-label="label">
			<option selected>Open this select menu</option>
			<option value="1">One</option>
			<option value="2">Two</option>
			<option value="3">Three</option>
		</select>
	</div>
</template>

<script>
	module.exports = {
		props: {
			label: String,
			icon: String,
		},
		data: function () {
			return {
				label: this.label
			}
		}
	}
</script>

<style scoped>
</style>
