<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kriptografi - Chipperteks to Plainteks</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-4">Chipperteks to Plainteks</h3>
        <form class="row g-3" action="" method="post">
            <div class="col-auto">
                <input type="text" name="inputC" placeholder="Masukkan Teks!" class="form-control">
                <div class="form-text">Chipperteks diatas akan dideskripsi menjadi plainteks</div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Deskripsi</button>
            </div>
        </form>

        <?php
        function enkripsi2(){
            $inputC=$_POST["inputC"];
            
            $key = array(
                '!' => '1', '%' => '2', '-' => '3', '=' => '4', '@' => '5',
                '/' => '6', '+' => '7', ']' => '8', '_' => '9', '*' => '0',
                
                '~' => 'a', '$' => 'e', '^' => 'i', '#' => 'u', '&' => 'o',

                'D' => 'b', 'E' => 'c', 'F' => 'd', 'H' => 'f', 'OI' => 'g',
                'J' => 'h', 'L' => 'j', 'M' => 'k', 'N' => 'l', 'O' => 'm',
                'P' => 'n', 'R' => 'p', 'S' => 'q', 'T' => 'r', 'U' => 's',
                'V' => 't', 'X' => 'v', 'Y' => 'w', 'Z' => 'x', 'A' => 'y',
                'B' => 'z',
            );

            $enkripsiC  = str_replace(array_keys($key), $key, $inputC);

            echo "<br><h6>Kata yang Dienkripsi :</h6>",  $inputC;

            echo "<br>";
            echo "<h6>Hasil Deskripsi :</h6>", $enkripsiC;
        };
        ?>

        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                enkripsi2();
            }
        ?>
    </div>
</body>
</html>


