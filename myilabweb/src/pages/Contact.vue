<template>
  <q-page class="flex flex-center">
    <div>
      <q-card class="my-card">
        <q-item>
          <q-item-section avatar>
            <q-avatar>
              <img src="statics/images/logo.png">
            </q-avatar>
          </q-item-section>

          <q-item-section>
            <q-item-label>iLab</q-item-label>
            <q-item-label caption>JDT 510</q-item-label>
          </q-item-section>
        </q-item>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3229.642340278259!2d-83.9245924690176!3d35.955718352199426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885c17e7c642f099%3A0xd32939568d8ae167!2sDepartment%20of%20Industrial%20%26%20Systems%20Engineering!5e0!3m2!1sen!2sus!4v1602465118723!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <q-card-actions>
          <q-btn icon="mail" color="deep-orange" glossy>Email: iLab.UTK@gmail.com</q-btn>
        </q-card-actions>
        <q-card-actions>
          <q-btn icon="phone" flat>Phone: 865-974-3333</q-btn>
        </q-card-actions>
      </q-card>
    </div>
  </q-page>
</template>

<script>
export default {
  name: 'About'
}
</script>
