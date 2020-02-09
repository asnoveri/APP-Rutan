<div class="JudulHal">DATA PENGUNJUNG</div>
<div id="sia">



        <table class="table table-striped table-bordered data">
            <thead>
            <tr>
                <th>NO</th>
                <th>NAMA PENGHUNI</th>
                <th>JENIS PENGHUNI</th>
                <th>NAMA PENGUNJUNG</th>
                <th>TANGGAL KUNJUNGAN</th>
                <th>BARANG BAWAAN</th>
                <th>ACTION </th>

            </tr>
            </thead>
            <tbody>
            <?php
            $no =1;
            $sql =mysqli_query($conn,"SELECT * FROM penghuni right JOIN kunjungan ON kunjungan.idpenghuni=penghuni.idpenghuni order BY nmpenghuni ASC ");
            while ($a =mysqli_fetch_array($sql)){
                $jnp = JenisPenghuni($a['idpenghuni']);
              $dp=TanggalIndoAngko($a['tglkunjungan']);
                echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>
            <td>$jnp</td>
            <td>$a[nmpengunjung]</td>
            <td>$dp</td>
            <td>$a[barangbawaan]</td>
            
            <td><a href='?page=editkunjungan&id=$a[idkunjungan]'>EDIT</a>|<a href='?page=hapuskunjungan&id=$a[idkunjungan]'>HAPUS</a></td>     
        </tr>
            ";$no++;


            }
            ?>


            </tbody>
        </table>
    </div>


    <a  href="?page=addkunjungan"> Tambah Data <img class="img2"    src="gambar/add-icon.png" alt="tambah"  width="30" height="25" ></a>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
</div>

</div>
