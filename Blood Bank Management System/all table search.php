<?php  
require_once '../model/model.php';

$data = getBloodInfo();
$q = $_REQUEST["q"];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Blood Group</th>
            <th>Price</th>
            <th>Hospital Name</th>
            <th>Hospital Phone</th>
            <th>Hospital Addess</th>
        </tr>
    </thead>
    <tbody>


        <?php foreach ($data as $i => $da): 
                if ($q == $da['BloodGroup']) {
                    echo "<tr>";
                    echo "<td>" . $da['ID'] . "</td>";
                    echo "<td>" . $da['BloodGroup'] . "</td>";
                    echo "<td>" . $da['Price'] . "</td>";
                    echo "<td>" . $da['Hname'] . "</td>";
                    echo "<td>" . $da['Phone'] . "</td>";
                    echo "<td>" . $da['Address'] . "</td>";
                    echo "</tr>";
                }

                endforeach; ?>
        

    </tbody>
    

</table>


</body>
</html>