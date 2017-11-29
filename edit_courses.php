<?php include 'header.php'; ?>
<?php include 'side.php';
  include 'config.php';
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Verifieds
      </h1>
    </section>
    <br>
    <div class="container">
    <div class="col-sm-">
        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Courses</th>
                  <th>Action</th>
                </thead>
                <tbody>
<?php 
  $s="SELECT * FROM courses";
  $result=mysqli_query($con,$s);
  $r=mysqli_num_rows($result);

  while($data=mysqli_fetch_array($result))
  {  $id=$data['id'];
    ?>
                <tr>
                  <td><?php echo $data['course']; ?></td>

            <td><a href="helper.php?del=3&id=<?php echo $id; ?>"><button class="btn btn-danger">Delete</button></a></td>


                </tr>

      <?php }

 ?>

                
                </tbody>
              </table>
              </div>
              
              </div>
              </div>
  </div>
 <?php include 'footer.php'; ?>