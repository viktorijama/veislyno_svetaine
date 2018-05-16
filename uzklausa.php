<?php

 define('DB_VARDAS', 'veislyno_web');
 define('MYSQL_VARTOTOJO_VARDAS', 'root');
 define('MYSQL_SLAPTAZODIS', 'root');
 define('DB_HOST', 'localhost');


 $connection = mysqli_connect( DB_HOST, MYSQL_VARTOTOJO_VARDAS, MYSQL_SLAPTAZODIS, DB_VARDAS );

      if (   $connection  ) {
        } else {
            die( "ERRROR: neapvyko prisijungti" .  mysqli_connect_error()  );
      }

    function getDBPrisiungimas() {
        global $connection;
        return $connection;
    }

    function createUzklausa( $vardas, $telefonas, $emeilas, $uzklausa ){
        $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
        $telefonas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $telefonas );
        $emeilas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $emeilas );
        $uzklausa_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $uzklausa );

        // $mano_sql_tekstas = "INSERT INTO uzklausos
        //                         VALUES('', '$vardas_apdorotas', '$telefonas_apdorotas',
        //                                 '$emeilas_apdorotas', '$uzklausa_apdorotas' );
        //                   ";

        $mano_sql_tekstas = "INSERT INTO uzklausos ( id, vardas, telefonas, emailas, zinute)
            VALUES ('','$vardas_apdorotas', '$telefonas_apdorotas', '$emeilas_apdorotas', '$uzklausa_apdorotas' )";

        $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

          if ( !$arPavyko ) {
               // echo "EROROR: nepavyko issiusti uzklausos i DB." . mysqli_error( getDBPrisiungimas() );
             } else {
              // echo "pavyko sukurti";
            }
          }

          function getSuniukas( $nr = 0) {
              $mano_sql_tekstas = "SELECT * FROM suniukai WHERE id='$nr'; ";
              $rezultatai   = mysqli_query( getDBPrisiungimas(),    $mano_sql_tekstas );
              if ( $rezultatai ) {
                  $rezultatai_masyve =  mysqli_fetch_assoc( $rezultatai );
                  return $rezultatai_masyve;
              } else {
                  echo "Suniukas nr: $nr nerastas!!! <br>";
              }
          }

          function updateSuniukas( $id, $nr, $suniuko_vardas, $vardas, $telefonas, $rezervuotas) {
              $nr_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $nr );
              $suniuko_vardas_apdorotas = mysqli_real_escape_string (getDBPrisiungimas(), $suniuko_vardas );
              $vardas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $vardas );
              $telefonas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $telefonas );
              $rezervuotas_apdorotas =  mysqli_real_escape_string (getDBPrisiungimas(), $rezervuotas );

              $mano_sql_tekstas = " UPDATE suniukai SET
                                      nr = '$nr_apdorotas',
                                      rezervuota = '$rezervuotas_apdorotas',
                                      suniuko_vardas = '$suniuko_vardas_apdorotas',
                                      telefonas = '$telefonas_apdorotas',
                                      vardas = '$vardas_apdorotas'
                                      WHERE id='$id'
                                    ";
              $arPavyko = mysqli_query(   getDBPrisiungimas() , $mano_sql_tekstas);

              if ( !$arPavyko ) {
                   // '(! )' JEIGU skliaustuose FALSE?
                   echo "EROROR: nepavyko rezervuoti." . mysqli_error( getDBPrisiungimas() );
              } else {
                  // echo "pavyko sukurti";
              }
          }

          function getVisusSuniukus() {
              $mano_sql_tekstas = "SELECT * FROM suniukai";
              $rezultatai   = mysqli_query( getDBPrisiungimas(),    $mano_sql_tekstas );
              if ( $rezultatai ) {
                while($row = mysqli_fetch_assoc( $rezultatai )) {
                    $data[]=$row;
                }
                return $data;
              } else {
                echo "Suniukai nerasti!!! <br>";
              }
          }

?>
