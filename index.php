<?php

include('layout/header.php');

?>

<div class="container ">
    <div class="card mt-4">
        <h5 class="card-header">Create New Todo</h5>
        <div class="card-body">
            <form method="POST" action="actions/store.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Todo</label>
                    <input type="text" class="form-control" name="todo">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea class="form-control" name="description" value="<?php echo $description; ?>"></textarea>
                </div>
                <button type="submit" name="create" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>


    <div class="card mt-4">
        <h5 class="card-header">Todo List</h5>
        <div class="card-body">
            <table class="table  table-hover table-striped">
                <thead>
                    <tr>
                        <th class="col-3">#</th>
                        <th class="col-3">Todo</th>
                        <th class="col-3">Description</th>
                        <th class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>



                    <?php

                    include "connection/connection.php";

                    $connection = OpenConnection();

                    $records = $connection->query("SELECT * FROM crud");
                    while ($data = mysqli_fetch_array($records)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $data['id']; ?></th>
                            <td><?php echo $data['todo']; ?></td>
                            <td><?php echo $data['description']; ?></td>
                            <td>
                                <div>
                                    <a href="./actions/update.php?update=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="./actions/delete.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a>
                                </div>

                            </td>
                        </tr>
                    <?php
                    }
                    $connection->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php
include('layout/footer.php')
?>