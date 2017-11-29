<?php include 'header.php'; ?>
<?php include 'side.php'; 
  include 'config.php';

    if (@$_GET['news']==1) {
    $Msg="News is successfully added";
}elseif (@$_GET['news']==2) {
    $errMsg="There was a problem";
}
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




            <div class="col-sm-6 animated slideInRight" style="margin-top: 10px">

            <div class="box box-primary direct-chat" style=" border-top-color: #45bf5c;">
            <!-- /.box-header -->
            <div class="box-body" id="print_content">
            <div class="box-header with-border">
              <h3 class="box-title">Add course</h3>

              <div class="box-tools pull-right">
                <i class="fa fa-edit"></i>
              </div>
            </div>

              <div class="direct-chat-messages">
                <form role="form" class="wowload fadeInRight" method="post" action="helper.php">
                <?php if (isset($newserrMsg)) { ?>
                                            
                    <div class="alert alert-danger alert-dismissible">
                        <p><?php echo $newserrMsg; ?> </p>
                    </div>

                   <?php }
                   ?>

                  <?php if (isset($newsMsg)) { ?>
                                            
                    <div class="alert alert-success alert-dismissible">
                        <p><?php echo $newsMsg; ?> </p>
                    </div>

                   <?php }
                   ?>

                  <div class="form-group">
                  <select class="form-control" name="course">
                  <?php $sql=mysqli_query($con, "SELECT * from courses");
                    while ($row=mysqli_fetch_array($sql)) { ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['course']; ?></option>
                    <?php }
                   ?> 
                        
                      </select>
                  </div>
                  <button class="btn btn-default" type="submit" name="add">Save</button>
                </form>  

              </div>

            </div>
            <!-- /.box-body -->
          </div>
      </div>

           
          </div>
      </div>

</div>


  </div>
  <?php include 'footer.php'; ?>