
<div class="JudulHal">DATA REMISI</div>
<div id="sia">

    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS NAPI</th>
            <th>TANGGAL MASUK</th>
            <th>TANGGAL HABIS HUKUMAN</th>
            <th>LAMA HUKUMAN</th>
            <th>TANGGAL PEMBERIAN REMISI</th>
            <th>ISI REMISI</th>
            <th>JUMLAH REMISI</th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT penghuni.nmpenghuni,narapidana.jenisnapi,tglmasuk,tglpembebasan,lamahukuman,jenislama,remisi.idremisi,tglremisi,isiremisi,jmlremisi FROM penghuni,narapidana,remisi WHERE penghuni.idpenghuni=narapidana.idpenghuni AND narapidana.idnapi=remisi.idnapi order BY nmpenghuni ASC");
        while ($a =mysqli_fetch_array($sql)) {
            $aw=TanggalIndoAngko($a['tglmasuk']);
            $aw1=TanggalIndoAngko($a['tglpembebasan']);
            $aw2=TanggalIndoAngko($a['tglremisi']);
            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>   
            <td>$a[jenisnapi]</td>
            <td>$aw</td>
            <td>$aw1</td>
           <td>$a[lamahukuman]$a[jenislama]</td>   
            <td>$aw2</td>
            <td>$a[isiremisi]</td>    
            <td>$a[jmlremisi]</td>    
           <td><a href='?page=editremsi&id=$a[idremisi]'>EDIT</a>|<a href='?page=hapusremisi&id=$a[idremisi]'>HAPUS</a></td>     
      
        </tr>
            ";
            $no++;
        }
        ?>

        </tbody>
    </table>
</div>


<a  href="?page=addndr"> Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>

<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</div>


