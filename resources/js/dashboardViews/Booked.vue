<template>
  <div>
    <div>
      <h2 class="booked-title">Zarezerwowane terminy</h2>
    </div>
    <div>
      <div v-if="!getReservationsState">
        <div class="booked-loader">
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
      <transition name="fade">
        <div v-if="getReservationsState">
          <div class="booked" v-if="getReservations.length > 0">
            <div class="booked-row header">
              <div class="booked-item id">
                <p>Id:</p>
              </div>
              <div class="booked-item">
                <p>Imię:</p>
              </div>
              <div class="booked-item">
                <p>Nazwisko:</p>
              </div>
              <div class="booked-item">
                <p>Marka samochodu:</p>
              </div>
              <div class="booked-item">
                <p>Model samochodu:</p>
              </div>
              <div class="booked-item">
                <p>Rok produkcji:</p>
              </div>
              <div class="booked-item">
                <p>Data rezerwacji:</p>
              </div>
              <div class="booked-item">
                <p>Usuń</p>
              </div>
            </div>
            <div
              v-for="(item, index) in getReservations"
              :key="item.id"
              class="booked-row"
              :class="{ last: index == getReservations.length - 1 }"
            >
              <div class="booked-item id">
                {{ item.id }}
              </div>
              <div class="booked-item">
                {{ item.name }}
              </div>
              <div class="booked-item">
                {{ item.surname }}
              </div>
              <div class="booked-item">
                {{ item.car }}
              </div>
              <div class="booked-item">
                {{ item.model }}
              </div>
              <div class="booked-item">
                {{ item.year }}
              </div>
              <div class="booked-item">
                {{ item.date }}
              </div>
              <div class="booked-item" @click="deleteItem(item.id)">
                <i>
                  <svg class="booked-delete" viewBox="-40 0 427 427.00131">
                    <path
                      d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"
                    />
                    <path
                      d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"
                    />
                    <path
                      d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"
                    />
                    <path
                      d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"
                    />
                  </svg>
                </i>
              </div>
            </div>
          </div>
          <div v-else>
            <p class="booked-warning">Brak danych!</p>
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  name: "booked",
  computed: {
    ...mapGetters(["getReservations", "getReservationsState"]),
  },
  methods: {
    deleteItem(id){
        axios
        .delete("/api/reservations/"+ id)
        .then(() => {
          console.log("usunięto "+id);
          this.$store.dispatch("allCategoryFromDatabase");
        })
        .catch((err) => {
          this.errors = err.response.data.errors;
        });
    }
  }
};
</script>
<style scoped>
.booked-row {
  display: flex;
  align-items: center;
  padding: 2rem 0.8rem;
  border: 1px solid #e6e6e6;
  border-bottom: none;
  transition: all 0.5s ease-in-out;
}
.booked-row:nth-child(even) {
  background-color: #f5f5f5;
}
.booked-row:nth-child(1):hover {
  background-color: rgba(0, 0, 0, 0);
}
.booked-row:hover,
.booked-row:nth-child(even):hover {
  background-color: rgba(0, 0, 0, 0.1);
}

.booked-row.last {
  border-bottom: 1px solid #e6e6e6;
}
.booked-item {
  flex: 1;
  padding-right: 10px;
}
.booked-title {
  margin-bottom: 2rem;
  text-align: center;
}
.booked-item.id {
  font-weight: 700;
  text-align: center;
  max-width: 50px;
}
.booked-row.header > .booked-item p {
  font-weight: 700;
  color: #cecece;
}
.booked-delete {
  width: 20px;
  height: 20px;
  fill: #f00;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}
.booked-delete:hover {
  fill: rgb(255 38 38);
}
.booked-loader {
  display: flex;
  justify-content: center;
}
.booked-warning {
  text-align: center;
  font-size: 2rem;
  font-weight: bold;
  color: #f00;
}
@media (max-width: 1000px) {
  .booked-row {
    flex-direction: column;
  }
  .booked-item {
    padding-right: 0;
    width: 100%;
    padding: 0.3rem 0;
    border-bottom: 1px solid #cecece;
    text-align: center;
  }
}
</style>