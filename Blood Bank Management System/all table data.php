<?php  
require_once 'model/model.php';

$data = getBloodInfo();

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


        <?php foreach ($data as $i => $da): ?>
            <tr>
                <td><?php echo $da['ID'] ?></td>
                <td><?php echo $da['BloodGroup'] ?></td>
                <td><?php echo $da['Price'] ?></td>
                <td><?php echo $da['Hname'] ?></td>
                <td><?php echo $da['Phone'] ?></td>
                <td><?php echo $da['Address'] ?></td>
            </tr>
        <?php endforeach; ?>
        

    </tbody>
    

</table>


</body>
</html>