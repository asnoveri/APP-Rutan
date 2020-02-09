<div class="JudulHal">DATA PELANGARAN</div>
<div id="sia">


    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA PENGHUNI</th>
            <th>JENIS PENGHUNI</th>
            <th>NAMA PENGADU</th>
            <th>PELANGGARAN</th>
            <th>JENIS HUKUMAN</th>
            <th>LAMA </th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT * FROM penghuni right JOIN pelanggaran ON pelanggaran.idpenghuni=penghuni.idpenghuni order BY nmpenghuni ASC");
        while ($a =mysqli_fetch_array($sql)){
            $jnp = JenisPenghuni($a['idpenghuni']);
            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>
            <td>$jnp</td>
            <td>$a[nmpengadu]</td>
            <td>$a[pelanggaran]</td>
            <td>$a[jnshukuman]</td>
            <td>$a[lmhukuman]/$a[jenislama]</td>
        
            <td><a href='?page=deataiplng&id=$a[idpelangr]'>DETAIL</a>|<a href='?page=editplng&id=$a[idpelangr]'>EDIT</a>|<a href='?page=hapusplng&id=$a[idpelangr]'>HAPUS</a></td>     
        </tr>
            ";$no++;


        }
        ?>


        </tbody>
    </table>
</div>

<a  href="?page=addpelngrn"> Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>

<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</div>