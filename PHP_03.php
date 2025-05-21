<title>Array</title>
<?php
    $array = array(790, 483, 281, 224, 483, 60, 698, 483, 790, 168);

    function angka($data) {
        $i = 0;

        while (isset($data[$i])) {
            $numb = $i + 1;
            echo "Angka $numb : " . $data[$i] . "<br>";
            $i++;
        }
    }

    angka($array)
?>
