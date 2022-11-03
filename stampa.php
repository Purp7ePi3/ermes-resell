<?php
require_once("config.php");

$sql = "select * from snkrs "; //order by id()
$result = $cn->query($sql);

$box_prodotti = '<div class="prodotti_card">
<a href="paginaprodotto.php?id=[ID_PRODOTTO]"><img src="immagini/[IMMAGINEPRODOTTO]" alt="[DESCRIZIONEPRODOTTO]"></a>
</div>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $box_print = str_replace("[IMMAGINEPRODOTTO]", $row['image_name'] . ".png", $box_prodotti);
        $box_print = str_replace("[ID_PRODOTTO]", $row['id'], $box_print);
        echo  $box_print;
    }
} else {
    echo "0 records";
}
$cn->close();
