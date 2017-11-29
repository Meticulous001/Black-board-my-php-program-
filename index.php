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
        <div class="col-md-12">

            <?php $sql=mysqli_query($con, "SELECT * FROM messages");
              while ($row = mysqli_fetch_array($sql)) { ?>
                          <div class="box box-success"  style="border-bottom: 5px">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo $row['title']; ?></h3>

                <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php echo $row['message']; ?>
            </div>
            <!-- /.box-body -->
             <?php }
             ?>
            
          </div>
          <!-- /.box -->
        </div>
  </div>
 <?php //include 'footer.php'; ?>