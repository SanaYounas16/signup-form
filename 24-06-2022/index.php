<?php include_once 'header.php';
include_once 'connection.php';
$Select = "SELECT * FROM signup";
$Query = mysqli_query($conn, $Select);

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-3">
            <center>
                <h3>Form</h3>
            </center>
            <form action="Function.php" method="POST">
                <label for="" class="w-100">
                    Enter Your Name
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Email
                    <input type="email" class="form-control" name="useremail" placeholder="Enter Your Name">
                </label>
                <label for="" class="w-100">
                    Enter Your Password
                    <input type="password" class="form-control" name="userpassword" placeholder="Enter Your Name">
                </label>
                <input type="submit" name="formsubmit" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark table-striped mt-2">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($Query)) {


                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id'] ?></th>
                            <td><?php echo $row['user_name'] ?></td>
                            <td><?php echo $row['user_email'] ?></td>
                            <td>
                                <a href="edit.php?edit_id=<?php echo $row['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?del_id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php include_once 'footer.php'; ?>