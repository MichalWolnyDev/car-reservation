<template>
  <div class="dashboard-container">
    <div class="dashboard">
      <div class="dashboard-body">
        <div class="dashboard-menu">
          <!-- Nazwa użytkownika: {{ user.name }}
                    Email: {{ user.email }} -->
          <ul class="dashboard-nav">
            <li>Test</li>
            <li>Test 2</li>
            <li>Test 3</li>
            <li>Test 4</li>
          </ul>
        </div>
        <div class="dashboard-content">
          <ul>
            <li v-for="item in getReservations" :key="item.id">
              >
              {{ item }}
            </li>
          </ul>
          <button @click.prevent="logout">Wyloguj</button>
        </div>
        <div></div>
      </div>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  name: "Dashboard",
  data() {
    return {
      user: null,
    };
  },
  methods: {
    logout() {
      axios.post("/api/logout").then(() => {
        this.$router.push({ name: "login" });
      });
    },
  },
  computed: {
    ...mapGetters(["getReservations"]),
  },
  mounted() {
    this.$store.dispatch("allCategoryFromDatabase");

    axios.get("/api/user").then((res) => {
      this.user = res.data;
    });
  },
};
</script>
<style scoped>
ul {
  list-style-type: none;
}
.dashboard-container {
  max-width: 1920px;
  margin: 0 auto;
}
.dashboard-body {
  display: flex;
}
.dashboard-menu {
  flex: 1 0 20%;
  color: #cecece;
  padding: 1rem;
  box-shadow: 0 2px 2px 0 rgb(0 0 0 / 20%), 0 2px 20px 0 rgb(0 0 0 / 35%);
  background-color: #2c2c2c;
}
.dashboard-nav li{
  padding: 1rem 0;
  border-bottom: 1px solid #565656;
  cursor: pointer;
}
</style>
