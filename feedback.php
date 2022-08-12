
<?php
    $sql = "SELECT * FROM feedback";
    $result = mysqli_query($connect, $sql);
    $feedback_array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="feedback_index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Feedbacks</title>
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
  <div class="feedback-container">
        <h2>Feedbacks</h2>
        <div class="card my-3 w-75">
            <div class="card-body text-center">
                No feedbacks yet!!
            </div>
        </div>

        <div class="feedback-space">
            
            <div class="content">
                <div class="user-info">
                    <h6>Ramanan<span>Jul 04</span></h6>
                </div>
                Hi There
            </div>
            <div class="edit-delete">
                <i class="fa-solid fa-square-pen"></i>
                <i class="fa-solid fa-trash-can"></i>
            </div>
        </div>
  </div>
</main>

</body>
</html>