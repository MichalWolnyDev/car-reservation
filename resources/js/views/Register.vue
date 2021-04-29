<template>
  <div>
    <div class="container">
      <div class="user-form-window">
        <div class="user-form shadow">
          <div class="user-form-item">
            <input
              class="user-form-input"
              v-model="form.name"
              type="text"
              name="name"
              placeholder="Podaj nick"
            />
          </div>
          <div class="user-form-item">
            <input
              class="user-form-input"
              v-model="form.email"
              type="email"
              name="email"
              placeholder="Wpisz adres e-mail"
            />
          </div>
          <div class="user-form-item">
            <input
              class="user-form-input"
              v-model="form.password"
              type="password"
              name="password"
              placeholder="Podaj hasło"
            />
          </div>
          <div class="user-form-item">
            <input
              class="user-form-input"
              v-model="form.password_confirmation"
              type="password"
              name="password_confirmation"
              placeholder="Powtórz hasło"
            />
          </div>
          <div class="user-form-item text-center">
            <button
              class="user-formbutton"
              @click.prevent="saveForm"
              type="submit"
            >
              Zarejestruj
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
        name: "",
        email: "",
        password: "",
        password_confirmation: "",
      },
      errors: [],
    };
  },
  methods: {
    saveForm() {
      axios
        .post("/api/register", this.form)
        .then(() => {
          console.log("zarejestrowano");
          this.$router.push({ name: "profile" });
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