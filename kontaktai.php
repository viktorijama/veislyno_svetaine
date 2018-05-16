<?php
      require_once('uzklausa.php');

      $error="";
      $success="";

    if ($_POST) {

      $vardas=$_POST['vardas'];
      $telefonas=$_POST['telefonas'];
      $emeilas=$_POST['email'];
      $uzklausa=$_POST['uzklausa'];

      if (strlen($vardas) < 3 ) {
        $error.="<div class='alert alert-danger'>Vardas įvestas neteisingai! </div>";
      }

      if (strlen($telefonas) < 6 ) {
        $error.="<div class='alert alert-danger'>Telefono numeris įvestas neteisingai!</div>";
      }

      if (strlen($emeilas) < 3 ) {
        $error.="<div class='alert alert-danger'>El. pašto adresas įvestas neteisingai!</div>";
      }

      if (strlen($uzklausa) < 10 ) {
        $error.="<div class='alert alert-danger'>Mažiausias leistinas simbolių skaičius - 10!</div>";
      }

      if (empty($error)) {
        $message="Vartotojas $vardas, telefono numeris: $telefonas, emeilas: $emeilas, atsiuntė užklausą: $uzklausa";
        // mail("viktorija.maciune@gmail.com", "Šuniuko rezervacija", $message);
        createUzklausa($vardas, $telefonas, $emeilas, $uzklausa);
        $success.="<div class='alert alert-success'>Jūsų užklausa sėkmingai išsiųsta.</div>";
      } else {
      }
    }
?>

<div class="row " id="kontaktai">
  <div class="col kontaktai">
    <h2>Ko<span>ntak</span>tai</h2>
  </div>
</div>

<div class="row">
  <div class="col-12 col-sm-12 col-md-12 col-lg-6 zemelapis">
    <div class="kontaktine-info">
      <h3>VEISLYNO KONTAKTAI</h3>
      <p><li>Tel. nr.: <strong>+370 600 00000</strong></li>
      <p><li>E-mail: <strong>info@tikidile.lt</strong></li>
      <p><li>Adresas: <strong>Laimės g.1, Seniava, Kauno r.</strong></li>
      </p>
    </div>
    <div id="map" style=""></div>
    <script>
      function initMap() {
        var kauno_pilis = {lat: 54.848689, lng: 23.901913};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: kauno_pilis
        });
        var marker = new google.maps.Marker({
          position: kauno_pilis,
          map: map,
        });
        marker.setIcon('http://maps.google.com/mapfiles/ms/icons/yellow-dot.png');
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsaSu3fG9V4lAFNbN9oQ6hPA77wXdxqq8&callback=initMap">
    </script>
  </div>

  <div class="kontaktu-forma col-12 col-sm-12 col-md-12 col-lg-6">
    <div class="row">
      <div class="col">
        <h5>Užpildykite formą ir mes su Jumis susisieksime</h5>
      </div>
    </div>

    <?php echo $success; ?>
    <?php echo $error; ?>

    <form class="row contact" id="kontaktu-forma-1" action="index.php#kontaktu-forma-1" method="post">
      <div class=" col-lg col-md col-sm-12 col-12 kontaktu-forma-kaire">
        <input type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
        <br>
        <input type="tel" placeholder="Tel.nr." name="telefonas" value="">
        <br>
        <input type="text" placeholder="El. pašto adresas*" name="email" value="">
      </div>
      <div class=" col-lg col-md col-sm-12 col-12  kontaktu-forma-desine">
      <textarea name="uzklausa" placeholder="Jūsų žinutė*"rows="6" cols="50"></textarea>
      <button type="submit" name="Siųsti" class="kontaktu-forma-btn">Siųsti</button>
      </div>
    </form>

  </div>
</div>
