<?php include("includes/header.php"); ?>
<?php if (!$session->is_signed_in()) {redirect("./login.php");} ?>

<?php 



if (isset($_POST['submit'])) {
    $photo = new Photo();
    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file']);

    if ($photo->save_files()) {
        
        $message = "Photo uploaded succesfully.";
    }else{

         $message = join("<br>", $photo->errors);
    }
    
}

 ?>


        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("includes/top_nav.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

             <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload Photos
                            <small>Subheading</small>
                        </h1>
                          <div class="col-lg-6">
                   
                        <form action="" method="post" class="mb-4">
                            <div class="form-gruop" style="margin-bottom: 1rem;">
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group pb-3" style="margin-bottom: 1rem;">
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="file-btn pt-4 d-flex">
                                <button type="submit" class="btn btn-success btn-lg" name="submit">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>