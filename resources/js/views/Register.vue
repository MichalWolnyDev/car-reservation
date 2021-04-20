<template>
  <div>
    <div class="container">
      <div>
        <div>
          <div class="form-item">
            <label for="name">Nazwa:</label>
            <input class="form-input" v-model="form.name" type="text" name="name" />
          </div>
          <div class="form-item">
            <label for="email">Email:</label>
            <input class="form-input" v-model="form.email" type="email" name="email" />
          </div>
          <div class="form-item">
            <label for="password">Hasło:</label>
            <input class="form-input" v-model="form.password" type="password" name="password" />
          </div>
          <div class="form-item">
            <label for="passwordconfirm">Powtórz hasło:</label>
            <input class="form-input" v-model="form.password_confirmation" type="password" name="password_confirmation " />
          </div>
          <div class="form-item">
            <button @click.prevent="saveForm" type="submit">
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
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
        },
        errors: []
    };
  },
  methods: {
      saveForm(){
          axios.post('/api/register', this.form)
          .then(() => {

              console.log('zarejestrowano');
          })
          .catch((err) => {
              this.errors = err.response.data.errors;
          })
      }
  }
};
</script>
<style scoped>
.gowno {
  color: red;
}
</style>