

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
         <?php

            $Fruits = [
                [
                      "Id" => 1,
                      "Nama" => 'Naga',
                      "Warna" => 'Merah',
                      "Stok"  => 100,
                      "Harga" => 'Rp66.000',
                      "Deskripsi" => 'Buah naga adalah buah dari beberapa jenis kaktus dari genus Hylocereus dan Selenicereus. Buah ini berasal dari Meksiko, Amerika Tengah dan Amerika Selatan namun sekarang juga dibudidayakan di negara-negara Asia seperti Taiwan, Vietnam, Filipina, Indonesia dan Malaysia',
                ],
                [
                    "Id" => 2,
                    "Nama" => 'Manggis',
                    "Warna" => 'Unggu',
                    "Stok"  => 40,
                    "Harga" => 'Rp11.000',
                    "Deskripsi" => 'Manggis adalah sejenis pohon hijau abadi dari daerah tropika yang diyakini berasal dari Semenanjung Malaya dan menyebar ke Kepulauan Nusantara. Tumbuh hingga mencapai 7 sampai 25 meter. Buahnya juga disebut manggis, berwarna merah keunguan ketika matang, meskipun ada pula varian yang kulitnya berwarna merah.',
                ],
                [
                    "Id" => 3,
                    "Nama" => 'Durian',
                    "Warna" => 'Kuning',
                    "Stok"  => 112,
                    "Harga" => 'Rp10.000',
                    "Deskripsi" => 'Durian adalah nama tumbuhan tropis yang berasal dari wilayah Asia Tenggara, sekaligus nama buahnya yang bisa dimakan. Nama ini diambil dari ciri khas kulit buahnya yang keras dan berlekuk-lekuk tajam sehingga menyerupai duri. Sebutan populernya adalah raja dari segala buah.',
                ],
                [
                  "Id" => 4,
                  "Nama" => 'Rambutan',
                  "Warna" => 'Merah',
                  "Stok" =>  50,
                  "Harga" => 'Rp20.000',
                  "Deskripsi" => 'Rambutan merupakan tanaman tropis yang termasuk ke dalam suku lerak-lerakan atau Sapindaceae, berasal dari daerah kepulauan di Indonesia. Kata "rambutan" berasal dari bahasa Indonesia yang berakar dari kata "rambut" karena bentuk buahnya yang mempunyai kulit menyerupai rambut.'
                ],
                [
                  "Id" => 5,
                  "Nama" => 'Dukuh',
                  "Warna" => 'Putih',
                  "Stok" => 'satu karung',
                  "Harga" => 'Rp21.000',
                  "Deskripsi" => 'Duku adalah jenis buah-buahan dari anggota suku Meliaceae. Tanaman yang berasal dari Asia Tenggara sebelah barat ini memiliki kemiripan dengan buah langsat, kokosan, pisitan, celoring dan lain-lain dengan berbagai variasinya. '
                ]
            ];
  
            foreach ($Fruits as $fruit) {
                echo "<tr>";
                   echo "<td>" . $fruit['Id'] . "</td>"; 
                   echo "<td>" . $fruit['Nama'] . "</td>"; 
                   echo "<td>" .  $fruit['Warna'] . "</td>"; 
                   echo  "<td>" . $fruit['Stok'] . "</td>"; 
                   echo  "<td>" . $fruit['Harga'] . "</td>"; 
                   echo "<td>" . $fruit['Deskripsi']. "</td>";
                   
                echo "</tr>";
            }   
            
        ?>  
      </tbody>
    </table>
  </div>
</body>
</html>