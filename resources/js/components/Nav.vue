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
                <div class="nav-button">
                  <router-link class="nav-link" :to="{ name: 'login' }">Zaloguj</router-link>
                </div>
                <div class="nav-button">
                   <router-link class="nav-link" :to="{ name: 'register' }">Zarejestruj</router-link>
                </div>
             
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  name: "Nav",
};
</script>
