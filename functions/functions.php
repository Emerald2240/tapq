<?php
function Sanitize($data, $case = null)
{
    // $result = htmlspecialchars($data);
    $result = htmlentities($data, ENT_QUOTES);
    if ($case == 'lower') {
        $result = strtoupper($result);
    } elseif ($case == 'none') {
        //leave it as it is
    } else {
        $result = strtoupper($result);
    }
    return $result;
}

// function loadPosts()
// {
//     global $db1;
//     $user = "Admin";
//     if (!empty($user)) {
//         $query = "SELECT owner, author, datecreated, postimg,  posttitle, 	postcont, 	views, 	likes, id FROM level100 ORDER BY `id` DESC ";
//         $response = @mysqli_query($db1, $query);
//         if ($response) {

//             // $row = mysqli_fetch_all($response);
//             // echo '<pre>';
//             // print_r($row[0][5]);
//             // die;

//             while ($row = mysqli_fetch_array($response)) {

//                 $master =  $row['author'];
//                 $query2 = "SELECT profilepic FROM users WHERE emailaddress = '$master' ";
//                 $result = @mysqli_query($db, $query2);
//                 if (mysqli_num_rows($result) > 0) {
//                     $result = $result->fetch_assoc();
//                     $profpic = $result['profilepic'];
//                 }
//                 echo '<a href = editPost.php?id=';
//                 echo $row['id'];
//                 echo ' >';
//                 echo ' <div class="post">
//                 <div class="pic"><img src="../images/blog_images/' . $row['postimg'] . '" alt="' . $row['postimg'] . '"></div>
//                 <div class="cont">
//                     <i class="fa fa-bars options"></i>
//                     <div class="post-info space-below">
                        
//                         <div class="post-info-text">
//                         <div class="profpic" style="background-image: url(../images/profile_images/' . $profpic . '); width:60px; height:60px; background-repeat: no-repeat;
//                         background-position: center; border-radius:50%;
//                         background-size: contain;"></div>
                        
//                             <span>' . $row['owner'] . '<i class="fa fa-pawn"></i></span>
//                             <span><b>' . $row['datecreated'] . '</b></span>
//                         </div>
//                     </div>
//                     <div class="actual-content">
//                         <h2>' . $row['posttitle'] . '</h2>
//                         <p class="space-below-large">' . $row['postcont'] . '</p>
//                     </div>
//                     <hr class="space-below">
//                     <span>' . $row['views'] . ' views Write a comment</span>
//                     <div class="small-space likes">' . $row['likes'] . '<i class="fa fa-heart red"></i></div>
//                 </div>
//             </div>';
//                 echo '</a>';
//             }
//         }
//     }
// }

// function processsPost($formstream)
// {
//     $msg = "";

//     if (isset($formstream['submit'])) {
//         $data_missing = [];

//         if (empty($formstream['title'])) {
//             $data_missing['title'] = "Missing Title";
//         } else {
//             $posttitle = Sanitize(trim(($_POST['title'])), "none");
//         }

//         if (empty($formstream['content'])) {
//             $data_missing['content'] = "Missing Content";
//         } else {
//             $postcontent = Sanitize(trim(($_POST['content'])), "none");
//         }

//         //image adding section
//         $image = $_FILES['image']['name'];
//         $target = "../images/blog_images/" . basename($image);

//         $formstream['image'] = $image;
//         if (empty($formstream['image'])) {
//             $data_missing['image'] = "Missing Image";
//         } else {
//             //$image = $_FILES['image']['name'];
//             //$target = "images/".basename($image);
//         }

//         if (empty($data_missing)) {
//             // $_SESSION['username'] = $firstname .' '. $lastname;
//             // $_SESSION['username'] = 'Admin';
//             $author = $_SESSION['email'];
//             $owner = $_SESSION['username'];
//             addPost($owner, $author, $posttitle, $postcontent, $image);

//             if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//                 $msg = 'Image Uploaded Succesfully';
//             } else {
//                 $msg = 'Failed to upload image';
//             }

//             // header("location:index.php");
//             return (true);
//         } else {
//             //  echo "<pre>";
//             // print_r($data_missing);
//             foreach ($data_missing as $miss) {
//                 echo '<p class="red space">';
//                 echo "$miss";
//                 echo '</p>';
//             }
//             // echo"</pre>";
//             return false;
//         }
//     }
// }

// function addPost($owner, $author, $tit, $cont, $img)
// {
//     $zero = 0;

//     global $db;

//     Sanitize($owner, "none");
//     Sanitize($author, 'none');
//     Sanitize($tit, 'none');
//     Sanitize($cont, 'none');
//     Sanitize($img, 'none');
//     $sql = "INSERT INTO posts(id, 	owner, author, 	datecreated, postimg,	posttitle, 	postcont, 	views, 	likes ) VALUES (NULL, '$owner', '$author', NOW(), '$img', '$tit', '$cont', '$zero','$zero')";


//     if (mysqli_query($db, $sql)) {
//         echo "New post created successfully";
//         // header("location:index.php");
//     } else {
//         echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
//     }
//     mysqli_close($db);
// }

// function addCourse(){
// }

// function addExam(){}

// function fetchAdmin($formData)
// {
//     //Somtoo's Function

//     global $db;
//     extract($formData);
//     $sql = "SELECT * FROM `admins` WHERE `email`='$email' AND `password`='$password' ";
//     $result = $db->query($sql);
//     if ($result->num_rows > 0) {
//         $result = $result->fetch_assoc();
//         return $result;
//     } else {
//         return array();
//     }
// }

function processRegister($formstream)
{
    //session_start();
    extract($formstream);

    if (isset($submit)) {

        $data_missing = [];

        if (empty($firstname)) {
            $data_missing['fname'] = "Missing First Name";
        } else {
            $firstname = trim(Sanitize($firstname));
        }

        if (empty($lastname)) {
            $data_missing['lname'] = "Missing Last Name";
        } else {
            $lastname = trim(Sanitize($lastname));
        }

        if (empty($username)) {
            $data_missing['uname'] = "Missing User Name";
        } else {
            $username = trim(Sanitize($username));
        }

        if (empty($email)) {
            $data_missing['email'] = "Missing email Address";
        } else {
            $email = trim(Sanitize($email));
        }

        if (empty($phone)) {
            $data_missing['phone'] = "Phone Number";
        } else {
            $phone = trim(Sanitize($phone));
        }

        if ($job == 0) {
            $data_missing['job'] = "Missing job";
        } else {
            $job = Sanitize(trim($job), "none");
        }

        if (empty($twitter)) {
            $data_missing['twitter'] = "Missing twitter link";
        } else {
            $twitter = Sanitize(trim($twitter), "none");
        }

        if (empty($instagram)) {
            $data_missing['instagram'] = "Missing instagram link";
        } else {
            $instagram = Sanitize(trim($instagram), "none");
        }

        if (empty($facebook)) {
            $data_missing['facebook'] = "Missing facebook link";
        } else {
            $facebook = Sanitize(trim($facebook), "none");
        }

        if (empty($linkedin)) {
            $data_missing['linkedin'] = "Missing linkedin link";
        } else {
            $linkedin = Sanitize(trim($linkedin), "none");
        }

        if (empty($password)) {
            $data_missing['pass'] = "Missing Password";
        } else {
            $password = trim(Sanitize($password));
        }

        if (empty($password1)) {
            $data_missing['confpass'] = "Missing Confirm Password";
        } else {
            if (($formstream['password']) != ($password)) {
                $data_missing['confpass'] = "Password Mismatch";
            } else {
                $password1 = trim(Sanitize($password1));
                $password = sha1($password);
            }
        }

          //image adding section
          if(empty( $_FILES['image']['name'])){
            $data_missing['image'] = "Missing Image";
          }else{
          $image = $_FILES['image']['name'];
          $target = "../images/" . basename($image);
  
          $formstream['image'] = $image;
        //   if (empty($formstream['image'])) {
        //       $data_missing['image'] = "Missing Image";
        //   } else {
        //       //$image = $_FILES['image']['name'];
        //       //$target = "images/".basename($image);
        //   }
        }

        if (empty($data_missing)) {
            // $_SESSION['username'] = $firstname .' '. $lastname;
            //AddRegistered($firstname, $lastname, $email, $phone, $password);
            echo("Everything entered Succesfully");
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                $msg = 'Image Uploaded Succesfully';
            } else {
                $msg = 'Failed to upload image';
            }
            // header("location:login.php");
            return (true);
        } else {
            //  echo "<pre>";
            // print_r($data_missing);
            foreach ($data_missing as $miss) {
                echo '<p class="">';
                echo "$miss";
                echo '</p>';
            }
            // echo"</pre>";
            return false;
        }
    }
}

// function AddRegistered($fname, $lname, $em, $ph, $pass)
// {

//     global $db;
//     $sql = "INSERT INTO users(firstname ,lastname, emailaddress, phone, password ) VALUES ('$fname', '$lname', '$em', '$ph', '$pass')";

//     if (mysqli_query($db, $sql)) {
//         echo "New record created successfully";
//         header("location:login.php");
//     } else {
//         echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
//     }
//     mysqli_close($db);
// }
