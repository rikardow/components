<template>
	<h1>{{ text }}</h1>
</template>

<script>
	module.exports = {
		props: {
			text: String
		},
		data: function () {
			return {
				text: this.text
			}
		}
	}
</script>

<style scoped>
	h1 {
		color: black;
	}
</style>
