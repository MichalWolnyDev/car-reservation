<template>
  <div class="dashboard-container">
    <div class="dashboard">
      <div class="dashboard-body">
        <div class="dashboard-menu">
          <ul class="dashboard-nav">
            <li>
              <router-link class="dashboard-link" :to="{ name: 'profile' }">Profil</router-link>
            </li>
            <li>
              <router-link class="dashboard-link" :to="{ name: 'booked' }">Zarezerwowane terminy</router-link>
            </li>
          
          </ul>
        </div>
        <div class="dashboard-content">
          <div class="dashboard-view">
            <router-view/>
          </div>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Dashboard",
  data() {
    return {}
  },
  mounted() {
    this.$store.dispatch("userInfoRequest");
    this.$store.dispatch("allCategoryFromDatabase");

  }
}
</script>