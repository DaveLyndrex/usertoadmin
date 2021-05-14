<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usertoadmin";

$conn = new mysqli($servername, $username, $password, $dbname);
   


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Users
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <?php
               

                //write the query to get data from users table
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                ?>
                


                <table style="font-size:13px;" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Account Created</th>
                            <th>Decides</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            //output data of each row
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['firstname']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['lastname']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['password']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['Account_Created_Date']; ?>
                                    </td>


                                    <td><a class="btn btn-danger btn-sm" name="delete" id="delete" href="deleteuser.php?user=<?php echo $row['id']; ?>">Add as Admin</a></td>


                                    <td>
                                        <?php echo $row['status'];    ?>
                                    </td>
                                </tr>


                        <?php        }
                        }
                        ?>

                    </tbody>
                </table>
        </div>
    </div>
</div>

