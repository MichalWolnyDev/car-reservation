<template>
  <div>
    <div>
      <div>
        <div>
          <div class="content-formtext1">
            <h2>Kontakt</h2>
            <br /><br />
          </div>
          <div class="content-formtext2">
            Jeśli chcesz się znami skontaktować lub umówić termin wizyty,
            wypełnij poniższy formularz. Nasz konsultat skontaktuje się z Tobą
            tak szybko jak to możliwe.
          </div>
          <div v-if="!message">
<form class="form-main">
            <div class="user-form-flex">
              <div class="user-form-item">
                <label for="name">Imię:</label>
                <div v-if="errors.name">
                  <small class="user-form-error">
                    {{ errors.name[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="name"
                  placeholder="Imie/Name"
                  v-model="formData.name"
                />
              </div>
              <div class="user-form-item">
                <label for="surname">Nazwisko:</label>
                <div v-if="errors.surname">
                  <small class="user-form-error">
                    {{ errors.surname[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="surname"
                  placeholder="Nazwisko/Surname"
                  v-model="formData.surname"
                />
              </div>
              <div class="user-form-item">
                <label for="car">Marka:</label>
                <div v-if="errors.car">
                  <small class="user-form-error">
                    {{ errors.car[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="car"
                  placeholder="Marka samochodu"
                  v-model="formData.car"
                />
              </div>
              <div class="user-form-item">
                <label for="model">Model:</label>
                <div v-if="errors.surname">
                  <small class="user-form-error">
                    {{ errors.surname[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="model"
                  placeholder="Model samochodu"
                  v-model="formData.model"
                />
              </div>
              <div class="user-form-item">
                <label for="prod_year">Rok produkcji:</label>
                <div v-if="errors.year">
                  <small class="user-form-error">
                    {{ errors.year[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="prod_year"
                  placeholder="np. 1997"
                  v-model="formData.year"
                />
              </div>
              <div class="user-form-item">
                <label for="email">E-mail:</label>
                <div v-if="errors.email">
                  <small class="user-form-error">
                    {{ errors.email[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="text"
                  name="email"
                  placeholder="serwis@serwis.pl"
                  v-model="formData.email"
                />
              </div>
              <div class="user-form-item">
                <label for="phone_nr">Tel:</label>
                <div v-if="errors.phone">
                  <small class="user-form-error">
                    {{ errors.phone[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="tel"
                  name="phone_nr"
                  placeholder="+48 111 222 333"
                  v-model="formData.phone"
                />
              </div>
              <div class="user-form-item">
                <label for="service_date">Data wizyty</label>
                <div v-if="errors.date">
                  <small class="user-form-error">
                    {{ errors.date[0] }}
                  </small>
                </div>
                <input
                  class="user-form-input"
                  type="date"
                  name="service_date"
                  v-model="formData.date"
                />
              </div>
            </div>
            <div class="text-center">
              <button
                class="user-formbutton"
                @click.prevent="sendForm"
                type="submit"
              >
                Wyślij
              </button>
            </div>
          </form>
          </div>
          <div v-else>
            <div class="content-formtext1">
             <h2>Dziękujemy za wysłanie zgłoszenia!</h2>
            <br /><br />
           </div>
          <div class="content-formtext2">
            Nasz doradca wkrótce się z państwem skontaktuje.
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Form",
  data() {
    return {
      formData: {
        name: "",
        surname: "",
        email: "",
        phone: "",
        date: "",
        car: "",
        model: "",
        year: "",
      },
      errors: {},
      message: false
    };
  },
  methods: {
    sendForm() {
      var that = this;
      console.log("wysylka danych");
      axios
        .post("/api/reservations", this.formData)
        .then((res) => {
          console.log("wyslano dane");
          if(res.status == 201){
            this.message = true;
          }
          
        })
        .catch((err) => {
          that.errors = err.response.data;
          console.log(that.errors);
        });
    },
  },
};
</script>
