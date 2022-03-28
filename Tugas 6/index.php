<?php 
         $asal = [
         'Juanda (SBY)' => 75000,
         'Kuala Namu (MDN)' => 80000,
         'Abdul Rahman Saleh (MLG)' => 85000,
         'Ngurah rai (D)' => 90000
        ];
        $tujuan = [
         'Changi (JPN)' => 200000,
         'Hamad (QTR)' => 300000,
         'Munchen (JRM)' => 250000,
         'Kansai (JPN)' => 250000,
        ];

        function ambilPajakAsal($asal, $tujuan){
            $pajak = $asal[$tujuan];
            return $pajak;
        }

        function ambilPajakTujuan($tujuan, $asal){
            $pajak = $tujuan[$asal];
            return $pajak;
        }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- my css styles -->
    <link rel="stylesheet" href="style.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Penerbangan</title>
  </head>
  <body id="home">

  <!-- section for navbar -->
 <section>
     <nav class="navbar navbar-expand-lg navbar-light bg-danger text-white">
        <div class="container"> 
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
        </div>
     </nav>
 </section>

    
    <!-- form booking -->
    <section>
        <div class="container">   
              <div class="row align left-content-center">
        <img class="row align right-content-center d-block mx-auto mt-0 mb-lg-12" id="icon" src="assets/iata.png" alt="" width="auto" height="auto" style="min-width: 150px; max-width: 300px;">
            <div class="col-md-8">
                <h2 class="mt-3 text-center">Form Booking</h2>
                <form method="post">
                    <div class="form-group mb-3">
                        <label for="nama">Name</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tujuan">Origin</label>
                        <select class="form-select" id="asal" name="asal">
                            <?php foreach ($asal as $as => $pajak) : ?>
                            <option value="<?= $as ?>"><?= $as; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="tujuan">Departure</label>
                         <select class="form-select" id="tujuan" name="tujuan">
                             <?php foreach($tujuan as $tj => $pajak) :?>
                            <option value="<?= $tj; ?>"><?= $tj; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga">Ticket Price</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp.</span>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga Tiket">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </section>

    <?php 
    $all_data = [];

    if(isset($_POST['submit'])){
        $pajak = ambilPajakAsal($asal, $_POST['asal']) + ambilPajakTujuan($asal, $_POST['tujuan']);
        $total = $pajak + $_POST['harga'];

         $data_input = [
                "nama" => $_POST['nama'],
                "asal" => $_POST['asal'],
                "tujuan" => $_POST['tujuan'],
                "harga" => $_POST['harga'],
                "pajak" => $pajak,
                "total" => $total
      ];

      array_push($all_data, $data_input);
    }
    
    ?>

     <!-- tabel penerbangan -->
    <section id="data">
        <div class="container">
            <div class="row justify-content-center mt-5">
                 
                <div class="col-md-8">
                    <h2 class="text-center mb-3">Order Data</h2>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Origin</th>
                        <th scope="col">Departure</th>
                        <th scope="col">Ticket Price</th>
                        <th scope="col">Tax</th>
                        <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_data as $data => $value): ?>
                        <tr>
                            <td><?= $all_data[$data]['nama']  ?></td>
                            <td><?= $all_data[$data]['asal']  ?></td>
                            <td><?= $all_data[$data]['tujuan']  ?></td>
                            <td><?= $all_data[$data]['harga']  ?></td>
                            <td><?= $all_data[$data]['pajak']  ?></td>
                            <td><?= $all_data[$data]['total']  ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



    
  </body>
</html>