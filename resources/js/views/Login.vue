<template>
  <div>
    <div class="container">
      <div class="login-window">
        <div class="login-form">

          <div class="login-form-item">
            <label for="email">Email:</label>
            <input class="login-form-input" v-model="form.email" type="email" name="email" placeholder="Serwis@email.pl" />
          </div>
          <div class="login-form-item">
            <label for="password">Hasło:</label>
            <input class="login-form-input" v-model="form.password" type="password" name="password" placeholder="Hasło/Password" />
          </div>
          <div class="login-form-item">
            <button class="login-formbutton" @click.prevent="loginUser" type="submit">
               <b>Zaloguj</b> 
            </button>
          </div>

        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Login",
  data() {
    return {
      form: {
        email: "",
        password: "",
      },
      errors: [],
    };
  },
  methods: {
    loginUser() {
      axios
        .post("/api/login", this.form)
        .then(() => {
          this.$router.push({ name: "dashboard" });
          console.log("zalogowano");
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
        });
    },
  },
};
</script>
<style scoped>
.gowno {
  color: red;
}
</style>