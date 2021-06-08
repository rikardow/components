<template>
	<span class="badge bg-primary">
		<i :class="icon" v-if="icon"></i>
		{{ text }}
	</span>
</template>

<script>
	module.exports = {
		props: {
			text: String,
			icon: String,
			color: String,
			size: String
		},
		data: function () {
			return {
				text: this.text
			}
		}
	}
</script>

<style scoped>
	span.badge {
		min-width: unset;
		padding: unset;
		margin-left: unset;
		text-align: unset;
		font-size: unset;
		line-height: unset;
		height: unset;
		color: unset;
		float: none;
		box-sizing: unset;
		display: inline-block;
		padding: .35em .65em;
		font-size: .75em;
		font-weight: 700;
		line-height: 1;
		color: #fff;
		text-align: center;
		white-space: nowrap;
		vertical-align: baseline;
		border-radius: .25rem;
	}
</style>
