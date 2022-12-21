<center>

    <h2>Jumlah bilangan genap menggunakan perulangan</h2>



    <?php

    $total = 0;


    for ($i = 0; $i <= 6; $i++) {
        if ($i % 2 == 0) {
            $total += $i;
        }
    }

    echo "Akulturasi bilangan genap 0 sd 6 adalah $total"


    ?>




</center>