<template>
  <q-page class="flex flex-center">
    <div style="max-width: 1024px">
      <q-banner rounded class="full-width">
        <template v-slot:avatar>
          <img
            src="statics/images/iLab.png"
            style="width: 200px; height: 90px"
          >
        </template>

        <span><b>Vision: </b></span>The iLab exists to bridge the chasm from ideas to marketplace using 21st century systems and networks, releasing the economic potential of the ideas that arise within the minds of students, faculty, and staff on the Knoxville campus of the University of Tennessee.
        <template v-slot:action>
        </template>
      </q-banner>
    </div>

    <q-img alt="ilab logo" style="max-width: 1024px" src="statics/images/1.JPG" />

  </q-page>
</template>

<script>
export default {
  name: 'PageIndex',
  data () {
    return {
      slide: 'style',
      lorem: 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque voluptatem totam, architecto cupiditate officia rerum, error dignissimos praesentium libero ab nemo.'
    }
  }
}
</script>
<style lang="scss" scoped>
img {
  -webkit-transition: -webkit-transform .8s ease-in-out;
  transition: transform .8s ease-in-out
}

img:hover {
  -webkit-transform: rotateY(360deg);
  transform: rotateY(360deg)
}
</style>
