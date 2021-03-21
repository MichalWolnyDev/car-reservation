<template>
  <div>
    <p v-for="item in getReservations" :key="item.id">
      {{ item }}
    </p>
  </div>
</template>
<script>
// const default_layout = "default";
import { mapGetters } from 'vuex';
export default {
  computed: {},
  data() {
      return {
          message:'Hello World'
      }
  },
  computed: {
    ...mapGetters([
       'getReservations'
      ])
   },
  mounted(){
    this.$store.dispatch('allCategoryFromDatabase');
  },
 
};
</script>