
<?php 

include "header.php";
?>
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Customer Contact Message List</h1>
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
                    $sql = "SELECT * FROM contact ORDER BY id DESC";

                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                    $serial = 1;
                    if (mysqli_num_rows($result) > 0) {
                   
                    ?>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Customer Message</th>
                                                <th>Customer Profile Link</th>
                                                <!-- <th>Edit</th> -->
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Customer Name</th>
                                                <th>Customer Email</th>
                                                <th>Customer Message</th>
                                                <th>Customer Profile Link</th>
                                                <!-- <th>Edit</th> -->
                                                <th>Delete</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                              <!-- <td class='id'><?php //echo $row['post_id']; ?></td> -->
                              <td class='id'><?php echo $serial++ ?></td>
                              <td><?php echo $row['cname']; ?></td>
                              <td><?php echo $row['cemail']; ?></td>
                              <td><?php echo $row['cmessage']; ?></td>
                              <td><?php echo $row['cwlink']; ?></td>
                            
                              <td hidden class='edit'><a title="Edit" href='update-experience.php?id=<?php echo $row['id'];?>'><i class='fa fa-edit'></i></a></td>

                              <td><button title="Delete" type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['id']; ?>"><i class='fas fa-trash text-danger'></i></button> </td>

                              <!-- modal -->

<div class="modal fade" id="exampleModalCenter<?php if(isset($row['id'])){echo $row['id'];}?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Are You Sure Permanently Deleted Customer Message?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <img hidden height="100px" width="100px" src="assets/img/services/" alt=""> -->
<?php if(isset($row['id'])){echo $row['cmessage'];}?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Delete</button> -->
        <a class="btn btn-danger" href='delete_customer_message.php?id=<?php if(isset($row['id'])){echo $row['id'];}?>'>Yes</a>
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