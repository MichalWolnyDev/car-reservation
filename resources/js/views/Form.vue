<template>
  <div>
    <div>
      <div>
        <form class="form">
          <div class="form-item">
            <label for="name">Imię:</label>
            <input class="form-input" type="text" name="name" />
          </div>
          <div class="form-item">
            <label for="surname">Nazwisko:</label>
            <input class="form-input" type="text" name="surname" />
          </div>
          <div class="form-item">
            <label for="carname">Marka samochodu:</label>
            <input class="form-input" type="text" name="carname" />
          </div>
          <div class="form-item">
            <label for="model">Model:</label>
            <input class="form-input" type="text" name="model" />
          </div>
          <div class="form-item">
            <label for="prod_year">Rok produkcji:</label>
            <input class="form-input" type="text" name="prod_year" />
          </div>
          <div class="form-item">
            <label for="service_date">Data wizyty</label>
            <input class="form-input" type="text" name="service_date" />
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "Form",
};
</script>
