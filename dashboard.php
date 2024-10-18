<?php
require_once "layout/User/header.php";
require_once "layout/User/nav.php";

$sql = "SELECT * FROM `client`";
$result = $conn->query($sql);

if(!$result){
    die("Invalid Query:" . $conn->error);
}
?>


<div class="container">
<h1 class="text-center pt-2"> USERS INFORMATIONS </h1>

<a href="create.php" class="btn btn-success">Create</a>
    <div class="table-responsive bg-warning shadow mt-5 ">
        <table
            class="table shadow table-warning table-center table-border ">
            <thead class=" table-warning" style="font-size:large;">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                while($row = $result->fetch_assoc()){
             echo "
            <tr>
                <td> $row[id] </td>
                <td>$row[name]</td>
                <td>$row[email]</td> 
                <td>$row[phone]</td>
                <td>$row[address]</td>
                " ;
            ?>
             <?php echo "
                <td>  
                <a href='edit.php?id=$row[id]' class='btn btn-primary'>Edit</a> 
                <a href='action/delete.php?id=$row[id]' class='btn btn-danger'>Delete</a> 
                <td>
                </tr>
                    ";
               
                }
             
                ?>
               
            </tbody>
        </table>
    </div>
</div>


<?php
require_once "layout/User/footer.php";

?>



