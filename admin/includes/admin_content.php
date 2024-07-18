
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

                           //  $found_user = User::find_by_id(1);
                           //  $object_property = new User();

                           // echo $object_property->username   =  $found_user['username'] ."<br>";
                           // echo $object_property->password   =  $found_user['password']."<br>";
                           // echo $object_property->first_name =  $found_user['first_name']."<br>";
                           // echo $object_property->last_name  =  $found_user['last_name']."<br>";

                             
                           //   $found_user = User::find_by_id(1);

                           //  $user_id = User::instantation($found_user);

                           // echo $user_id->id;

                           // echo "<br>";

                            

                             // $found_user = User::find_by_id(1);
                             // echo $found_user['last_name'];


                            // $found_user = User::found_all_users();

                            // echo $found_user['id'];

                            // foreach($found_user as $user){
                            //     echo $user['username'];
                            // }
                           

                               
             
                           //   $found_user = User::find_by_id(1);

                           //  $user_id = User::instantation($found_user);

                           // echo $user_id->username;

                           // echo "<br>";

                         // $found_all_user = User::found_all_users();

                         // $user_id = User::instantation($found_all_user);

                        //  while($row = mysqli_fetch_array($found_all_user)){

                        // echo $row['username'] . "<br>";
                       

                        //  }

                        //  foreach ($found_all_user as $all_user) {
                             
                        // echo $all_user['username'];
                        // echo $all_user['password'];


                        //  }


                        // $found_all_user = User::found_all_users();
                        // $all_user = User::find_this_query($found_all_user);

                        // echo $all_user->username;


                            
                        // $found_all_user = User::found_all_users();

                        // echo $found_all_user->id . "<br>";

                        // foreach ($found_all_user as $user) {
                            
                        //   echo $user->username . "<br>";

                        // }


                        // $create_user = User::find_by_id(49);
                       
                       // $all_users = User::find_by_id(50);
                       // $users = User::find_this_query($all_users);

                       // foreach ($all_users as $users) {
                           // echo $all_users->username . "<br>";
                           // echo $all_users->password . "<br>";

                       // }

                       // foreach($all_users as $user){
                            
                       // }
                  

                        // $create_user = new User();
                        
                 
                         
                       
                        $create_user = new User();
                        // $create_user = User::find_by_id(49);

                       $create_user->username = "Farha";
                       $create_user->password = "12";
                       $create_user->first_name = "mikk";
                       // $create_user->last_name = "12346789";
                       // $create_user->create();
                       // $create_user->update();
                       // $create_user->delete();
                       $create_user->save();





                               
                        ?>

                           <!--  Admin
                            <small>Subheading</small> -->
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