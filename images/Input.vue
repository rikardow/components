<template>
	<div class="input-group mb-3">
		<span class="input-group-text" v-if="icon">
			<i :class="icon"></i>
		</span>
		<input type="text" class="form-control browser-default" :placeholder="label">
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
