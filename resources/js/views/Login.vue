<template>
  <div>
    <div class="container">
      <div>
        <div>
          <div class="form-item">
            <label for="email">Email:</label>
            <input
              class="form-input"
              v-model="form.email"
              type="email"
              name="email"
            />
          </div>
          <div class="form-item">
            <label for="password">Hasło:</label>
            <input
              class="form-input"
              v-model="form.password"
              type="password"
              name="password"
            />
          </div>
          <div class="form-item">
            <button @click.prevent="loginUser" type="submit">Zaloguj</button>
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