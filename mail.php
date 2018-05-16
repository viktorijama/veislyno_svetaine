<?php


        $vardas=$_GET['vardas'];
        $telefonas=$_GET['telefonas'];


        $error="";
        $success="";

        if (strlen($vardas) < 3 ) {
          $error.="<div class='alert alert-danger'>Vardas įvestas neteisingai! </div>";
        }

        if (strlen($telefonas) < 6 ) {
          $error.="<div class='alert alert-danger'>Telefono numeris įvestas neteisingai!</div>";
        }

        if (empty($error)) {
          $message="Vartotojas $vardas, telefono numeris: $telefonas, nori rezervuoti šuniuką";
          // mail("viktorija.maciune@gmail.com", "Šuniuko rezervacija", $message);
          $success.="<div class='alert alert-success'>Jūsų rezervacija gauta. Ją patvirtinsime skambučiu.</div>";
          echo $success;
          die;
        } else {
          echo $error;
          die;
        }

        // echo $vardas;
        // echo $telefonas;


  ?>
