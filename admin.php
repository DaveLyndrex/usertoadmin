<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usertoadmin";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<body>
    
        <nav class="navbar navbar-dark bg-dark">
            <a href="" class="navbar navbar-brand">ADMIN</a>
        </nav>
    
<br>
    <div class="container">
        <table class="table table-responsive">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Account Created</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
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
                            <td>
                                <?php echo $row['status']; ?>
                            </td>
                            <td>
                                <a class="btn btn-danger btn-sm" name="btn" href="deleteadmin.php?admin=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>



                <?php
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>
</head>

</html>