<template>
  <div>
    <nav>
      <div>
        <div>
          <div class="nav-header shadow">
            <div class="nav-logo">
              <a href="/">
                <img src="/img/Logo.jpg" alt="Car Reservation System" />
              </a>
            </div>
            <div class="nav-login">
              
                <div class="nav-button">
                  <router-link class="nav-link" :to="{ name: 'index' }">Strona główna</router-link>
                </div>
                <div class="nav-button" v-if="getUserInfo == null">
                  <router-link class="nav-link" :to="{ name: 'login' }">Zaloguj</router-link>
                </div>
                <div class="nav-button" v-if="getUserInfo == null">
                   <router-link class="nav-link" :to="{ name: 'register' }">Zarejestruj</router-link>
                </div>
             
                <div class="nav-button" v-if="getUserInfo != null">
                   <router-link class="nav-link" :to="{ name: 'profile' }">{{ getUserInfo.name }}</router-link>
                </div>
             
                <div class="nav-button" v-if="getUserInfo != null">
                   <a role="button" class="nav-link pointer" @click="logout">Wyloguj</a>
                </div>
             
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  name: "Nav",
   methods: {
    logout() {
      axios.post("/api/logout").then(() => {
        this.$router.push({ name: "login" });
        this.$store.dispatch("clearUserInfo");
      });
    },
  },
  computed: {
    ...mapGetters(["getUserInfo"]),
  }
};
</script>
