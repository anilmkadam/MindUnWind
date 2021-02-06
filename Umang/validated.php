<?php 
require_once('connect.php');
?>
<?php include "header1.php"; ?>
<?php //include "menu/gmenu3.php"; ?>
<style>.navigation_item{
		padding: 0px 5px;
		background: #fff;
		text-decoration: none;
		
		color: #e3e3e3 !important;
		font-size: 12px;
		border: 2px solid #e3e3e3;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	.navigation_item:hover,.selected_navigation_item{
		border: 2px solid #2A6496;
		border-radius: 2px;
		color: #2A6496 !important;
		background: #fff;
	}
	</style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Project Approval Portal</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Moderator Control panel
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
 $result=mysqli_fetch_array(mysqli_query($con,"select * from moderator_account"));
$institute_id=$result['institute_code'];

$sql = "select * from umang_submission where status='no' AND institute_id='$institute_id' ORDER BY id DESC LIMIT $start_from, 20";
$rs_result = mysqli_query ($con,$sql);
?>
                                <table class="table">
                                    
<thead>
                                        <tr>
                                            <th width="20%">Student Id</th>
                                            <th>Student Name</th>
                                            <th>File</th>
                                            <th>Description</th>
											<th colspan=2 width="18%">Action (Approve & Reject)</th>
											
											
                                            
                                        </tr>
                                    </thead>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>

<tbody>
            <tr>
               <td> <?php echo $row["stud_id"]; ?> </td>
               <td><?php echo $row["stud_name"]; ?></td>
                 
               <td><a href="project/<?php echo $row['file_name'];?>" target="_blank"><?php echo $row['file_name']; ?></a></td>
                <td><?php echo $row["descr"]; ?></td>
              <td><a href='approveproject.php?key1=<?php echo $row["stud_id"]; ?>'>Approve</a> | <a href = 'reject.php?key1=<?php echo $row['stud_id'];?>'>reject</a>   </tr>

</tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(stud_id) FROM umang_submission";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
echo "<a href='viewallalbums.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<?php



?>
</body>

</html>
