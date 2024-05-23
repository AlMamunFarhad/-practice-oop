
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            
                            <?php 
                             
                            // $sql = "SELECT * FROM users WHERE id = 1";

                            // $result = $database->query($sql);
                            
                            // $user_found = mysqli_fetch_array($result);

                            //  echo $user_found['id']."<br>";
                            //  echo $user_found['username']."<br>";
                            //  echo $user_found['first_name']."<br>";
                            //  echo $user_found['last_name']."<br>";


                            // $users = new User();

                            
                            // $result_set = User::find_by_id(1);
                            
                    

                            // // while($row = mysqli_fetch_array($result_set)){

                            // // // foreach($result as $user){
                            // //    echo $row['id'] ."<br>";
                            // //    echo $row['username']."<br>";
                            // //    echo $row['first_name']."<br>";
                            // //    echo $row['last_name']."<br>";
                            // // }
                            // // // }

                             $found_user = User::find_by_id(1);
                             echo $found_user['last_name'];


                            // $found_user = User::found_all_users();

                            // echo $found_user['id'];

                            // foreach($found_user as $user){
                            //     echo $user['username'];
                            // }
                           

                               
                             ?>

                            Admin
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->