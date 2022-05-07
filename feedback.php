<?php
if (isset($_POST['submit'])) 
{
    $gmail=$_POST['gmail'];
    $feedback = $_POST['feedback']; 
    $t = time();
    $file = fopen('feedback.txt', 'a');
    fwrite($file, "{'mailid:'$gmail', 'feedback':'$feedback','day':'$t'},\n");
    fclose($file);
}
else{
    echo "failed.";
}
// $file = fopen('feedback.txt', 'r');
// echo json_encode($file);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieTime</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: white;">
    <!-- navbar -->
    <?php require('navbar.php'); ?>
    <!--categories Bar  -->
    <?php require('catbar.php'); ?>
    <h3 class="text-center">Feedback</h3><br>
   
    <form action="feedback.php" method="post" class="text-center">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="sm-form-control" name="gmail" id="exampleInputEmail1" aria-describedby="emailHelp" require>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="feedback" class="form-label">feedback</label>
            <input type="txt" class="sm-form-control" id="feedback" name="feedback" require>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>


    <!-- Movie Card -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>

</html>