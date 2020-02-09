<div class="JudulHal">BARANG BAWAAN PENGHUNI</div>
<div id="sia">


    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA PEMILIK</th>
            <th>NAMA BARANG</th>
            <th>JENIS PENGHUNI</th>
            <th>TANGGAL MASUK BARANG</th>
            <th>JUMLAH</th>
            <th>TANGGAL SURAT DITERIMA</th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT * FROM penghuni right JOIN barangpenghuni ON barangpenghuni.idpenghuni=penghuni.idpenghuni  order BY nmpenghuni  ASC");
        while ($a =mysqli_fetch_array($sql)){
            $jnp = JenisPenghuni($a['idpenghuni']);
            $aw=TanggalIndoAngko($a['tglmaskbarang']);
            $aw1=TanggalIndoAngko($a['tglsrtditerima']);
            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni] $a[idpenghuni]</td>
            <td>$a[nmbarang]</td>
            <td>$jnp</td>
            <td>$aw</td>
            <td>$a[jumlah]</td>
            <td>$aw1</td>
            <td><a href='?page=editbarang&id=$a[idsimpan]'>EDIT</a>|<a href='?page=hapusbarang&id=$a[idsimpan]'>HAPUS</a></td>     
        </tr>
            ";$no++;
        }
        ?>


        </tbody>
    </table>
</div>

<a  href="?page=addbrngbwn"> Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>

<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</div>