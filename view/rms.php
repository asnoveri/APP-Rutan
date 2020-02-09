
<div class="JudulHal">DAFTAR NAPI YANG MENDAPATAKAN REMISI</div>

<div id="sia">
    <div class="content">
        <div class="itu">
              <form action=""  method="POST">

                  <div class="form-group col-lg-3 ">
                      <select name="jnsremisi" id="" class="form-control" required>
                          <option value="">Pilih Remsi</option>
                          <option value="Umum">Umum</option>
                          <option value="Kusus">Kusus</option>
                      </select>
                  </div>
                  <div class="form-group col-lg-3">
                      <input  type="submit" name="cari" class="btn btn-primary" value="CARI">
                  </div>
              </form>
        </div>

        <?php
        if (isset($_POST['jnsremisi'])){
            $cari = 'and jnsremisi = \''.$_POST['jnsremisi'].'\'';
        }else{
            $cari = "";
        }

        ?>

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
            <th>JENIS REMISI</th>
            <th>ISI REMISI</th>
            <th>JUMLAH REMISI</th>
            <th>ACTION </th>

        </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            $sql = mysqli_query($conn, "SELECT penghuni.nmpenghuni,narapidana.idnapi,jenisnapi,tglmasuk,tglpembebasan,lamahukuman,jenislama,remisi.idremisi,tglremisi,isiremisi,jmlremisi,jnsremisi FROM penghuni,narapidana,remisi WHERE penghuni.idpenghuni=narapidana.idpenghuni AND narapidana.idnapi=remisi.idnapi $cari order BY nmpenghuni ASC");
            while ($a = mysqli_fetch_array($sql)) {
                $aw=TanggalIndoAngko($a['tglmasuk']);
                $aw1=TanggalIndoAngko($a['tglremisi']);
                $aw2=TanggalIndoAngko($a['tglpembebasan']);
                echo "
            <tr>
            <td>$no</td>
            <td>$a[nmpenghuni]</td>   
            <td>$a[jenisnapi]</td>
            <td>$aw</td>
            <td>$aw2</td>
           <td>$a[lamahukuman]$a[jenislama]</td>   
            <td>$aw1</td>
            <td>$a[jnsremisi]</td>    
            <td>$a[isiremisi]</td>    
            <td>$a[jmlremisi]</td>    
           <td><a href='?page=dtlrms&id=$a[idnapi]'>DETAIL</a></td>     
      
        </tr>
            ";
                $no++;

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


