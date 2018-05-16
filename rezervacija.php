<?php
require_once('uzklausa.php');
$suniukai = getVisusSuniukus ();
// print_r($suniukai[0]['suniuko_vardas']);
 ?>

<div class="row  " id="rezervacija">
  <div class="col suniukai">
    <h2>Šuniu<span>kų rez</span>ervacija</h2>
    <p>Rugsėjo mėnesį mūsų šeima praturtėjo net šešiais nuostabiais Kavalieriaus Karaliaus Karolio spanieliais. Savo pirmąją vadą atsivedė daugkartinė Lietuvos čempionė Havana. Šuniukus jau galite rezervuoti žemiau.</p>
  </div>
</div>

<div class="row ">
  <div class=" col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-1">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Šuniukas 1">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"> <?php echo $suniukai[0]['suniuko_vardas']; ?> <img src="img/male.png" alt="Patinėlis"></h5>
      <p class="card-text">Mama Havana daugkartine Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[0]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
          <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="suniukas-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suniukas-1-1">Užpildykite šią formą ir mes su Jumis susisieksime dėl rezervacijos patvirtinimo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="zinute"></div>
        <form class="row contact" action="index.html" method="get">
            <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
            <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="target1">Patvirtinti rezervaciją</button>
      </div>
      <div class="">
        <script>
          //$( document ).ready(function() {
            $( "#suniukas-1 #target1" ).click(function() {
              var contactName = $( "#suniukas-1 input[name=vardas]" ).val();
              var contactTel = $( "#suniukas-1 input[name=telefonas]" ).val();
              $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
                $(".zinute").html(result);
              }});

            });
        //  });
      </script>
      </div>
    </div>
  </div>
</div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-2 ml-4">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Šuniukas 2">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"><?php echo $suniukai[1]['suniuko_vardas']; ?><img src="img/male.png" alt="Patinėlis"></h5>
      <p class="card-text">Mama Havana daugkartine Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[1]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
            <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="suniukas-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suniukas-2-2">Užpildykite šią formą ir mes su Jumis susisieksime dėl rezervacijos patvirtinimo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="zinute"></div>
        <form class="row contact" action="index.html" method="get">
            <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
            <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="target2">Patvirtinti rezervaciją</button>
      </div>
      <div class="">
        <script>
          //$( document ).ready(function() {
            $( "#suniukas-2 #target2" ).click(function() {
              var contactName = $( "#suniukas-2 input[name=vardas]" ).val();
              var contactTel = $( "#suniukas-2 input[name=telefonas]" ).val();
              $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
                $(".zinute").html(result);
              }});

            });
        //  });
      </script>
      </div>
    </div>
  </div>
</div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-3 ml-4">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Suniukas 3">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"><?php echo $suniukai[2]['suniuko_vardas']; ?> <img src="img/male.png" alt="Patinėlis"></h5>
      <p class="card-text">Mama Havana daugkartine Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[2]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
            <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="suniukas-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="suniukas-3-3">Užpildykite šią formą ir mes su Jumis susisieksime dėl rezervacijos patvirtinimo:</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="zinute"></div>
      <form class="row contact" action="index.html" method="get">
          <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
          <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-second" id="target3">Patvirtinti rezervaciją</button>
    </div>
  </div>
  <div class="">
    <script>
      //$( document ).ready(function() {
        $( "#suniukas-3 #target3" ).click(function() {
          var contactName = $( "#suniukas-3 input[name=vardas]" ).val();
          var contactTel = $( "#suniukas-3 input[name=telefonas]" ).val();
          $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
            $(".zinute").html(result);
          }});

        });
    //  });
  </script>
  </div>
</div>
</div>
</div>

<div class="row">
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-4">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Suniukas 4">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"><?php echo $suniukai[3]['suniuko_vardas']; ?> <img src="img/female.png" alt="Patelė"></h5>
      <p class="card-text">Mama Havana daugkartinė Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[3]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
            <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="suniukas-4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suniukas-4-4">Užpildykite šią formą ir mes su Jumis susisieksime dėl rezervacijos patvirtinimo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="zinute"></div>
        <form class="row contact" action="index.html" method="get">
            <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
            <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="target4">Patvirtinti rezervaciją</button>
      </div>
      <div class="">
        <script>
          //$( document ).ready(function() {
            $( "#suniukas-4 #target4" ).click(function() {
              var contactName = $( "#suniukas-4 input[name=vardas]" ).val();
              var contactTel = $( "#suniukas-4 input[name=telefonas]" ).val();
              $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
                $(".zinute").html(result);
              }});

            });
        //  });
      </script>
      </div>
    </div>
  </div>
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-5 ml-4">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Suniukas 5">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"><?php echo $suniukai[4]['suniuko_vardas']; ?> <img src="img/female.png" alt="Patelė"></h5>
      <p class="card-text">Mama Havana daugkartine Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[4]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
            <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="suniukas-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suniukas-5-5">Užpildykite šią formą ir mes su Jumis susisieksime dėl rezervacijos patvirtinimo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="zinute"></div>
        <form class="row contact" action="index.html" method="get">
            <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
            <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="target5">Patvirtinti rezervaciją</button>
      </div>
      <div class="">
        <script>
          //$( document ).ready(function() {
            $( "#suniukas-5 #target5" ).click(function() {
              var contactName = $( "#suniukas-5 input[name=vardas]" ).val();
              var contactTel = $( "#suniukas-5 input[name=telefonas]" ).val();
              $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
                $(".zinute").html(result);
              }});

            });
        //  });
      </script>
      </div>
    </div>
  </div>
  </div>

  <div class="col-12 col-sm-12 col-md-6 col-lg-3 card suniukas-6 ml-4">
    <img class="card-img-top rounded mt-3" src="img/suniukas2.jpg" alt="Card image cap">
    <div class="card-body-suniukas1">
      <h5 class="card-title mt-3"><?php echo $suniukai[5]['suniuko_vardas']; ?> <img src="img/female.png" alt="Patelė"></h5>
      <p class="card-text">Mama Havana daugkartine Lietuvos čempionė.
      Tėvas Estas, tarptautinis Baltijos šalių čempionas.</p>
      <div class="mygtukas-rezervuoti">
        <?php if ($suniukai[5]['rezervuota'] == 0) { ?>
            <a href="#" class="btn btn-primary mb-4" data-toggle="modal" data-target="#suniukas-1">REZERVUOTI</a>
        <?php } else { ?>
            <div class="rezervuotas rounded">REZERVUOTAS</div>
        <?php } ?>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="suniukas-6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="suniukas-6-6">Užpildykite šią formą ir mes su Jumis susisieksime, dėl rezervacijos patvirtinimo:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="zinute"></div>
        <form class="row contact" action="index.html" method="get">
            <input class="col-5 modal-body-rezervuoti" type="text" placeholder="Vardas, pavardė*" name="vardas" value="">
            <input class="col-5 modal-body-rezervuoti " type="text" placeholder="Tel.nr." name="telefonas" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  id="target6">Patvirtinti rezervaciją</button>
      </div>
      <div class="">
        <script>
          //$( document ).ready(function() {
            $( "#suniukas-6 #target6" ).click(function() {
              var contactName = $( "#suniukas-6 input[name=vardas]" ).val();
              var contactTel = $( "#suniukas-6 input[name=telefonas]" ).val();
              $.ajax({url: "mail.php?vardas="+contactName+"&telefonas="+contactTel, success: function(result){
                $(".zinute").html(result);
              }});

            });
        //  });
      </script>
      </div>
    </div>
  </div>
</div>
</div>
