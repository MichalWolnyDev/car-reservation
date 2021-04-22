<template>
  <div class="container-flex">
    <navbar />
    <div class="container-view">
      <router-view></router-view>
    </div>
    <footer-comp />
  </div>
</template>
<script>
// const default_layout = "default";
export default {
  computed: {},
  data() {
    return {};
  },
};
</script>