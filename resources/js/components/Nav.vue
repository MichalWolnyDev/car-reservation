<template>
  <div>
    <nav>
      <div>
        <div>
          <div class="nav-header">
            <div class="nav-logo">
              <img src="/img/Logo.jpg" alt="NO IMG" />
            </div>
            <div class="nav-login">
              <p>
<<<<<<< HEAD
                <div class="nav-mainsitebutton">
                  <router-link :to="{ name: 'index' }">Strona główna</router-link>
                </div>
                <div class="nav-loginbutton">
                  <router-link :to="{ name: 'login' }">Zaloguj</router-link>
                </div>
=======
                <router-link :to="{ name: 'index' }">Strona główna</router-link>
                |
                <router-link :to="{ name: 'login' }">Zaloguj</router-link>
                <router-link :to="{ name: 'register' }">Zarejestruj</router-link>
>>>>>>> 48ce0a3d0000e159b409dd0a102559dba959bfc9
              </p>
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
