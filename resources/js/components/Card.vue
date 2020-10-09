<template>
    <card class="h-auto">
        <div class="p-3" id="app">
          <div class="flex flex-col">
              <div class="flex flex-row content-center items-center" v-for="time in this.times">
                <div class="p-2">{{time.name}}</div>
                <div class="p-2">
                  {{time.time}}
                  <span v-show="time.night" style="color:#F7941D;"><font-awesome-icon icon="moon" /></span>
                  <span v-show="!time.night" style="color:#F7941D;"><font-awesome-icon icon="sun" /></span>
                </div>
              </div>
          </div>
        </div>
    </card>
</template>
<script>
  export default {
    props: ['card'],
    data() {
      return {
        times:[],
      }
    },
    created: function() {
      this.getTime();
      setInterval(this.getTime, this.card.ms)
    },
    mounted() {
        this.getTime();
    },
    methods: {
      getTime() {
        this.timezones = [];
        Nova.request().post('/nova-vendor/world-clock/get_times', {
          timezones: this.card.timezones,
          timeFormat: this.card.timeFormat
        })
          .then(res => {
            this.times = res.data;
          });
      },
    },
  }
</script>
