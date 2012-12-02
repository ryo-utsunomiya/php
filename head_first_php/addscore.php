<?php
/**
 * Author: ryo
 * Date: 2012/11/23
 * Time: 10:28
 */

// Define the upload path and maximum file size constants
require_once('appvars.php');
require_once('connectvars.php');

if (isset($_POST['submit'])) {
    // Grab the score data from the POST
    $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
    $score = mysqli_real_escape_string($dbc, trim($_POST['score']));
    $screenshot = mysqli_real_escape_string($dbc, trim($_FILES['screenshot']['name']));

    if (!empty($name) && is_numeric($score) && !empty($screenshot)) {
        if (($screenshot_type == 'image/gif') || ($sreenshot_type == 'image/jpg') ||
            ($screenshot_type == 'image/pjpeg') || ($screenshot_type == 'image/png') &&
            ($screenshot_size > 0) && ($screenshot_size <= GW_MAXFILESIZE)) {

            // Move the file to the target upload folder
            $target = GW_UPLOADPATH . $screenshot;
            if (move_uploaded_file($_FILES['screenshot']['tmp_name'], $target)) {
                // Connect to the database
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                // Write the data to the database
                $query = "INSERT INTO guitarwars VALUES (date, name, score, screenshot)
                          VALUES (NOW(), '$name', '$score', '$screenshot')";
                mysqli_query($dbc, $query);
                // Confirm success with the user
                echo '<p>新しいハイスコアを追加していただきありがとうございます！</p>';
                echo '<img scr="' . GW_UPLOADPATH . $screenshot . '" alt="Score image" />';

                mysqli_close($dbc);
            }
        }
        else {
            echo 'スクリーンショットのファイルはGIF, JPEGまたはPNGイメージで、サイズは' . GW_MAXFILESIZE . 'よりも小さくなければなりません。';
        }
        // Try to delete the temporary screen shot image file
        unlink($_FILES['screenshot']['tmp_name']);
    }
}
?>