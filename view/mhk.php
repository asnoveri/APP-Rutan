<div class="JudulHal">DAFTAR TAHANAN BEBAS</div>
<div id="sia">



    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA TAHANAN</th>
            <th>ALAMAT</th>
            <th>JENIS TAHANAN</th>
            <th>PASAL</th>
            <th>TANGGAL MUlAI PENAHANAN</th>
            <th>STATUS</th>
            <th>ACTION </th>



        </tr>
        </thead>
        <tbody>

        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT * FROM tahanan, penghuni WHERE tahanan.idpenghuni=penghuni.idpenghuni AND tahanan.status='Bebas' order BY nmpenghuni ASC");
        while ($a =mysqli_fetch_array($sql)){

            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>
            <td>$a[alamat]</td>
            <td>$a[jnstahanan]</td>
            <td>$a[pasal]</td>
            <td>$a[tglmasuk]</td>
            <td>$a[status]</td>
            <td><a href='?page=detaitaananbebas&id=$a[idtahanan]'>DETAIL</td>     
           
        </tr>
            ";$no++;


        }
        ?>


        </tbody>
    </table>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $('.data').DataTable();
    });
</script>
</div>

</div>





