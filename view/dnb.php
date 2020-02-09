<div class="JudulHal">DAFTAR NARAPIDANAN BEBAS</div>
<div id="sia">



    <table class="table table-striped table-bordered data">
        <thead>
        <tr>
            <th>NO</th>
            <th>NAMA NARAPIDANA</th>
            <th>ALAMAT</th>
            <th>JENIS NARAPIDANA</th>
            <th>JENIS HUKUMAN</th>
            <th>TANGGAL MASUK</th>
            <th>LAMA HUKUMAN</th>
            <th>STATUS</th>
            <th>ACTION </th>



        </tr>
        </thead>
        <tbody>
        <?php
        $no =1;
        $sql =mysqli_query($conn,"SELECT * FROM narapidana, penghuni WHERE narapidana.idpenghuni=penghuni.idpenghuni AND narapidana.status='Bebas' order BY nmpenghuni ASC");
        while ($a =mysqli_fetch_array($sql)){
            $ASQ=TanggalIndoAngko($a['tglmasuk']);
            echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>
            <td>$a[alamat]</td>
            <td>$a[jenisnapi]</td>
            <td>$a[jenishukuman]</td>
            <td>$ASQ</td>
            <td>$a[lamahukuman]/$a[jenislama]</td>
            <td>$a[status]</td>
            <td><a href='?page=detailbebas&id=$a[idnapi]'>DETAIL</td>     
           
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





