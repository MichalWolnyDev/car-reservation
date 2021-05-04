<template>
  <div>
    <div class="container">
      <div class="user-form-window">
        <div class="user-form shadow">
          <div class="user-form-item">
            <div v-if="errors.email">
              <small class="user-form-error">
              {{ errors.email[0] }}
            </small>
            </div>

            <input
              class="user-form-input"
              v-model="form.email"
              type="email"
              name="email"
              placeholder="Wpisz adres e-mail"
            />
          </div>
          <div class="user-form-item">
            <div v-if="errors.password">
              <small class="user-form-error">
              {{ errors.password[0] }}
            </small>
            </div>
            <input
              class="user-form-input"
              v-model="form.password"
              type="password"
              name="password"
              placeholder="Podaj hasło"
            />
          </div>
          <div class="user-form-item text-center">
            <button
              class="user-formbutton"
              @click.prevent="loginUser"
              type="submit"
            >
              Zaloguj
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
          this.$router.push({ name: "profile" });
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