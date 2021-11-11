<html>
    <head>
        <title>Respond</title>
        <link rel="stylesheet">
    </head>

    <body>
        <?php
        $name = $_POST["name"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        $email = $_POST["email"];
        $hobbies = $_POST["hobbies"];
        $gender = $_POST["gender"];
        $dateofbirth = $_POST["dateofbirth"];
        $phone = $_POST["phone"];
        $web = $_POST["web"];

        print '<div class="result">';
        print "<p>Name: <b>$name</b></p>";
        print "<p>Class: <b>$class</b></p>";
        print "<p>University: <b>$university</b></p>";
        print "<p>Email: <b>$email</b></p>";
        print "<p>Social network: <b>$web</b></p>";
        if(!empty($hobbies)){
            print "Hobbies: <br>";
            foreach($hobbies as $value){
                print " - ".$value.'<br>';
            }
        }
        if($gender == "Male"){
            print "<p>Gender: <b>Male</b></p>";
        }elseif($gender == "Female"){
            print "<p>Gender: <b>Female</b></p>";
        }
        print "<p>Date of birth: <b>$dateofbirth</b></p>";
        print "<p>Phone: <b>$phone</b></p>";
        print '</div>';
        ?>
    </body>
</html>