
<?php 

include "header.php";
?>
                <main>
                    <div class="container-fluid">
                      
                        <h2 class="mt-4">Profile Setting</h2>
                        <!-- <div class=" my-4 text-center"><i class="fas fa-user display-1"></i></div> -->
                        <div class="justify-content-center d-flex my-3"><img class="card-img-top" style="height:180px ; width: 180px"  src="assets/img/normal/permission.png" alt="" srcset=""></div>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol> -->
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                                
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <!-- <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example

                            </div> -->
                            <div class="card-body">
                              <?php if(isset($msg)) echo $msg ?>
                                <div class="table-responsive">
                    <?php

                    include 'config.php';
                    $sql = "SELECT * FROM admin_login ORDER BY id DESC";

                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                    $serial = 1;
                    if (mysqli_num_rows($result) > 0) {
                   
                    ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <!-- <th>Edit</th> -->
                                                <!-- <th>Delete</th> -->
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>

                                                <th><a title="Change Name" href='admin_name_change.php?id=<?php echo $row['id'];?>'><i class='fas fa-edit'></i> Change Name</a></th>

                                                <th><a title=" Change Email" href='admin_email_change.php?id=<?php echo $row['id'];?>'><i class='far fa-envelope-open'></i> Change Email</a></th>

                                                <th><a title="Change Password" href='admin_password_change.php?id=<?php echo $row['id'];?>'><i class='fas fa-lock'></i> Change Password</a></th>

                                                
                                                

                                                <!-- <th>Edit</th> -->
                                                <!-- <th>Delete</th> -->
                                            </tr>
                                        </tfoot>
                                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                              <!-- <td class='id'><?php //echo $row['post_id']; ?></td> -->
                              <td class='id'><?php echo $serial++ ?></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['password']; ?></td>
                            
                              <td hidden class='edit'><a title="Edit" href='update-experience.php?id=<?php echo $row['id'];?>'><i class='fa fa-edit'></i></a></td>

                              <!-- <td><button title="Delete" type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter<?php //echo $row['id']; ?>"><i class='fas fa-trash text-danger'></i></button> </td> -->

                              <!-- modal -->

<div class="modal fade" id="exampleModalCenter<?php if(isset($row['id'])){echo $row['id'];}?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are You Sure Permanently Deleted This User?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <img hidden height="100px" width="100px" src="assets/img/services/" alt=""> -->
<?php if(isset($row['email']) == "emraning@gmail.com"){echo $row['id'];} ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Delete</button> -->
        <a class="btn btn-danger" href='delete_customer_message.php?id=<?php 
        if(isset($row['email']) == "emraning@gmail.com"){echo $row['id'];}?>'>Yes</a>
      </div>
    </div>
  </div>
</div>  
                              
                <!-- modal -->

                          </tr>
                          <?php 
                          } ?>
                                        </tbody>
                                    </table>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>



<?php 

include "footer.php";
?>