<?php

$aantal = 10;

if (is_numeric($aantal)) {
    echo "Correct ingevoerd.";
} else {
    echo "Voer een geldig getal in.";
}

echo "<br><br>";

$aantal = "tien";

if (is_numeric($aantal)) {
    echo "Correct ingevoerd.";
} else {
    echo "Voer een geldig getal in.";
}
