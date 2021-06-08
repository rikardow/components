<template>
	<div class="card">
		<img :src="image" class="card-img-top" :alt="title">
		<div class="card-body">
			<h5 class="card-title" @click="launchPopup">{{ title }}</h5>
			<p class="card-text">{{ desc }}</p>

			<chip icon="fas fa-calendar" text="6/25/2021 10:30 PM"></chip>
			<chip icon="fas fa-ankh" text="Hola mundo"></chip>
			<chip text="Sin icono"></chip>
		</div>
		<div class="card-footer text-muted">
			2 days ago
		</div>
	</div>
</template>

<script>
	module.exports = {
		props: {
			title: String,
			likes: Number,
			desc: String,
			image: String
		},
		data: function() {
			return {
				title: this.title,
				desc: this.desc,
				image: this.image,
			}
		},
		methods: {
			launchPopup: function() {
				this.title = 'Ahora es un popup';
			}
		},
		components: {
			chip: httpVueLoader('data:text/plain,' + encodeURIComponent(chipComponent)),
		}
	}
</script>

<style scoped>
	.text-muted {
		color: red !important;
	}
</style>
