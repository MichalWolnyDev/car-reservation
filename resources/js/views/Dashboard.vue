<template>
  <div>
    <div>
      <div>
        <div>
          Nazwa użytkownika: {{ user.name }}
                    Email: {{ user.email }}
          <ul>
            <li v-for="item in getReservations" :key="item.id">
              >
              {{ item }}
            </li>
          </ul>
          <button @click.prevent="logout">Wyloguj</button>
        </div>
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
    }
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
