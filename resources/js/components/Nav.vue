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
                <div class="nav-mainsitebutton">
                  <router-link :to="{ name: 'index' }">Strona główna</router-link>
                </div>
                <div class="nav-loginbutton">
                  <router-link :to="{ name: 'login' }">Zaloguj</router-link>
                </div>
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
