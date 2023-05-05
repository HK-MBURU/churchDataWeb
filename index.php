<?php 
session_start();
require 'dbcon.php';
?>
<?php include('includes/header.php');?>
    <div class="container mt-4">
        <?php include('message.php');?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Details</h4>
                        <a href="student-create.php" class="btn btn-primary float-end">Add Member</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SNo</th>
                                    <th>ID Name</th>
                                    <th>Baptism Name</th>
                                    <th>Area </th>
                                    <th>Mutungati</th>
                                    <th>Phone Number</th>
                                    <th>ID Number</th>
                                    <th>Email</th>
                                    <th>Present</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                               $query="SELECT * FROM member_data";
                               $query_run=mysqli_query($con,$query);

                               if(mysqli_num_rows($query_run)>0){
                                foreach($query_run as $member_data){
                                    
                                    ?>
                                    <tr>
                                    <td><?=$member_data['id'];?></td>
                                    <td><?=$member_data['idName'];?></td>
                                    <td><?=$member_data['baptismName'];?></td>
                                    <td><?=$member_data['area'];?></td>
                                    <td><?=$member_data['pastor'];?></td>
                                    <td><?=$member_data['phone'];?></td>
                                    <td><?=$member_data['idNo'];?></td>
                                    <td><?=$member_data['email'];?></td>
                                    <td><?=$member_data['present'];?></td>
                                    <td>
                                        <a href="student-view.php?id=<?=$member_data['id'];?>" class="btn btn-info btn-sm">View</a>
                                        <a href="student-edit.php?id=<?=$member_data['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                        
                                        <form action="code.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete_member" value="<?=$member_data['id'];?>" class="btn btn-danger btn-sm">Delete</button>

                                        </form>
                                    </td>
                                    </tr>
                                    <?php

                                }
                               }
                               else
                               {
                                echo"<h5>No record found</h5>";
                               }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>

    
   

    

    