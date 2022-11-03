<?php
require_once("config.php");
$sql = "select * from snkrs order by rand() limit 4";
$result = $cn->query($sql);
$prodotti_1 = '<div class="services_card">
                    <a href="paginaprodotto.php?id=[ID_PRODOTTO]"><img src="immagini/[IMMAGINEPRODOTTO]" alt="[DESCRIZIONEPRODOTTO]"></a>
                </div>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $prodotti_print = str_replace("[IMMAGINEPRODOTTO]", $row['image_name'] . ".png", $prodotti_1);
        $prodotti_print = str_replace("[ID_PRODOTTO]", $row['id'], $prodotti_print);
        echo $prodotti_print;
    }
}
