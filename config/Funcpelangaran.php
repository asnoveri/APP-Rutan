<?php
function Lamapel($idpelangr){
    include "conn.php";
    $sql= mysqli_query($conn, "select * from pelanggaran where idpelangr ='$idpelangr' " );
    $dsql = mysqli_fetch_array($sql);

    $tglkeluar = $dsql['tglakhir'];

    $date1 = date_create("$dsql[tglmulai]");
    $date2 = date_create("$tglkeluar");
    $interval = date_diff($date1, $date2);
    $tahun = $interval->y;
    $bln = $interval->m;
    $hari = $interval->d;

    //masatahananygtelahdilewati
    $tglkini = date("Y-m-d");
    $tglmasuak = date_create("$dsql[tglmulai]");
    $tglas = date_create("$tglkini");
    $interval1 = date_diff($tglmasuak, $tglas);
    $tahunsdh = $interval1->y;
    $blnsdh = $interval1->m;
    $harisdh = $interval1->d;

    //Sisamasatahanan
    $tgllm =date_create("$tglkini");
    $tglsdh =date_create("$tglkeluar");
    $interval2 = date_diff($tgllm,$tglsdh );
    $tahunsisa = $interval2->y;
    $blnsisa = $interval2->m;
    $harisisa = $interval2->d;

    $period = array($tahun,$bln,$hari,$tahunsdh,$blnsdh,$harisdh,$tahunsisa,$blnsisa,$harisisa);
    return $period;
}

function sisapel($idpelangr){

}