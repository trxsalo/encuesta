<?php include("../html/Header.php");?>


<div class="form-grup">

<table class="table table-bordered ">
<thead>
    <tr >
        <th>
            TIPO PROFESION
        </th>

        <th>
            ROL
        </th>

        <th>
            Conoce PHP
        </th>

        <th>
            DOMINIO DEL PHP
        </th>
        

    </tr>
</tr>
</thead>

<tbody>

<?php
include("../src/conn.php");
$query = "SELECT * FROM  registro";
$result_tasks = mysqli_query($conn, $query);    
while($row = mysqli_fetch_assoc($result_tasks)) { ?>
    
    <tr>
        <td><?php echo $row['profesion']; ?></td>
        <td><?php echo $row['rol']; ?></td>
        <td><?php echo $row['conocePHP']; ?></td>
        <td><?php echo $row['phpConocimiento']; ?></td>

    </tr>
<?php } ?>

</tbody>

</table>









<?php include("../html/Footer.php");?>