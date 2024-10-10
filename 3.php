<?php

// Loop dari 1-29
for ($i = 1; $i < 30; $i++) {
    // Memeriksa si $i faktor dari 120
    if (120 % $i == 0) {
        // ngeshow  hasil dari 120 dibagi dengan $i
        // round() duntuk membulatkan hasil bagi
        echo "120 : $i = " . round(120 / $i) . "<br>";
    }
}
?>
