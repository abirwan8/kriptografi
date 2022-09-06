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
                '1' => '!', '2' => '%', '3' => '-', '4' => '=', '5' => '@',
                
                '6' => '/', '7' => '+', '8' => ']', '9' => '_', '0' => '*',
                    
                'a' => '~', 'e' => '$', 'i' => '^', 'u' => '#', 'o' => '&',

                'b' => 'D', 'c' => 'E', 'd' => 'F', 'f' => 'H', 'g' => 'I',
                'h' => 'J', 'j' => 'L', 'k' => 'M', 'l' => 'N', 'm' => 'O',
                'n' => 'P', 'p' => 'R', 'q' => 'S', 'r' => 'T', 's' => 'U',
                't' => 'V', 'v' => 'X', 'w' => 'Y', 'x' => 'Z', 'y' => 'A', 'z' => 'B',
            );

            $deskripsi  = str_replace($key, array_keys($key), $inputC);

            echo "<br><h6>Kata yang Dienkripsi :</h6>",  $inputC;

            echo "<br>";
            echo "<h6>Hasil Deskripsi :</h6>", $deskripsi;
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


