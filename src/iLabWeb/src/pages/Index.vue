<template>
  <q-page class="flex flex-center">
    <img alt="Quasar logo" src="statics/iLab.png">
    <q-card
      class="my-card text-orange q-col-11"
    >
      <q-card-section class="q-pt-none">
        <div style="text-align: center">
          <q-btn to="./HITS/tberg/">Tom's Project</q-btn>
        </div>
        <div class="text-grey-7" style="text-align: center">
          More to come ...
          </div>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script>
export default {
  name: 'PageIndex'
}
</script>

<style lang="sass" scoped>
.my-card
  width: 100%
</style>
