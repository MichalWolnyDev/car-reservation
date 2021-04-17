<template>
  <div>
    <div class="container">
      <div>
        <div class="nav">
          <h1 class="nav-title">CRS</h1>
        </div>
        <p>
          <router-link :to="{ name: 'form' }">Form</router-link> |
          <router-link :to="{ name: 'dashboard' }">Dashboard</router-link>
        </p>
        <div class="content">
          <router-view></router-view>
        </div>
      </div>
    </div>
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