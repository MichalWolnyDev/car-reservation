<template>
  <div>
  <nav>
        nav
        <p>
          <router-link :to="{ name: 'index' }">Strona główna</router-link> |
          <router-link :to="{ name: 'login' }">Zaloguj</router-link>
        </p>
      </nav>
    <!-- <div class="container">
      <div>
        <div class="nav">
          <h1 class="nav-title">CRS</h1>
        </div>
        
        <div class="content">
        </div>
      </div>
    </div> -->
    <div>
    <router-view></router-view>

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