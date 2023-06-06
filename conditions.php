<!-- 1.1 Clean your room Exercise  -->


<html>

<head>
  <title>Hi!</title>
</head>

<body> <?php
        // $possible_states = array(
        //   0 => "health hazard",
        //   1 => "filthy",
        //   2 => "dirty",
        //   3 => "clean",
        //   4 => "immaculate"
        // );

        // $room_is_filthy = $possible_states[2];

        // if ($room_is_filthy == "health hazard") {
        //   echo "Yuk, Room is health hazard : let's clean it up !";
        // } else if ($room_is_filthy == "filthy") {
        //   echo "Yuk, Room is filthy : let's clean it up !";
        // } else if ($room_is_filthy == "dirty") {
        //   echo "Yuk, Room is dirty : let's clean it up !";
        // } else if ($room_is_filthy == "clean") {
        //   echo "Nothing to do, room is neat.";
        // } else if ($room_is_filthy == "immaculate") {
        //   echo "Nothing to do, room is neat.";
        // }


        ///////////////////////////////////////////////////////////////////////


        // $now = (date("H:i:s"));
        // // How to get the current time in PHP ? Google is your friend ;-)

        // echo $now;
        // if ($now >= "05:00:00" and $now <= "09:00:00") {
        //   echo "Good morning !";
        // } else if ($now >= "09:00:01" and $now <= "12:00:00") {
        //   echo "Good day !";
        // } else if ($now >= "12:00:01" and $now <= "16:00:00") {
        //   echo "Good afternoon !";
        // } else if ($now >= "16:00:01" and $now <= "21:00:00") {
        //   echo "Good evening !";
        // } else if ($now >= "1:00:01" and $now <= "05:49:59") {
        //   echo "Good night !";
        // }

        ///////////////////////////////////////////////////
        // 3. "Different greetings according to age" Exercise



        // if (isset($_GET["age"])) { // Form processing

        //   if (isset($_GET["gender"])) {

        //     if ($_GET["age"] < 12) {

        //       if ($_GET["gender"] == "Man") {

        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello mister Kiddo !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha mister Kiddo !';
        //         }
        //       } else if ($_GET["gender"] == "Woman") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello miss Kiddo !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha miss Kiddo !';
        //         }
        //       }
        //     } else if ($_GET["age"] >= 12 and $_GET["age"] <= 18) {
        //       if ($_GET["gender"] == "Man") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello mister Teen !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha mister Teen !';
        //         }
        //       } else if ($_GET["gender"] == "Woman") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello miss Teen !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha miss Teen !';
        //         }
        //       }
        //     } else if ($_GET["age"] >= 18 and $_GET["age"] <= 115) {
        //       if ($_GET["gender"] == "Man") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello mister Adult !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha mister Adult !';
        //         }
        //       } else if ($_GET["gender"] == "Woman") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello miss Adult !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha miss Adult !';
        //         }
        //       }
        //     } else if ($_GET["age"] >= 115) {
        //       if ($_GET["gender"] == "Man") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello mister Robot !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha mister Robot !';
        //         }
        //       } else if ($_GET["gender"] == "Woman") {
        //         if ($_GET["language"] == "Yes") {
        //           echo 'Hello miss Robot !';
        //         } else if ($_GET["language"] == "No") {
        //           echo 'Aloha miss Robot!';
        //         }
        //       }
        //     }
        //   }
        // } 
        //////////////////////////////////////////////////:
        // if (isset($_GET["age"])) {


        //   if (isset($_GET["gender"])) {
        //     if ($_GET["gender"] == "Man") {
        //       echo "Sorry you don't fit the criteria";
        //     } else if ($_GET["gender"] == "Woman") {
        //       if ($_GET["age"] >= 21 and $_GET["age"] <= 40) {
        //         echo "welcome to the team !";
        //       } else if ($_GET["age"] <= 21 or $_GET["age"] >= 40) {
        //         echo "Sorry you don't fit the criteria";
        //       }
        //     }
        //   }
        // }
        //////////////////////////////////////////////////////
        // $welcomeMessage = "Sorry you don't fit the criteria";

        // if (isset($_GET["age"]) && isset($_GET["gender"])) {
        //   if ($_GET["gender"] == "Woman" && $_GET["age"] >= 21 && $_GET["age"] <= 40) {
        //     $welcomeMessage = "Welcome to the team!";
        //   }
        //   echo $welcomeMessage;
        // }

        //////////////////////////
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          if (isset($_POST["grade"])) {
            $grade = (int)$_POST["grade"];

            if ($grade < 4) {
              $message = "This work is really bad. What a dumb kid!";
            } else if ($grade >= 5 && $grade <= 9) {
              $message = "This is not sufficient. More studying is required.";
            } else if ($grade === 10) {
              $message = "Barely enough!";
            } else if ($grade >= 11 && $grade <= 14) {
              $message = "Not bad!";
            } else if ($grade >= 15 && $grade <= 18) {
              $message = "Bravo, bravissimo!";
            } else if ($grade === 19 || $grade === 20) {
              $message = "Too good to be true: confront the cheater!";
            } else {
              $message = "Invalid grade. Please enter a valid grade between 0 and 20.";
            }

            echo $message;
          }
        }

        ?>

  <!-- <form method="get" action="conditions.php">
    <label for="age">Enter your age:</label>
    <input type="text" name="age">
    <label for="man">Man:</label>
    <input type="radio" id="Man" name="gender" value="Man">
    <label for="woman">Woman:</label>
    <input type="radio" id="Woman" name="gender" value="Woman">

    <p> Do you speak English ? </p>
    <label for="Yes">Yes:</label>

    <input type="radio" id="yes" name="language" value="Yes">
    <label for="No">No:</label>
    <input type="radio" id="no" name="language" value="No">
    <input type="submit">

  </form> -->

  <!-- <form method="get" action="conditions.php">
    <label for="age">Enter your age:</label>
    <input type="text" name="age">

    <label for="age">Enter your name:</label>
    <input type="text" name="name">

    <label for="man">Man:</label>
    <input type="radio" id="Man" name="gender" value="Man">
    <label for="woman">Woman:</label>
    <input type="radio" id="Woman" name="gender" value="Woman">

    <input type="submit">

  </form> -->

  <form method="POST" action="?">
    <label for="grade">Enter the student's grade (between 0 and 20):</label><br>
    <input type="number" id="grade" name="grade" min="0" max="20" required><br><br>
    <input type="submit" value="Submit">
  </form>


</body>

</html>