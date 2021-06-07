<?php
    ob_start();
    $post_method = (string)$_GET["method"];
    if($post_method == "getInfo") {

        $conn = mysqli_connect("127.0.0.1", "root", "root", "autoschool");
        $result = array();

        if(!$conn) {
            echo "{\"status\" : \"error-while-connecting\"}";
            exit();
        }

        $rq = mysqli_query($conn, (string)"SELECT * FROM adresses;");
        // $json = json_encode(mysqli_fetch_row($rq));
        while($row = mysqli_fetch_row($rq)) {
            array_push($result, json_encode($row));
        }
        // var_dump($result);

        //for($i = 0; $i < count(mysqli_fetch_row($rq)); $i++) {
        //echo mysqli_fetch_row($rq)[$i] . "<br>";
        //}

        if(!$rq) {
            // echo "<br> Error while executing query: <br>$sql<br>" . mysqli_error($conn);
            echo "{\"status\" : \"error-while-executing-query\"}" . mysqli_error($conn);
        } else {
            // echo "Written!";
            echo "{\"status\" : \"success\", \"data\" : " . json_encode($result) . "}";
            // header("Location: http://localhost");
        }

    } else if($post_method == "post_trial"){

        $conn = mysqli_connect("127.0.0.1", "root", "root", "autoschool");

        if(!$conn) {
            echo "{\"status\" : \"error-while-connecting\"}";
            exit();
        }

        // var_dump($_GET);
        $fio = (string)$_GET["fio"];
        $phone = (string)$_GET["phone"];
        $mail = (string)$_GET["mail"];
        $age = (int)$_GET["age"];

        $rq = mysqli_query($conn, (string)"INSERT INTO trial_lesson (FIO, age, phone_number, email) VALUES (\"" . $fio . "\", " . $age . ", \"" . $phone . "\", \"" . $mail . "\");");

        if(!$rq) {
            // echo "<br> Error while executing query: <br>$sql<br>" . mysqli_error($conn);
            echo "{\"status\" : \"error-while-executing-query\"}" . mysqli_error($conn);
        } else {
            // echo "Written!";
            echo "{\"status\" : \"success\"}";
            header("Location: http://localhost/index.php");
        }


    } else if ($post_method == "getEmails") {
        $conn = mysqli_connect("127.0.0.1", "root", "root", "autoschool");

        if(!$conn) {
            echo "{\"status\" : \"error-while-connecting\"}";
            exit();
        }

        $emails = mysqli_query($conn, (string)"SELECT email FROM `trial_lesson`");
        $emailsJSON = [];

        if ($emails) {
            while ($row = $emails->fetch_array(MYSQLI_ASSOC)) {
                $emailsJSON[] = $row['email'];
            }
        }

        echo json_encode($emailsJSON);
    } else {
        echo "{\"status\" : \"no-attrs\"}";
    }

    exit();
?>