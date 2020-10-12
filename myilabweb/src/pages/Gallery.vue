<template>
  <q-page class="flex flex-center" >
    <carousel-3d :controls-visible="true" :autoplay="true" :autoplay-timeout="3000" :width="400" :display="5">
      <slide v-for="img in images" :key="img.index" :index="img.index">
        <q-img :src="img.src" />
      </slide>
    </carousel-3d>
  </q-page>
</template>

<script>

export default {
  name: 'About',
  data () {
    return {
      images: [
        {
          index: 0,
          src: 'statics/images/1.JPG'
        },
        {
          index: 1,
          src: 'statics/images/2.JPG'
        },
        {
          index: 2,
          src: 'statics/images/3.JPG'
        },
        {
          index: 3,
          src: 'statics/images/4.JPG'
        },
        {
          index: 4,
          src: 'statics/images/5.JPG'
        },
        {
          index: 5,
          src: 'statics/images/6.JPG'
        },
        {
          index: 6,
          src: 'statics/images/7.JPG'
        },
        {
          index: 7,
          src: 'statics/images/8.JPG'
        },
        {
          index: 8,
          src: 'statics/images/9.JPG'
        },
        {
          index: 9,
          src: 'statics/images/10.JPG'
        },
        {
          index: 10,
          src: 'statics/images/11.JPG'
        },
        {
          index: 11,
          src: 'statics/images/12.JPG'
        },
        {
          index: 12,
          src: 'statics/images/13.png'
        },
        {
          index: 13,
          src: 'statics/images/iLab.png'
        }
      ]
    }
  }
}
</script>
<style lang="sass" scoped>
.example-item
  height: 390px
  width: 390px
</style>
