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


        <div class="col-sm-4 animated slideInRight" style="margin-top: 10px">

            <div class="box box-success direct-chat" style="">
            <!-- /.box-header -->
            <div class="box-body" id="print_content">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin user </h3>

              <div class="box-tools pull-right">
                <i class="fa fa-edit"></i>
              </div>
            </div>

              <div class="direct-chat-messages">
                <form role="form" class="wowload fadeInRight" method="post" action="helper.php" enctype="multipart/form-data">
                    <?php if (isset($aerrMsg)) { ?>
                                            
                    <div class="alert alert-danger alert-dismissible">
                        <p><?php echo $aerrMsg; ?> </p>
                    </div>

                   <?php }
                   ?>

                  <?php if (isset($aMsg)) { ?>
                                            
                    <div class="alert alert-success alert-dismissible">
                        <p><?php echo $aMsg; ?> </p>
                    </div>

                   <?php }
                   ?>
                  <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Name" name="name">
                  </div>
                  <div class="form-group">
                      <input type="mail" class="form-control"  placeholder="Email" name="email">
                  </div>        

                  <button class="btn btn-default" type="submit" name="admin">Save</button>
                </form>  

              </div>

            </div>
            <!-- /.box-body -->
          </div>
      </div>


            <div class="col-sm-6 animated slideInRight" style="margin-top: 10px">

            <div class="box box-primary direct-chat" style=" border-top-color: #45bf5c;">
            <!-- /.box-header -->
            <div class="box-body" id="print_content">
            <div class="box-header with-border">
              <h3 class="box-title">Verified News</h3>

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
                      <input type="text" class="form-control"  placeholder="Title" name="title">
                  </div>
                  <div class="form-group">
                  <select class="form-control" name="cid">
                  <?php $sql=mysqli_query($con, "SELECT * from courses");
                    while ($row=mysqli_fetch_array($sql)) { ?>
                     <option value="<?php echo $row['id']; ?>"><?php echo $row['course']; ?></option>
                    <?php }
                   ?> 
                        
                      </select>
                  </div>
                  <div class="form-group">
                  <textarea type="text" class="form-control"  name="postnews" placeholder="News" rows="4" required=""></textarea>
                  </div>
                  <button class="btn btn-default" type="submit" name="news">Save</button>
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