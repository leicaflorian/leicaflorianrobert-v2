<footer>
  <div class="container">
    <div class="d-flex columns-container ">
      <div class="logo">
        <a href="{{ route('home') }}" class="mb-1">
          <x-svg-icon icon="logo" style="--icon-size: 150px"></x-svg-icon>
        </a>

        <h4 class="col-title"><strong>Leica Florian Robert</strong></h4>

        <div>Via Pozza Maraschin, 44/B</div>
        <div>36015 Schio, VI</div>

        <div>P. Iva: 04329800249</div>
        <div>REA: VI - 396256</div>
        <div>SDI: M5UXCR1</div>
      </div>

      <div class="vr vr-fluid"></div>

      <div>
        <div class="d-flex fill-childs mb-2 info-container">
          <div class="info">
            <h4 class="col-title"><strong>Contatti</strong></h4>

            <div>Email:&nbsp;<a href="mailto: info@leicaflorianrobert.dev">info@leicaflorianrobert.dev</a></div>
            <div>Pec:&nbsp;<a href="mailto: florian.leica@pec.it">florian.leica@pec.it</a></div>
          </div>

          <div class="vr vr-fluid" style="flex: 0 0 1px"></div>

          <div class="info">
            <h4 class="col-title"><strong>Social</strong></h4>

            <div class="social-links">
              <a href="#">
                <x-svg-icon icon="icons/github"></x-svg-icon>
              </a>
              <a href="#">
                <x-svg-icon icon="icons/linkedin"></x-svg-icon>
              </a>
            </div>
          </div>
        </div>

        <div class="rights">
          Tutti i diritti riservati - © {{ (new DateTime())->format("Y") }}
          <br>
          <a href="#">Privacy Policy</a> - <a href="#">Cookie Policy</a>
        </div>
      </div>
    </div>
  </div>

</footer>
