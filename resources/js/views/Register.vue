<template>
  <div>
    <div class="container">
      <div class="user-form-window">
        <div class="user-form shadow">
          <div class="user-form-item">
            <div v-if="errors.name">
              <small class="user-form-error">
                {{ errors.name[0] }}
              </small>
            </div>
            <input
              class="user-form-input"
              v-model="form.name"
              type="text"
              name="name"
              placeholder="Podaj nick"
            />
          </div>
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
          <div class="login-loader" v-if="logging">
            <div class="lds-roller">
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
              <div></div>
            </div>
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
      logging: false,
    };
  },
  methods: {
    saveForm() {
      var t = this;
      this.logging = true;
      axios
        .post("/api/register", this.form)
        .then(() => {
          this.$router.push({ name: "profile" });
          setTimeout(() => {
            t.logging = false;
          }, 1500);
        })
        .catch((err) => {
          this.logging = false;
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