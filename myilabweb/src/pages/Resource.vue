<template>
  <q-page class="flex flex-center">
    <div v-for="res in resources" class="q-pa-md" :key="res.index" style="max-width: 1024px">
      <q-card class="my-card">
        <q-card-section>
          <div class="text-h6">{{res.title}}</div>
        </q-card-section>

        <q-img
          :src="res.src"
          height="350"
        />

        <q-card-section>
          <div class="text-h6">{{res.description}}</div>
        </q-card-section>

        <q-card-section class="q-pt-none text-center">
          <span v-html="res.memo"></span>
        </q-card-section>
      </q-card>
    </div>

  </q-page>
</template>

<script>
export default {
  name: 'Resources',
  data () {
    return {
      resources: [
        {
          index: 0,
          title: 'uPrint 3D-Printer',
          src: 'statics/images/3dprint.JPG',
          description: 'It’s a functional 3D model you can hold in your hands, show to your team and test in the field. uPrint and uPrint Plus Printers make 3D printing so affordable, trouble-free and personal. Through every design iteration, uPrint Printers bring your ideas into the real world as durable 3D models ready for collaboration and testing.',
          memo: '<iframe width="560" height="349" src="http://www.youtube.com/embed/-QUpr4QJd0Y" frameborder="0" allowfullscreen></iframe>'
        },
        {
          index: 1,
          title: 'PRUSA 3D-Printer',
          src: 'statics/images/prusa.png',
          description: 'The Original Prusa I3 MK3S is the successor to the award-winning Original Prusa i3 MK2/S 3D printer. With the rebuilt extruder, a plethora of sensors and the new magnetic MK52 heatbed with replaceable PEI spring steel print sheet',
          memo: '<iframe width="560" height="315" src="https://www.youtube.com/embed/mlqQNA70e-E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
        },
        {
          index: 2,
          title: 'Rack PowerEdge & GPU Servers',
          src: 'statics/images/servers.jpg',
          description: '@JDT302 Server Room. High performance servers (MySQL database, Apache Web Server, Jupyter Notebook, ...). ',
          memo: ''
        }
      ]
    }
  }
}
</script>
<style lang="sass" scoped>
.my-card
  width: 100%
  max-width: 750px
</style>
