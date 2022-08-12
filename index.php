<?php  ?>

<?php
    if(isset($_GET["submit"])){
        if(!(empty($_GET["name"]) && empty($_GET["email"]) && empty($_GET["body"]))){
            $sql = "INSERT INTO feedback (name, email, feedback) VALUE ('{$_GET['name']}', '{$_GET['email']}', '{$_GET['body']}')";

            mysqli_query($connect, $sql);
            mysqli_close($connect);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="feedback_index.css">
  <title>Leave Feedback</title>
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <h1 class="logo">Feedback Form<h1>
      <div class="navbar-collapse" id="navbarNav">
        <ul class="ul-navbar">
         <li class="nav-item">
              <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/feedback.php">Feedback</a>
            </li>
        </ul>
      </div>
  </div>
</nav>

<main>
  <div class="main-container">
    <h2>Hi There !</h2>
    <p class="leave-feedback">Leave a feedback</p>
    <form action="" class="form-container" method="POST">
      <div class="lastname-container">
        <label for="name" class="form-label">Firstname</label><br>
        <input type="text" class="name" name="firstname" placeholder="Enter your first name">
      </div>
      <div class="firstname-container">
        <label for="firstname" class="form-label">Lastname</label><br>
        <input type="text" class="name" name="lastname" placeholder="Enter your last name">
      </div>
      <div class="email-container">
        <label for="email" class="form-label">Email</label><br>
        <input type="email" class="email" name="email" placeholder="Enter your email">
      </div>
      <div class="body-container">
        <label for="body" class="form-label">Feedback</label><br>
        <textarea class="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="submit-btn">
        <input type="submit" name="submit" value="send">
      </div>
    </form>
    </div>
</main>

</body>
</html>