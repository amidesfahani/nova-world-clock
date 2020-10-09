<template>
    <card class="flex flex-col items-center justify-center" :class="{'h-auto': card.showtitle}">
        <div class="w-full px-3 py-3">
            <h1 v-show="card.showtitle" class="text-center text-2xl text-80 font-light m-3 p-2 border-b border-gray-300">{{ card.title }}</h1>
            <div class="flex flex-row content-center items-center border-b border-gray-200 last:border-b-0" v-for="time in this.times" :key="time.name">
                <div class="w-3/5 p-2">{{time.name}}</div>
                <div class="w-2/5 p-2">{{time.time}}</div>
                <div class="w-1/5">
                    <span v-show="time.night" style="color:#F7941D;"><font-awesome-icon icon="moon" /></span>
                    <span v-show="!time.night" style="color:#F7941D;"><font-awesome-icon icon="sun" /></span>
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
        Nova.request().post('/nova-vendor/nova-world-clock/get_times', {
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
