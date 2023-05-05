<?php
session_start();
require 'dbcon.php';

?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
        <?php include('message.php');?>

    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Edit
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php 
                        if(isset($_GET['id']))
                        {
                            $member_id=mysqli_real_escape_string($con,$_GET['id']);
                            $query="SELECT * FROM member_data WHERE id='$member_id'";
                            $query_run=mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run)>0){
                                $member_data=mysqli_fetch_array($query_run);
                                ?>
                                    <form action="code.php" method="POST">
                                        <input type="hidden" name="member_id" value="<?=$member_data['id'];?>">
                                        <div class="mb-3">
                                            <label for="">Member ID Name</label>
                                            <input type="text" name="idName" value="<?=$member_data['idName'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member ID Number</label>
                                            <input type="text" name="idNum" value="<?=$member_data['idNo'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Baptism Name</label>
                                            <input type="text" name="bName" value="<?=$member_data['baptismName'] ;?>"class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Email</label>
                                            <input type="text" name="email" value="<?=$member_data['email'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member phone</label>
                                            <input type="text" name="phone"value="<?=$member_data['phone'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Area of Residence</label>
                                            <input type="text" name="area"value="<?=$member_data['area'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Mutungati or Not</label>
                                            <input type="text" name="pastor"value="<?=$member_data['pastor'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Present</label>
                                            <input type="text" name="present"value="<?=$member_data['present'] ;?>" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" name="update_member" class="btn btn-primary">Update member Data</button>
                                        </div>
                                        
                                    </form>
                              <?php

                            }else{
                                echo "<h4>No such Id found</h4>";
                            }

                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>