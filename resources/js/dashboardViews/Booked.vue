<template>
  <div>
      Zarezerwowane terminy
      <div>
          <ul>
            <li v-for="item in getReservations" :key="item.id">
              >
              {{ item }}
            </li>
          </ul>
      </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  name: "booked",
  computed: {
    ...mapGetters(["getReservations"]),
  }

};
</script>
