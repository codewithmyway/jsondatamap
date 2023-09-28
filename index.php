<html>
  <head>
    <title>deck.gl and Google Maps Platform</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Use Material Design Progress indicator -->
    <link
      href="https://unpkg.com/material-components-web@6.0.0/dist/material-components-web.css"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/material-components-web@6.0.0/dist/material-components-web.min.js"></script>
    <script src="https://unpkg.com/deck.gl@8.7.3/dist.min.js"></script>
    <script src="https://unpkg.com/@deck.gl/google-maps@8.7.3/dist.min.js"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.js"></script>
  </head>
  <body>
    <div
      role="progressbar"
      class="mdc-linear-progress"
      aria-label="Data Progress Bar"
    >
      <div class="mdc-linear-progress__buffer">
        <div class="mdc-linear-progress__buffer-bar"></div>
        <div class="mdc-linear-progress__buffer-dots"></div>
      </div>
      <div class="mdc-linear-progress__bar mdc-linear-progress__primary-bar">
        <span class="mdc-linear-progress__bar-inner"></span>
      </div>
      <div class="mdc-linear-progress__bar mdc-linear-progress__secondary-bar">
        <span class="mdc-linear-progress__bar-inner"></span>
      </div>
    </div>
    <script>
      var progress, progressDiv;
      progressDiv = document.querySelector(".mdc-linear-progress");
      progress = new mdc.linearProgress.MDCLinearProgress(progressDiv);
      progress.open();
      progress.determinate = false;
      progress.done = function () {
        progress.close();
        progressDiv.remove();
      };
    </script>

    <div id="map"></div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
      <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTqVv8bnWtcApNQ7VCErEt8r2N5gPs5TM&callback=initMap">
    </script>
  </body>
</html>