<template>
  <div>
    <div>
      <main>
        <section>
          <div class="baner">
            <div class="baner-relative">
              <img class="baner-img" src="/img/Baner.jpg" alt="Baner" />
              <div class="baner-overlay"></div>
              <div class="baner-text">
                <div class="container">
                  <h1 class="baner-title">Zarezerwuj termin już dziś!</h1>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <div class="content">
              <div class="content-hello">
                <h2 class="content-hello-title text-center">
                  Witaj w systemie rezerwacji serwisu
                </h2>
                <p class="content-hello-text text-center">
                  <b>Car Reservation System</b> jest to strona gdzie możesz zarezerwować swój termin w jednym z naszych serwisów. Nie marnuj czasu na testowanie serwisów oraz umawianie się na wizyty, które i tak są przekładane. My zrobimy to za Ciebie! Wypełnij poniższy formularz aby wybrać interesujący Ciebie termin. A my oddzwonimy aby omówić szczegóły wizyty.
                </p>
              </div>
              <div class="content-row">
                <div class="content-col">
                  <div class="text-center">
                    <img class="content-img" src="/img/Content.jpg" alt="" />
                  </div>
                </div>
                <div class="content-col content-col-flex">
                  <div class="content-description">
                    <h3>Tylko profesjonalna obsługa i serwis</h3>
                    
                  </div>
                  <div class="content-description">
                    <p>
                      Dbamy o to by serwisy, z którymi współpracujemy były sprawdzone oraz przystępne cenowo. Dzięki naszemu sytemowi oraz profesjonalnej obsłudze problemy z autem odejdą w zapomnienie. A każda usterka nie będzie już straszna.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container">
            <carousel
              :perPageCustom="[
                [1024, 3],
                [768, 2],
                [250, 1],
              ]"
              :autoplay="true"
            >
              <slide>
                <img class="content-img" src="/img/galeria_1.jpg" alt="Galeria 1" />
              </slide>
              <slide>
                <img class="content-img" src="/img/galeria_2.jpg" alt="Galeria 2" />
              </slide>
              <slide>
                <img class="content-img" src="/img/galeria_3.jpg" alt="Galeria 3" />
              </slide>
              <slide>
                <img class="content-img" src="/img/galeria_4.jpg" alt="Galeria 4" />
              </slide>
              <slide>
                <img class="content-img" src="/img/galeria_5.jpg" alt="Galeria 5" />
              </slide>
            </carousel>
          </div>
        </section>
        <div class="container">
          <client-form/>
        </div>
      </main>
    </div>
  </div>
</template>
<script>
export default {
  name: "Index",
};
</script>