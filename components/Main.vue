<template>
  <div class="row">
    <div class="col s12">
      <div id="app">
        <!-- tabs -->
        <ap-tabs :data="tabs"></ap-tabs>

        <!-- title -->
        <ap-title :data="title"></ap-title>

        <!-- text -->
        <ap-text class="mb-3" :data="text"></ap-text>

        <!-- avatar -->
        <div class="mb-3">
          <ap-avatar :data="avatar"></ap-avatar>
        </div>

        <!-- stars -->
        <div class="mb-3">
          <ap-stars :data="stars"></ap-stars>
        </div>

        <!-- list of icons -->
        <ap-list :data="list"></ap-list>

        <!-- list of people -->
        <ap-people :data="people"></ap-people>

        <!-- chips -->
        <div class="mb-3">
          <ap-chip v-for="dt in chips" :data="dt" class="me-2"></ap-chip>
        </div>

        <!-- card -->
        <ap-card :data="card"></ap-card>

        <!-- chat -->
        <ap-chat :data="chat"></ap-chat>

        <!-- inputs -->
        <ap-input v-for="dt in inputs" :data="dt"></ap-input>

        <!-- switch -->
        <ap-switch :data="switchStatus"></ap-switch>

        <!-- combo -->
        <ap-combo v-show="switchStatus.active" :data="combo"></ap-combo>

        <!-- paginator -->
        <ap-paginator :data="paginator"></ap-paginator>

        <!-- floating action button -->
        <ap-fab :data="fab"></ap-fab>
      </div>
    </div>
  </div>
</template>

<script>
module.exports = {
  name: "Main"
}
</script>

<style scoped>

</style>