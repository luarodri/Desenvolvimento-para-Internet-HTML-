<style>

    table {
        background-color: #15d649;
    }

</style>

<table border="2" width="100%">
<?php
   
    $row = 1;

    $f = fopen("violencia-domestica-df.csv", "r");

    if ($f !== FALSE) {

        $data = fgetcsv($f, 1000, ",");

        while ($data !== FALSE) {
            echo "<tr>";
            foreach($data as $valor) {
                if($row == 1) {
                    echo "<th>$valor</th>";
                } else {
                    echo "<td>$valor</td>";
                }
            }
            echo "</tr>";
            $data = fgetcsv($f, 1000, ",");  
            $row++; 
        }
   
        fclose($f);
    }

?>
</table>