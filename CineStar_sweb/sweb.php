<?php
  include('db.php');
    //BaseDatos('localhost','root','','cinestar');
    BaseDatos('localhost','id19927311_hexenbiest','D0ixR?5LD*U=_s4H','id19927311_cinestar');
    //BaseDatos("mysql8001.site4now.net","a8d434_cinesta","cinestar1234","db_a8d434_cinesta");

  if ( isset( $_GET["id"] ) ) $id = $_GET["id"];
  if ( isset( $_GET["idd"] ) ) $idd = $_GET["idd"];
  if ( isset( $_GET["idx"] ) ) $idx = $_GET["idx"];
  
  if ( $id == 'cines' ) getCines();
  else if ( $id == 'peliculas' ) getPeliculas();

  function getCines () {
    global $idd;
    global $idx;
    global $_SQL;

    if ( $idx ) 
      $_SQL = $idx == "peliculas" ? "call sp_getCinePeliculas('$idd')" : "call sp_getCineTarifas('$idd')";
    else $_SQL = $idd ? "call sp_getCine('$idd')" : "call sp_getCines()";

    getRegistros();
  }
    