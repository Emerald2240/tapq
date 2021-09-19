<?php
session_start();

function gotoPage($location)
{
    header('location:' . $location);
    exit();
}

function Sanitize($data, $case = null)
{
    //This function cleanses and arranges the data about to be stored. like freeing it from any impurities like sql injection
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

function fetchAdmin($formData)
{
    //Somtoo's Function

    global $db;
    extract($formData);
    $sql = "SELECT * FROM `admins` WHERE `email`='$email' AND `password`='$password' ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();
        return $result;
    } else {
        return array();
    }
}

function validateMailAddress($email)
{
    global $db;
    $sql = "SELECT * FROM `admins` WHERE `email`='$email'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();
        if ($email == isset($result['email'])) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

function processRegister($formstream)
{
    //This function processes what user data is being stored and checks if they are accurate or entered at all.
    //It also helps in confirming if what the user entered is Okay, like someone entering two different things in the password and confirm password box
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

        if (empty($email)) {
            $data_missing['email'] = "Missing email Address";
        } else {
            $email = trim(Sanitize($email));
            if (!validateMailAddress($email)) {
                $data_missing['email'] = "Email already exists";
            }
        }

        if (empty($phone)) {
            $data_missing['phone'] = "Phone Number";
        } else {
            $phone = trim(Sanitize($phone));
        }

        if (empty($password)) {
            $data_missing['pass'] = "Missing Password";
        } else {
            $password = trim(Sanitize($password));
        }

        if (empty($password1)) {
            $data_missing['confpass'] = "Missing Confirm Password";
        } else {
            $password1 = trim(Sanitize($password1));
            if ($password != $password1) {
                $data_missing['confpass'] = "Password Mismatch";
            } else {
                // $password1 = trim(Sanitize($password1));
                $password = sha1($password);
            }
        }

        //   //image adding section
        //   if(empty( $_FILES['image']['name'])){
        //     $data_missing['image'] = "Missing Image";
        //   }else{
        //   $uniqueimagename =time().uniqid(rand());

        //   $target = "../images/" . $uniqueimagename;
        //   $allowtypes = array('jpg', 'png', 'jpeg', 'gif', 'svg');


        //   if (!is_dir("../images")) {
        //       mkdir("../images", 0755);
        //   }

        //   $filename = "";
        //   $tmpfilename = "";

        //       $filename =  $_FILES['image']['tmp_name'];

        //       $tmpfilename = basename( $_FILES['image']['name']);
        // }

        if (empty($data_missing)) {
            // $_SESSION['rege'] = "true";
            // AddRegistered($firstname, $lastname, $phone, $email, $username, $password, $job, $twitter, $facebook,  $linkedin, $instagram, $uniqueimagename);
            AddRegistered($firstname, $lastname, $phone, $email, $password);
            header('location:login.php');
            exit;
            //echo '<br>';
            // echo("Everything entered Succesfully");
            //echo '<br>';


            //     $filetype = pathinfo($tmpfilename, PATHINFO_EXTENSION);
            //     if (in_array($filetype, $allowtypes)) {

            //         //upload file to server
            //         if (move_uploaded_file($filename, $target . "." . $filetype)) {

            //         } else {
            //             echo '<br>';
            //             echo 'Something went wrong with the image upload';
            //         }
            //     }
            // } else {
            //     //  echo "<pre>";
            //     // print_r($data_missing);
            //     foreach ($data_missing as $miss) {
            //         echo '<p class="">';
            //         echo "$miss";
            //         echo '</p>';
            //     }
            //     // echo"</pre>";
            //     return false;
            // }
        } else {
            // foreach ($data_missing as $miss) {
            //     echo '<p class="danger">';
            //     echo "$miss";
            //     echo '</p>';
            // }
            return $data_missing;
        }
    }
}

function AddRegistered($fname, $lname, $ph, $em, $pass)
{
    //This simply adds the filtered and cleansed data into the database 
    global $db;
    $sql = "INSERT INTO admins(firstname, lastname, phone, email, password) VALUES ('$fname', '$lname', '$ph', '$em', '$pass')";

    if (mysqli_query($db, $sql)) {

        echo "New record created successfully";
        //header("location:login.php");
    } else {
        echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}

function processLogin($formstream)
{
    //This simply queries the database to see if the users data is really available then sets the users data to a session to show theyve logged in
    extract($formstream);
    global $db;

    if (isset($submit)) {
        // username and password sent from form 

        $myusername = Sanitize($email);
        $mypassword = sha1($password);

        $result = mysqli_query($db, "SELECT * FROM admins WHERE email ='$myusername' AND password = '$mypassword'      ");

        if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result) == 1) {
            $result = $result->fetch_assoc();

            $_SESSION['username'] = ucwords(strtolower($result['firstname'])) . " " . ucwords(strtolower($result['lastname']));
            $_SESSION['firstname'] = $result['firstname'];
            $_SESSION['lastname'] = $result['lastname'];
            $_SESSION['admin_id'] = $result['id'];

            //$_SESSION['datejoined'] = $result['datejoined'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['phone'] = $result['phone'];
            // $_SESSION['profilepic'] = $result['profilepic'];

            $_SESSION['log'] = "true";

            //This is the line of code for saving cookies AKA remember me
            // if(isset($remember)){
            //     setcookie("mem_mail",  $_SESSION['email'], time()+(10 * 365 * 24 * 60 * 60));
            //     setcookie("mem_pass", $password, time()+(10 * 365 * 24 * 60 * 60));
            //     setcookie("mem_sele",  $_SESSION['admin_id'], time()+(10 * 365 * 24 * 60 * 60));
            // }else{
            //     if(isset($_COOKIE['mem_log'])){
            //         setcookie('mem_log', '');
            //     }
            // }

            setcookie("mem_mail",  $_SESSION['email'], time() + (10 * 365 * 24 * 60 * 60));

            // echo "<pre>";
            // print_r($_COOKIE);
            // die;

            echo "<br>";
            echo 'Logged In';
            echo "<pre>";
            print_r($result);
            header('location:admin.php');
        } else {

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> Your username or password are incorrect.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
        }
    }
}

function processNewCourse($formstream)
{
    extract($formstream);

    if (isset($submit)) {

        $data_missing = [];

        if (empty($code)) {
            $data_missing['Course_code'] = "Missing Course Code";
        } else {
            if (strlen($code) == 6) {
                $code = trim(Sanitize($code));
            } else {
                $data_missing['Course_code'] = "Course code is not 6 characters";
            }
        }

        if (empty($title)) {
            $data_missing['Course_title'] = "Missing Course Title";
        } else {
            $title = trim(Sanitize($title));
        }

        if (empty($level)) {
            $data_missing['Course_level'] = "Missing Course Level";
        } else {


            if ($level > 7 || $level < 1) {
                $data_missing['Course_level'] = "Invalid Course Level";
            } else {
                $level = trim(Sanitize($level));
            }
        }

        if (empty($credit)) {
            $data_missing['Course_Credit'] = "Missing Course Credit";
        } else {

            if ($credit > 8 || $credit < 1) {
                $data_missing['Course_Credit'] = "Invalid Course Credit";
            } else {
                $credit = trim(Sanitize($credit));
            }
        }

        if (empty($semester)) {
            $data_missing['Course_semester'] = "Missing Course semester";
        } else {

            if ($semester > 2 || $semester < 1) {
                $data_missing['Course_semester'] = "Invalid Course semester";
            } else {
                $semester = trim(Sanitize($semester));
            }
        }

        if (empty($faculty)) {
            $data_missing['Course_faculty'] = "Missing Course Faculty";
        } else {
            $faculty = trim(Sanitize($faculty));
        }


        if (empty($data_missing)) {
            AddNewCourse($code, $title, $faculty, $credit, $level, $semester);
        } else {
            return $data_missing;
            // foreach ($data_missing as $miss) {
            //     echo '<p class="danger">';
            //     echo "$miss";
            //     echo '</p>';
            // }
        }
    }
}

function processEditCourse($formstream)
{
    extract($formstream);

    if (isset($submit)) {

        $data_missing = [];

        if (empty($code)) {
            $data_missing['Course_code'] = "Missing Course Code";
        } else {
            if (strlen($code) == 6) {
                $code = trim(Sanitize($code));
            } else {
                $data_missing['Course_code'] = "Course code is not 6 characters";
            }
        }

        if (empty($title)) {
            $data_missing['Course_title'] = "Missing Course Title";
        } else {
            $title = trim(Sanitize($title));
        }

        if (empty($level)) {
            $data_missing['Course_level'] = "Missing Course Level";
        } else {


            if ($level > 7 || $level < 1) {
                $data_missing['Course_level'] = "Invalid Course Level";
            } else {
                $level = trim(Sanitize($level));
            }
        }

        if (empty($credit)) {
            $data_missing['Course_Credit'] = "Missing Course Credit";
        } else {

            if ($credit > 8 || $credit < 1) {
                $data_missing['Course_Credit'] = "Invalid Course Credit";
            } else {
                $credit = trim(Sanitize($credit));
            }
        }

        if (empty($semester)) {
            $data_missing['Course_semester'] = "Missing Course semester";
        } else {

            if ($semester > 2 || $semester < 1) {
                $data_missing['Course_semester'] = "Invalid Course semester";
            } else {
                $semester = trim(Sanitize($semester));
            }
        }

        if (empty($faculty)) {
            $data_missing['Course_faculty'] = "Missing Course Faculty";
        } else {
            $faculty = trim(Sanitize($faculty));
        }


        if (empty($data_missing)) {
            UpdateCourse($code, $title, $faculty, $credit, $level, $semester);
        } else {
            return $data_missing;
            // foreach ($data_missing as $miss) {
            //     echo '<p class="danger">';
            //     echo "$miss";
            //     echo '</p>';
            // }
        }
    }
}

function AddNewCourse($cd, $tit, $fac, $cred, $lvl, $sem)
{
    //This simply adds the filtered and cleansed data into the database 
    global $db;
    $sql = "INSERT INTO courses(code, title, faculty, credit, level, semester ) VALUES ('$cd', '$tit', '$fac', '$cred', '$lvl', '$sem')";

    if (mysqli_query($db, $sql)) {

        //echo "Course Saved";
        echo '<p class="text-success">';
        echo "Course Saved";
        echo '</p>';
        header("location:courses.php");
    } else {
        echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}

function UpdateCourse($cd, $tit, $fac, $cred, $lvl, $sem)
{
    //This simply adds the filtered and cleansed data into the database 
    global $db;
    $id = $_SESSION['course_id'];
    $sql = " UPDATE courses SET code = '$cd', title = '$tit', faculty = '$fac', credit = '$cred', level = '$lvl', semester ='$sem' WHERE courses.id = '$id' ";

    if (mysqli_query($db, $sql)) {

        //echo "Course Saved";
        echo '<p class="text-success">';
        echo "Course Saved";
        echo '</p>';
        header("location:courses.php");
    } else {
        echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}

function loadCourses()
{
    //This loads up all the courses available and fills their links/options with the required items so they can be worked on and used to get more data on that particular course
    global $db;
    $user = $_SESSION['username'];
    if (!empty($user)) {
        $query = "SELECT id, code, title, faculty, credit, level, semester FROM courses ORDER BY `id` DESC ";
        $response = @mysqli_query($db, $query);
        if ($response) {
            while ($row = mysqli_fetch_array($response)) {
                echo '<tr><td>';
                echo $row['code'];
                $checker = $row['code'];
                echo '</td>';

                echo  '<td>';
                echo '<a href="course_detail.php?id=';
                echo $row['id'];
                echo '&coursename=';
                echo ucwords(strtolower($row['title']));


                echo '"> ';
                echo ucwords(strtoupper($row['title']));
                echo '</a></td>';

                echo '<td>';
                echo ucwords(strtolower($row['faculty']));
                echo '</td>';

                echo '<td>';
                echo $row['level'] . '00';
                echo '</td>';

                echo '<td>';
                echo $row['credit'];
                echo '</td>';

                echo '<td>';
                echo $row['semester'];
                echo '</td>';

                echo '<td>';
                echo '<a href="edit_course.php?id=';
                echo $row['id'];
                echo '&coursename=';
                echo ucwords(strtolower($row['title']));
                echo '&creditload=';
                echo ucwords(strtolower($row['credit']));
                echo '&faculty=';
                echo ucwords(strtolower($row['faculty']));
                echo '&level=';
                echo ucwords(strtolower($row['level']));
                echo '&semester=';
                echo ucwords(strtolower($row['semester']));
                echo '&code=';
                echo ucwords(strtoupper($row['code']));
                echo '&edit=1';

                echo '">';
                echo '<i class="fa fa-edit"></i></a></td>';


                echo '<td><a href="new_exam.php?id=';
                echo $row['id'];
                echo '&coursename=';
                echo ucwords(strtolower($row['title']));
                echo '"><i class="fa fa-plus"></i></a></td>';

                echo '<td><a href="delete_course.php?id=';
                echo $row['id'];
                echo '"';

                echo '><i class="fa fa-trash"></i></a></td>';


                echo '</tr>';
            }
            if (empty($checker)) {
                echo 'No Courses Added Yet';
            }
        }
    }
}

function loadCourseExams($course_id)
{
    //This loads up all the exams available and fills their links/options with the required items so they can be worked on and used to get more data on that particular course
    global $db;
    $user = $_SESSION['username'];
    if (!empty($user)) {
        $query = "SELECT id, course_id, admin_id, year, num_questions, questions_and_answers, lecturers, obj_thr, time, instructions FROM q_and_a WHERE course_id = '$course_id' ORDER BY `year` DESC ";
        $response = @mysqli_query($db, $query);
        if ($response) {
            while ($row = mysqli_fetch_array($response)) {

                //$query2 = "SELECT profilepic FROM users WHERE emailaddress = '$master' ";

                echo '<tr>';
                echo  '<td>';
                echo '<a href="#';
                echo '"> ';
                echo ucwords(strtoupper($row['year']));
                echo '</a></td>';

                echo  '<td>';
                echo $row['num_questions'];
                echo '</td>';

                echo '<td>';
                if ($row['obj_thr'] == 1) {
                    echo ucwords(strtolower("Objective"));
                } else {
                    echo ucwords(strtolower("Theory"));
                }

                echo '</td>';

                echo '<td>';
                echo ucwords(strtolower($row['lecturers']));
                echo '</td>';

                echo '<td>';
                echo $row['time'] / 60;
                echo " Hour(s)";
                echo '</td>';

                echo '<td>';
                echo $row['admin_id'];
                echo '</td>';

                echo '<td><a  href="delete_exam.php?exam_id=';
                echo $row['id'];
                echo '&refresh=1"';
                // echo 'data-toggle="modal" data-target="#delete_Exam_Modal"';
                echo '><i class="fa fa-recycle"></i></a></td>';

                echo '<td><a  href="delete_exam.php?exam_id=';
                echo $row['id'];
                echo '"';
                // echo 'data-toggle="modal" data-target="#delete_Exam_Modal"';
                echo '><i class="fa fa-trash"></i></a></td>';

                echo '</tr>';
            }
        } else {
            echo 'No Post Yet';
        }
    }
}

function loadAdmins()
{
    //This loads up all the courses available and fills their links/options with the required items so they can be worked on and used to get more data on that particular course
    global $db;
    $user = $_SESSION['username'];
    if (!empty($user)) {
        $query = "SELECT id, firstname, lastname, phone, email, date_joined FROM admins ORDER BY `id` DESC ";
        $response = @mysqli_query($db, $query);
        if ($response) {
            while ($row = mysqli_fetch_array($response)) {

                //$query2 = "SELECT profilepic FROM users WHERE emailaddress = '$master' ";

                echo '<tr><td>';
                echo $row['id'];
                echo '</td>';

                echo  '<td>';
                echo '<a href="admin_details.php?id=';
                echo $row['id'];
                echo '"> ';
                echo ucwords(strtolower($row['firstname']));
                echo '</a></td>';

                echo '<td>';
                echo ucwords(strtolower($row['lastname']));
                echo '</td>';

                echo '<td>';
                echo $row['phone'];
                echo '</td>';

                echo '<td>';
                echo ucwords(strtolower($row['email']));
                echo '</td>';

                echo '<td>';
                echo $row['date_joined'];
                echo '</td>';




                // echo '<td><a href="new_exam.php?id=';
                // echo $row['id'];
                // echo '&coursename=';
                // echo ucwords(strtolower($row['title']));
                // echo '"><i class="fa fa-plus"></i></a></td>';

                echo '<td><a href="edit_admin.php?id=';
                echo $row['id'];
                echo '"';
                //echo 'data-toggle="modal" data-target="#deleteModal"';
                echo '>';
                echo '<i class="fa fa-edit"></i></a></td>';


                echo '<td><a href="delete_admin.php?id=';
                echo $row['id'];
                echo '"';
                // echo 'data-toggle="modal" data-target="#deleteModal"';
                echo '><i class="fa fa-trash"></i></a></td>';

                echo '</tr>';
            }
        } else {
            echo 'Though Impossible, there are no admins Yet';
        }
    }
}

function loadTenyears()
{
    //This function checks through the database for previous exam years created under a particular topic and makes sure an option for that year does not exist, so to avoid duplicate years. this is checked for ten years from the current one
    global $db;
    $currentYear = date('Y');

    for ($i = 0; $i < 10; $i++) {

        // $courseId = $_SESSION['course_id'];
        $courseId = $_GET['id'];
        $sql = "select * from q_and_a where (year = '$currentYear' and course_id = '$courseId');";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) {
        } else {
            echo '<option value="' . $currentYear . '">';
            echo $currentYear;
            echo '</option>';
        }
        $currentYear = $currentYear - 1;
    }
}

function processNewExam($formstream)
{
    //This function looks through all the items collected and checks if everything is in order
    extract($formstream);

    if (isset($submit)) {

        $data_missing = [];

        if (empty($exam_year)) {
            $data_missing['Exam_Year'] = "Missing Exam Year";
        } else {
            if ($exam_year < 2010 || $exam_year > 2099) {
                $data_missing['Exam_Year'] = "Invalid Exam Year";
            } else {
                $exam_year = trim(Sanitize($exam_year));
            }
        }


        if (empty($obj_thr)) {
            $data_missing['obj_or_thr'] = "Missing Exam format";
        } else {
            if ($obj_thr < 1 || $obj_thr > 2) {
                $data_missing['obj_or_thr'] = "Invalid Exam format";
            } else {
                $obj_thr = trim(Sanitize($obj_thr));
            }
        }

        if (empty($no_questions)) {
            $data_missing['Number_of_questions'] = "Missing number of questions";
        } else {
            if ($no_questions < 1 || $no_questions > 200) {
                $data_missing['Number_of_questions'] = "Invalid number of questions";
            } else {
                $no_questions = trim(Sanitize($no_questions));
            }
        }


        if (empty($lecturer)) {
            $data_missing['Lecturer Incharge'] = "Missing lecturer";
        } else {
            $lecturer = trim(Sanitize($lecturer));
        }

        if (empty($instructions)) {
            $data_missing['Exam Instructions'] = "Missing Instructions";
        } else {
            $instructions = trim(Sanitize($instructions));
        }


        if (empty($duration)) {
            $data_missing['Exam duration'] = "Missing Exam duration";
        } else {
            $duration = trim(Sanitize($duration));
        }


        if (empty($data_missing)) {
            $_SESSION['new_exam_set']                  = 'true';
            $_SESSION['exam']['year']                  = $exam_year;
            $_SESSION['exam']['format']                = $obj_thr;
            $_SESSION['exam']['number_of_questions']   = $no_questions;
            $_SESSION['exam']['lecturer']              = $lecturer;
            $_SESSION['exam']['duration']              = $duration;
            $_SESSION['exam']['instructions']              = $instructions;

            header('location:workshop.php');
        } else {
            return $data_missing;
        }
    }
}

function showDataMissing($data_missing)
{
    //this function checks if the datamissing array passed in is empty. if it isnt it prints out all of its contents. if it is empty nothing happens
    if (isset($data_missing[0])) {
        foreach ($data_missing[0] as $miss) {
            echo '<p class="text-danger">';
            echo $miss;
            echo '</p>';
        }
        // } else {
        //     echo '<p class="text-success">';
        //     echo "Success";
        //     echo '</p>';
    }
}

function showDataMissing2($data_missing)
{
    //this function checks if the datamissing array passed in is empty. if it isnt it prints out all of its contents. if it is empty nothing happens
    if (isset($data_missing)) {
        foreach ($data_missing as $miss) {
            echo '<p class="text-danger">';
            echo $miss;
            echo '</p>';
        }
        // } else {
        //     echo '<p class="text-success">';
        //     echo "Success";
        //     echo '</p>';
    }
}

function createQuestionAndAnswerBoxes($num)
{
    echo '<div class="special_char" >';
    echo '<i id="special_bar" style="display:inline-block; text-align:right; width:100%; font-size:20px;" class="fa fa-chevron-down">&$/</i>';
    require("includes/special_char_table.php");
    echo '</div>';

    //This function creates question and answer boxes for the number of questions available. its id's are given so its arranged perfectly with luckyMoshy
    for ($i = 1; $i <= $num; $i++) {


        echo '<div class="form-group p-5 container-fluid shadow page-mimi" id="container-pagnation' . $i . '">';

        // echo'Number '. $i;


        echo '<h6 class="m-0 font-weight-bold">Number ' . $i . '</h6>';
        echo '<hr>';

        // echo '<div class="space">';
        // echo '<p>Question</p>';
        // echo '<div id="question'.$i.'"></div>';
        // echo '</div>';

        // echo '<div class="space">';
        // echo '<p>Answer</p>';
        // echo '<div id="answer'.$i.'"></div>';
        // echo '</div>';



        echo  '<label for="question">Question</label>';
        echo '<textarea  onfocus="setLastFocusedElement(\'question' . $i . '\')" class="form-control question' . $i . '" name="question' . $i . '" id="question' . $i . '" required></textarea>';

        echo '<label for="question">Answer</label>';
        echo '<textarea  onfocus="setLastFocusedElement(\'answer' . $i . '\')" class="form-control answer' . $i . '" name="answer' . $i . '" id="answer' . $i . '" required></textarea>';

        echo '<label for="topic">Topic</label>';
        echo '<textarea style="height:35px;" onfocus="setLastFocusedElement(\'topic' . $i . '\')" class="form-control topic' . $i . '" name="topic' . $i . '" id="topic' . $i . '" required></textarea>';

        echo '</div>';
    }
}

//Look into this function later. it has an unresolved issue.
function processQandA($q_and_a_formstream, $course_id, $admin_id, $year, $number_of_questions, $lecturers, $obj_or_theory, $duration_in_minutes, $instructions)
{

    extract($q_and_a_formstream);

    if (isset($submit)) {

        $data_missing = [];

        //the next 5 lines of code are useless and shouldnt be here. especially considering the data is directly added into the database
        if (empty($jsonta)) {
            $data_missing['Q_and_A'] = "Missing questions and answer box";
        } else {
            $jsonta = trim($jsonta);
            //$jsonta = utf8_encode($jsonta), ENT_QUOTES);
        }



        //This simply adds the filtered and cleansed data into the database (questions and answers)
        global $db;
        $sql = "INSERT INTO q_and_a(course_id, 	admin_id, 	year,  	num_questions, 	questions_and_answers, 	lecturers, 	obj_thr, 	time, instructions  ) VALUES ('$course_id', '$admin_id', '$year', '$number_of_questions', '$jsonta', '$lecturers', '$obj_or_theory', '$duration_in_minutes', '$instructions')";

        if (mysqli_query($db, $sql)) {

            //echo "Exam Saved";
            // echo '<p class="text-success">';
            // echo "Course Saved";
            // echo '</p>';
            header("location:courses.php");
        } else {
            echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
        }
        mysqli_close($db);
    } else {
        //header("location:new_exam.php");
    }
}

function deleteCourse($id)
{
    global $db;

    //This sql statement deletes the course with the mentioned id
    $sql = "DELETE FROM `courses`  WHERE courses.id = '$id' ";
    if (mysqli_query($db, $sql)) {

        //echo "Course Saved";
        echo '<p class="text-success">';
        echo "Course deleted";
        echo '</p>';
        // header("location:courses.php");
    } else {
        echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}

function deleteExam($ref = null)
{
    global $db;
    $id = $_SESSION['exam_id'];
    //$course = $_SESSION['course_title'];

    //This sql statement deletes the course with the mentioned id
    $sql = "DELETE FROM `q_and_a`  WHERE q_and_a.id = '$id' ";
    if (mysqli_query($db, $sql)) {

        //echo "Course Saved";
        echo '<p class="text-success">';
        echo "Course Saved";
        echo '</p>';
        if ($ref == 1) {
            //this should head to the new_exam page where the user will set up everything afresh for the exam, but it will be delayed for now.
            header("location:courses.php");
        } else {
            //header("location:course_detail.php?exam_id=$id&coursename=$course");
            header("location:courses.php");
        }
    } else {
        echo  "<br>" . "Error: " . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
}



//FRONTEND//

function loadLevelExamQuestions($level)
{
    global $db;
    $query = "SELECT id, code, title, faculty, credit, level, semester FROM courses  WHERE courses.level = '$level'  ORDER BY `code` ASC ";
    $response = @mysqli_query($db, $query);
    if ($response) {


        while ($row = mysqli_fetch_array($response)) {
            echo  '<td>';
            echo '<a class="course" href="';
            echo 'course_exams.php?course_id=';
            echo $row['id'];
            echo '&course_code=';
            echo $row['code'];
            echo '&course_title=';
            echo $row['title'];
            echo '&course_semester=';
            echo $row['semester'];
            echo '">';
            $row2 = $row['semester'];
            echo '<ul class="list-group list-group-horizontal">';

            echo '<li class="list-group-item">';
            echo ucwords(($row['code']));
            echo '</li>';

            echo '<li class="list-group-item">';
            echo ucwords(($row['title']));
            echo '</li>';

            // echo '<li class="list-group-item">';
            // echo ucwords(strtolower($row['faculty']));
            // echo '</li>';

            echo '</ul>';
            echo '</a>';
        }

        if (empty($row2)) {
            echo 'No Courses Added Yet';
        }
    }
}

function loadCourseExamYears($course_id)
{
    global $db;

    $query = "SELECT id, course_id,	admin_id,	year,	num_questions,	questions_and_answers,	lecturers, time,	obj_thr FROM q_and_a WHERE q_and_a.course_id = '$course_id'  ORDER BY `year` DESC ";
    $response = @mysqli_query($db, $query);
    $response2 = @mysqli_query($db, $query);
    if ($response) {

        $row0 =  mysqli_fetch_array($response);

        if ($row0) {
            $year2 = $row0['year'] += 1;
            $objorthr2 = $row0['obj_thr'];


            if (!empty($year2)) {
                loadCQASLColumn($course_id, $year2, $objorthr2);
            }
        } else {
            echo 'No Exams Added Yet';
        }


        while ($row = mysqli_fetch_array($response2)) {
            echo  '<td>';
            echo '<a class="course" href="';
            echo 'exam_questions.php?course_id=';
            echo $row['course_id'];
            echo '&exam_year=';
            echo $row['year'];
            echo '&exam_id=';
            echo $row['id'];
            echo '">';

            echo '<ul class="list-group list-group-horizontal">';

            echo '<li class="list-group-item">';
            echo ucwords(($row['year']));
            echo '</li>';

            echo '<li class="list-group-item">';
            if ($row['obj_thr'] == 2) {
                echo ucwords(strtolower('theory'));
            } else {
                echo ucwords(strtolower('objective'));
            }
            echo '</li>';

            echo '<li class="list-group-item">';
            echo ucwords(strtolower($row['num_questions'] . ' questions'));
            echo '</li>';

            echo '</ul>';
            echo '</a>';
        }
    }
}

function loadCourseExamYearsDatabase($course_id)
{
    global $db;

    $query = "SELECT id, course_id,	admin_id,	year,	num_questions,	questions_and_answers,	lecturers, time,	obj_thr FROM q_and_a WHERE q_and_a.course_id = '$course_id'  ORDER BY `year` DESC ";
    $response = @mysqli_query($db, $query);
    if ($response) {



        while ($row = mysqli_fetch_array($response)) {
            echo  '<td>';
            echo '<a class="course" href="';
            echo 'exam_questions.php?course_id=';
            echo $row['course_id'];
            echo '&exam_year=';
            echo $row['year'];
            echo '&exam_id=';
            echo $row['id'];
            echo '">';

            echo '<ul class="list-group list-group-horizontal">';

            echo '<li class="list-group-item">';
            echo ucwords(($row['year']));
            echo '</li>';

            echo '<li class="list-group-item">';
            if ($row['obj_thr'] == 2) {
                echo ucwords(strtolower('theory'));
            } else {
                echo ucwords(strtolower('objective'));
            }
            echo '</li>';

            echo '<li class="list-group-item">';
            echo ucwords(strtolower($row['num_questions'] . ' questions'));
            echo '</li>';

            echo '</ul>';
            echo '</a>';
        }
    }
}

function loadCQASLColumn($course_id, $year, $obj_thr)
{

    echo  '<td>';
    echo '<a class="course hybrid" href="';
    echo 'exam_questions.php?course_id=';
    echo $course_id;
    echo '&exam_year=';
    echo $year;
    echo '&exam_id=';
    echo 0;
    echo '">';

    echo '<ul class="list-group list-group-horizontal">';

    echo '<li class="list-group-item">';
    echo ucwords(($year));
    echo '</li>';

    echo '<li class="list-group-item">';

    echo ucwords(strtolower('Cumulative Past Questions List'));

    echo '</li>';

    echo '<li class="list-group-item">';
    if ($obj_thr == 1) {
        echo ucwords(strtolower(50 . ' questions'));
    } else {
        echo ucwords(strtolower(10 . ' questions'));
    }
    echo '</li>';

    echo '</ul>';
    echo '</a>';
}

function loadQandA($exam_id)
{
    global $db;
    $count = 0;


    $query = "SELECT id, course_id,	admin_id, year,	num_questions,	questions_and_answers,	lecturers, time, obj_thr FROM q_and_a WHERE q_and_a.id = '$exam_id' ";
    $response = @mysqli_query($db, $query);
    if ($response) {

        while ($row = mysqli_fetch_array($response)) {
            $json = $row['questions_and_answers'];

            //echo $json;
            echo "<br>";

            //echo $row['questions_and_answers'];

            // if (!is_array($json)) {
            //     //echo "This is a json array";
            //     //echo "<br><br>";
            //     for ($count = 0; $count < count($json_dec); $count++) {
            //         if (is_array($json[$count])) {
            //             loadQandA($json[$count]);
            //         } else {
            //             $arr = json_decode($json, true);
            //             // print_r($arr);
            //             echo $arr[$count]["number"];
            //             echo "] ";
            //             echo $arr[$count]["question"];
            //             echo "<br>";
            //             echo $arr[$count]["answer"];
            //             echo "<br>";
            //             echo $arr[$count]["topic"];
            //             echo "<br><br>";
            //         }
            //     }
            // }


            decodeJSON($json);
        }
    } else {
        echo 'No Posts Yet';
    }
}

function decodeJSON($json)
{
    $json_dec = json_decode($json);
    if (!is_array($json)) {
        //echo "This is a json array";
        //echo "<br><br>";
        for ($count = 0; $count < count($json_dec); $count++) {
            if (is_array($json[$count])) {
                decodeJSON($json[$count], $json_dec);
            } else {
                $arr = json_decode($json, true);
                echo ' <div class="question">'; //start of question div
                echo '<span class="num">';
                echo $arr[$count]["number"];
                echo '</span>';
                // echo '<i class="fa fa-chart-bar fachart" id=""></i>';
                echo '<div class="q">';
                echo $arr[$count]["question"];
                echo '</div><br>';

                //echo ' <div class="topics">';
                $topicsArray = $arr[$count]["topic"];
                $splitedTopicsArray = explode(";", $topicsArray);
                // foreach ($splitedTopicsArray as $topic) {
                //     echo '<span class="item">';
                //     echo $topic;
                //     echo '</span>';
                // }
                //echo '</div>'; //end of topic div

                // echo '<i class="fa fa-chevron-down mbfa" id="mobile_bar" onclick="showAnswer(';
                // echo "'#answer";
                // echo $arr[$count]["number"] . "'";
                // echo ')"></i>';
                echo '<div class="a container-lg" id="answer' . $arr[$count]["number"] . '">';
                echo '<hr>';
                echo $arr[$count]["answer"];
                echo '</div>';
                echo '<div class="feedback container-lg"></div>';
                echo '</div>'; //end of question div
            }
        }
    }
}

function yearSlashYear($year)
{
    echo $year - 1;
    echo "/";
    echo $year;
}

function getExamInstructions($exam_id)
{
    global $db;

    $sql = "SELECT `instructions` FROM `q_and_a`  WHERE q_and_a.id = '$exam_id' ";
    $response = @mysqli_query($db, $sql);
    if ($response) {
        while ($row = mysqli_fetch_array($response)) {
            echo $row['instructions'];
        }
    }
}

function generateCQAPSL($course_id)
{
    //Cumulative Question Appearance Score List

    $questions = [];
    global $db;

    $query = "SELECT id, course_id,	admin_id,	year,	num_questions,	questions_and_answers,	lecturers, time,	obj_thr FROM q_and_a WHERE q_and_a.course_id = '$course_id'  ORDER BY `year` ASC ";
    $response = @mysqli_query($db, $query);
    if ($response) {

        while ($row = mysqli_fetch_array($response)) {
            $json = $row['questions_and_answers'];
            $obj_thr = $row['obj_thr'];
            $questions += decodeJSONMini($json, $questions);
        }
    } else {
        echo 'No Posts Yet';
    }

    $questions = json_encode($questions);
    echo "<script>generateCQAPSL($questions, $obj_thr);</script>";
}

function decodeJSONMini($json, $questions)
{

    $innerquestion = [];

    $json_dec = json_decode($json);

    if (!is_array($json)) {

        for ($count = 0; $count < count($json_dec); $count++) {
            if (is_array($json[$count])) {
                decodeJSONMini($json[$count], $questions); //This line might have issues later, because "questions"  is not locally initialised here
            } else {
                $arr = json_decode($json, true);
                array_push($questions, $arr[$count]["question"]);
            }
        }
    }
    //    echo '<pre>';
    //     print_r($innerquestion);
    return $questions;
}
