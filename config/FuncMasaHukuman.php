<?php
function LamaMasaHukuman($idnapi){
    include "conn.php";
    $ttrms = 0;
    $crem = mysqli_query($conn, "select * from remisi, narapidana WHERE narapidana.idnapi=remisi.idnapi and remisi.idnapi='$idnapi'");
    while ($dcrem = mysqli_fetch_array($crem)){
        $ttrms = $ttrms+$dcrem['jmlremisi'];
    }

    $sql= mysqli_query($conn, "select * from narapidana where narapidana.idnapi ='$idnapi' " );
    $dsql = mysqli_fetch_array($sql);



    $tglkeluar = $dsql['tglpembebasan'];


    $date1 = date_create("$dsql[tglmasuk]");
    $date2 = date_create("$tglkeluar");
    $interval = date_diff($date1, $date2);
    $tahun = $interval->y;
    $bln = $interval->m;
    $hari = $interval->d;

    //masatahananygtelahdilewati
    $tglkini = date("Y-m-d");
    $tglmasuak = date_create("$dsql[tglmasuk]");
    $tglas = date_create("$tglkini");
    $interval1 = date_diff($tglmasuak, $tglas);
    $tahunsdh = $interval1->y;
    $blnsdh = $interval1->m;
    $harisdh = $interval1->d;

    //Sisamasatahanan

    if ($ttrms>0){
        $tglkeluarsetelahremisi = date('Y-m-d', strtotime('-'.$ttrms.' days', strtotime($tglkeluar)));

    }else{
        $tglkeluarsetelahremisi = $tglkeluar;
    }

    $tgllm =date_create("$tglkini");
    $tglsdh =date_create("$tglkeluarsetelahremisi");
    $interval2 = date_diff($tgllm,$tglsdh );
    $tahunsisa = $interval2->y;
    $blnsisa = $interval2->m;
    $harisisa = $interval2->d;

    $period = array($tahun,$bln,$hari,$tahunsdh,$blnsdh,$harisdh,$tahunsisa,$blnsisa,$harisisa);
    return $period;
}
function sisamasahukuman($idnapi){

}
function JmlNapi($jenisnapi){
    include "conn.php";
    $jmllaki='jk'=='Laki-Laki';
    $jmlperempuan='jk'=='Perempuan';
    $fzeropadded = sprintf("%02d", $_POST['bln']);
    $bln = $_POST['thn'].'-'.$fzeropadded;
    $sql = mysqli_query($conn, "SELECT penghuni.jk, COUNT(narapidana.idnapi) AS jml FROM penghuni, narapidana WHERE narapidana.jenisnapi='$jenisnapi' and penghuni.idpenghuni=narapidana.idpenghuni AND narapidana.status='' AND substr(tglmasuk,1,7)='$bln' GROUP BY penghuni.jk");
    while ($dsql = mysqli_fetch_array($sql)){
        if ($dsql['jk']=='Perempuan'){
            $jmlperempuan = $dsql['jml'];
        }else{
            $jmllaki=$dsql['jml'];
        }
    }
    $tt = $jmlperempuan+$jmllaki;
    $JmlNapi = array($jmlperempuan,$jmllaki, $tt);
    return $JmlNapi;
}

