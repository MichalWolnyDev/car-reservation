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
                  <h1 class="baner-title">Witaj w naszym serwisie!</h1>
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
                  Witaj przybyszu nasz serwis jest kozak
                </h2>
                <p class="content-hello-text text-center">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                  egestas, diam non blandit tincidunt, elit lacus iaculis eros,
                  ut accumsan magna purus sit amet urna. Aenean eget quam
                  commodo, malesuada ante sed, vulputate erat. Mauris ut nisi
                  non neque rhoncus ornare ac sed ipsum. Nullam sit amet purus
                  vehicula sem tempus ultrices eu at massa. Donec nisl ante,
                  tempor eget felis eget, dictum mollis augue. Ut in ipsum sit
                  amet felis laoreet blandit id quis nunc. Proin quis elit
                  massa. Vivamus faucibus, dolor et congue elementum, libero
                  elit rhoncus tortor, et egestas augue lacus ut metus. Duis
                  pellentesque semper lectus, in aliquam dolor bibendum vel.
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
                    <h3>Dupa dupa jesteśmy fajni</h3>
                    <p>
                      Fusce consectetur sollicitudin ligula, a sollicitudin
                      mauris cursus quis. Proin eget gravida nunc, ut lacinia
                      ligula. Phasellus sed mauris elementum, luctus est ut,
                      tempor justo. Cras finibus efficitur tincidunt. Phasellus
                      nec lacus eleifend sem elementum suscipit quis in velit.
                      Vivamus iaculis vitae neque sit amet consequat. Integer
                      non dictum dui.
                    </p>
                    <p>
                      Interdum et malesuada fames ac ante ipsum primis in
                      faucibus. Quisque feugiat convallis dui in lobortis.
                      Aenean sagittis feugiat sapien vitae placerat. Sed sapien
                      risus, pharetra non justo id, accumsan aliquam felis.
                      Vestibulum ante ipsum primis in faucibus orci luctus et
                      ultrices posuere cubilia curae; Nam imperdiet arcu eget
                      odio viverra, eu congue metus vulputate. Donec varius non
                      lacus id pulvinar. Aenean blandit rhoncus libero vitae
                      bibendum.
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
          <div>
            <div>
              <div>
                <div class="content-formtext1">
                  <h2>Kontakt</h2><br><br>
                </div>
                <div class="content-formtext2">
                  Jeśli chcesz się znami skontaktować lub umówić termin wizyty, wypełnij poniższy formularz. Nasz konsultat skontaktuje się z Tobą tak szybko jak to możliwe.
                </div>
                <form class="content-form">
                  <div class="content-form-item">
                    <label for="name">Imię:</label>
                    <input class="content-form-input" type="text" name="name" placeholder="Imie/Name" />
                  </div>
                  <div class="content-form-item">
                    <label for="surname">Nazwisko:</label>
                    <input class="content-form-input" type="text" name="surname" placeholder="Nazwisko/Surname" />
                  </div>
                  <div class="content-form-item">
                    <label for="carname">E-mail:</label>
                    <input class="content-form-input" type="text" name="carname" placeholder="serwis@serwis.pl" />
                  </div>
                  <div class="content-form-item">
                    <label for="model">Tel:</label>
                    <input class="content-form-input" type="text" name="model" placeholder="+48 111 222 333" />
                  </div>
                  <div class="content-form-item">
                    <label for="service_date">Data wizyty</label>
                    <input class="content-form-input" type="text" name="service_date" placeholder="31/03/2021" />
                  </div>
                  <div class="content-formbutton">
                    <b>Wyślij</b>
                </div>
                </form>
                
              </div>
            </div>
          </div>
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