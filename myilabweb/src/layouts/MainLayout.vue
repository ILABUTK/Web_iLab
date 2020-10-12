<template>
  <q-layout view="lHh Lpr lFf">
    <q-header elevated grossy>
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          icon="menu"
          aria-label="Menu"
        /> <!-- @click="leftDrawerOpen = !leftDrawerOpen" -->

        <q-toolbar-title>
          Welcome to the iLab!
        </q-toolbar-title>

        <div></div>
      </q-toolbar>

        <q-tabs  v-model="tab" class="bg-secondary"> <!-- v-if="!leftDrawerOpen" -->
          <q-route-tab v-for="t in ilabTabs" :name="t.name" :label="t.label" :to="t.url" :key="t.name" />
      </q-tabs>
    </q-header>

    <!-- <q-drawer
      v-model="leftDrawerOpen"
      show-if-above
      bordered
      content-class="bg-grey-9"
      class="text-white"
    >
      <q-list>
        <q-item-label header class="text-white">iLab Links</q-item-label>
        <EssentialLink
          v-for="link in essentialLinks"
          :key="link.title"
          v-bind="link"
        />
      </q-list>
    </q-drawer> -->

    <q-page-container>
      <router-view />
    </q-page-container>
  </q-layout>
</template>

<script>
// import EssentialLink from 'components/EssentialLink'

export default {
  name: 'MainLayout',

  // components: {
  //   EssentialLink
  // },
  mounted () {
    this.$q.dark.set(true)
  },
  data () {
    return {
      leftDrawerOpen: false,
      tab: 'home',
      ilabTabs: [
        {
          name: 'home',
          label: 'Home',
          url: '/'
        },
        {
          name: 'gallery',
          label: 'Gallery',
          url: '/gallery'
        },
        {
          name: 'resources',
          label: 'Resources',
          url: '/resource'
        },
        {
          name: 'contact',
          label: 'Contact Us',
          url: '/contact'
        }
      ],
      essentialLinks: [
        {
          title: 'Docs',
          caption: 'quasar.dev',
          icon: 'school',
          link: 'https://quasar.dev'
        },
        {
          title: 'Github',
          caption: 'github.com/quasarframework',
          icon: 'code',
          link: 'https://github.com/quasarframework'
        },
        {
          title: 'Discord Chat Channel',
          caption: 'chat.quasar.dev',
          icon: 'chat',
          link: 'https://chat.quasar.dev'
        },
        {
          title: 'Forum',
          caption: 'forum.quasar.dev',
          icon: 'record_voice_over',
          link: 'https://forum.quasar.dev'
        },
        {
          title: 'Twitter',
          caption: '@quasarframework',
          icon: 'rss_feed',
          link: 'https://twitter.quasar.dev'
        },
        {
          title: 'Facebook',
          caption: '@QuasarFramework',
          icon: 'public',
          link: 'https://facebook.quasar.dev'
        }
      ]
    }
  }
}
</script>
