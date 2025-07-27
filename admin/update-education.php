<?php
include "header.php"; 

if (isset($_GET['id'])) {
    $edu_id = $_GET['id'];
    if (isset($_POST['submit'])) {
        include 'config.php';
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $session = mysqli_real_escape_string($conn, $_POST['session']);
        $cname = mysqli_real_escape_string($conn, $_POST['cname']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);
        $iname = mysqli_real_escape_string($conn, $_POST['iname']);
        $result = mysqli_real_escape_string($conn, $_POST['result']);
        $board = mysqli_real_escape_string($conn, $_POST['board']);
        $pyear = mysqli_real_escape_string($conn, $_POST['pyear']);
        $duration = mysqli_real_escape_string($conn, $_POST['duration']);

        $sql = "UPDATE education set title= '$title', session= '$session', cname= '$cname', status= '$status', iname= '$iname', result= '$result', board= '$board', pyear= '$pyear', duration= '$duration' where id = $edu_id";

        if (mysqli_query($conn, $sql)) {
            $msg = '<div class=" text-center alert alert-success">Successfully Updated Your Education</div>';
            // header("location: {$hostname}/admin/personaldetailslist.php");
        } else {
            $msg = '<div class=" text-center alert alert-danger">Not Updated Your Education</div>';
        }
    }
}
?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Your working</h3></div>
                <div class="card-body">
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-row">

                        <?php
                            $edu_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM education where id = {$edu_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Title</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter title" name="title" value="<?php echo $row['title']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Session</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Session" name="session" value="<?php echo $row['session']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Course name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Course name" name="cname" value="<?php echo $row['cname']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Status</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Status" name="status" value="<?php echo $row['status']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Institution Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Institution Name" name="iname" value="<?php echo $row['iname']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Result</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter result" name="result" value="<?php echo $row['result']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Board</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter board" name="board" value="<?php echo $row['board']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Passing year</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter passing year" name="pyear" value="<?php echo $row['pyear']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Duration</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter duration" name="duration" value="<?php echo $row['duration']; ?>"/>
                                </div>
                            </div>

                             <?php  }} ?>
                        </div>

                        <div class="form-group mt-4 mb-0"><input type="Submit" class="btn btn-primary btn-block" name="submit"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>


<?php include "footer.php"; ?>