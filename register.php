<?php
    require_once("db_login.php");
    require_once("Mail.php");

    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = hash('sha512', $_REQUEST['password']);


    if ($email == "") $email = "a";
    $result = $dbc->query("SELECT id FROM users WHERE email = '$email'");

    if($result->num_rows == 0) {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

        if ($dbc->query($sql) === TRUE) {
            $sql = $dbc->query("SELECT ID FROM users WHERE email = '$email'");
            $row = mysqli_fetch_array($sql);
            $uid = $row['ID'];
            echo "New user created successfully, verification e-mail sent.";
            $mail->addAddress($email, $username);
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Verificate your account in my project!';
            $mail->Body    = "Hey $username! Thank you for signing up! <br>
                              Here is the link to the verification page: <br>
                              http://localhost/PHP%20Playground/verification.php?ID=$uid";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if($mail->send()) echo "\nMessage sent successfully";
        }else {
            echo "Error: " . $sql . "<br>" . $dbc->error;
        }
    } else {

        echo "Sorry, but this email is already in-use";
    }
    $dbc->close();
?>
