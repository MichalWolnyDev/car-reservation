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
                <div class="content-col">
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
      </main>
      <footer>
        <div class="footer-bg">
          <div class="container">
            <div class="footer-address">
              <div>
                <h4 class="footer-title">Wbijej do nas byczku</h4>
                <p>ul. Dupowa 69 - 69-699 Poznań</p>
                <p>
                  <a href="tel:123123123">123123123</a>
                </p>
                <p>
                  <a href="www.thirsty.pl" target="blank">www.thirsty.pl</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</template>
<script>
export default {
  name: "Index",
};
</script>
<style scoped>
.baner-relative {
  position: relative;
}
.baner-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
}
.baner-text {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #fff;
  font-size: 2rem;
  font-weight: bold;
  width: 100%;
  text-align: center;
}

.baner-img {
  width: 100%;
}

.text-center {
  text-align: center;
}
.content{
    margin-bottom: 2rem;
}

.content-hello {
  padding: 2rem 0;
}
.content-hello-text {
  padding-top: 1rem;
}
.content-row {
  display: flex;
  align-items: center;
}
.content-description {
  padding-left: 2rem;
}
.footer-bg {
  background-color: rgb(51, 49, 49);
}
.footer-address {
  text-align: center;
  padding: 2rem 0;
  color: #fff;
}
.footer-title{
    margin-bottom: 1rem;
}
@media(max-width: 960px){
      .content-img{
      max-width: 100%;
    }
    .content-row{
        display: block;
    }
    .content-description{
        padding: 1rem;
    }
}
@media (max-width: 768px) {
  .baner-overlay {
    display: none;
  }
  .baner-text {
    position: relative;
    top: 0;
    color: #000;
    padding: 1rem;
    transform: none;
  }
}
@media (max-width: 550px) {
  .baner-text {
    font-size: 1rem;
  }
}
</style>