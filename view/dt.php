<div class="JudulHal">DATA TAHANAN</div>
<div id="sia">


    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>JENIS TAHANAN</th>
            <th>TANGGAL LAHIR</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL SURAT PENAHANAN</th>
            <th>PASAL</th>
            <th>TANGGAL MASUK</th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT tahanan.idtahanan,penghuni.nmpenghuni,tgllahir,tptlahir, tahanan.jnstahanan,tglsrtpenahanan, pasal,tglmasuk,status FROM penghuni,tahanan WHERE penghuni.idpenghuni= tahanan.idpenghuni  order BY nmpenghuni ASC ");
        while ($a =mysqli_fetch_array($sql))
        {
        if (isset($a['status']) && $a['status'] == 'Bebas') {
            echo "";
        }else {
            $tgl=TanggalIndoAngko($a['tgllahir']);
            $tgl1=TanggalIndoAngko($a['tglsrtpenahanan']);
            $tgl2=TanggalIndoAngko($a['tglmasuk']);

            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>
            <td>$a[jnstahanan]</td>
            <td>$tgl</td>
            <td>$a[tptlahir]</td>
            <td>$tgl1</td>
            <td>$a[pasal]</td>
            <td>$tgl2</td>
            <td><a href='?page=detailtahanan&id=$a[idtahanan]'>DETAIL</a>|<a href='?page=editatahanan&id=$a[idtahanan]'>EDIT</a>|<a href='?page=hapusdt&id=$a[idtahanan]'>HAPUS</a></td>     
        </tr>
            ";
            $no++;
        }

        }
        ?>


        </tbody>
    </table>
</div>


<a  href="?page=addtahanan"> Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>
<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</div>