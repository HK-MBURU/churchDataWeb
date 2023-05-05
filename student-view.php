<?php

require 'dbcon.php';

?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
     
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member Details
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
                                    
                                        
                                        <div class="mb-3">
                                            <label for="">Member ID Name</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['idNo'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member ID Number</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['idNo'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Baptism Name</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['baptismName'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Email</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['email'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member phone</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['phone'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Member Area of Residence</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['area'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Mutungati or Not</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['pastor'] ;?>
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            <label for="">Present</label>
                                            
                                            <p class="form-control">
                                                <?=$member_data['present'] ;?>
                                            </p>
                                        </div>
                                    
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