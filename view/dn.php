<div class="JudulHal">DATA NARAPIDANAN</div>
<div id="sia">


    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS NAPI</th>
            <th>TANGGAL LAHIR</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL MASUK</th>
            <th>JENIS HUKUMAN</th>
            <th>LAMA HUKUMAN</th>
            <th>TANGGAL HABIS HUKUMAN</th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT narapidana.idnapi,penghuni.nmpenghuni,tgllahir,tptlahir, narapidana.jenisnapi,tglmasuk, jenishukuman,lamahukuman,jenislama,tglpembebasan,status FROM penghuni,narapidana WHERE penghuni.idpenghuni= narapidana.idpenghuni  order BY nmpenghuni ASC");
        while ($a =mysqli_fetch_array($sql)) {
            if (isset($a['status']) && $a['status'] == 'Bebas') {
                echo "";
            } else {
                $aw=TanggalIndoAngko($a['tgllahir']);
                $aw1=TanggalIndoAngko($a['tglmasuk']);
                $aw2=TanggalIndoAngko($a['tglpembebasan']);

                echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>   
            <td>$a[jenisnapi]</td>
            <td>$aw</td>
            <td>$a[tptlahir]</td>
            <td>$aw1</td>
            <td>$a[jenishukuman]</td>
            <td>$a[lamahukuman]$a[jenislama]</td>    
            <td>$aw2</td>    
           <td><a href='?page=detailnapi&id=$a[idnapi]'>DETAIL</a>|<a href='?page=addpenambahandn&id=$a[idnapi]'>EDIT</a>|<a href='?page=hapusdn&id=$a[idnapi]'>HAPUS</a></td>     
            
        </tr>
            ";
                $no++;
            }
        }
            ?>

        </tbody>
    </table>
</div>

<a href="?page=addnapi">Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>

</div>