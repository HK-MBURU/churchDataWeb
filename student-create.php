<?php
session_start();

?>
<?php include('includes/header.php');?>
    <div class="container mt-5">
        <?php include('message.php');?>

    
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Member add
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label for="">Member ID Name</label>
                                <input type="text" name="idName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Member ID Number</label>
                                <input type="text" name="idNum" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Member Baptism Name</label>
                                <input type="text" name="bName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Member Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Member phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Member Area of Residence</label>
                                <input type="text" name="area" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Mutungati or Not</label>
                                <select name="pastor" id="pastor" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no" selected>No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="present">Present</label>
                                <select name="present" id="present" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_member" class="btn btn-primary">Save a Member</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php');?>
