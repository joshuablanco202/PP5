<?php include 'inc/header.php' ?>

<?php

$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

if (isset($_POST['submit'])) {

  if (empty($_POST['name'])) {
    $nameErr = 'Name is required';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if (empty($_POST['email'])) {
    $emailErr = 'Email is required';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }


  if (empty($_POST['body'])) {
    $bodyErr = 'Feedback is required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


  if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {


    date_default_timezone_set('Asia/Manila');

    $currentDate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO feedback (name, email, body, date) VALUES ('$name', '$email', '$body', '$currentDate')";
    if (mysqli_query($conn, $sql)) {

      header('Location: feedback.php');
    } else {

      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<br>
<br>
<center>
  <h2>Feedback</h2>
</center>
<p class="lead text-center">
  Your Feedback will help us improve our Business
</p>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
  <div class="mb-">
    <label for="name" class="form-label">Name</label>
    <input
      type="text"
      class="form-control"
      id="name"
      name="name"
      placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" />

    <?php if (!empty($nameErr)) { ?> <span class="text-danger"> <?php echo $nameErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"
      placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" />

    <?php if (!empty($emailErr)) { ?> <span class="text-danger"> <?php echo $emailErr; ?></span> <?php } ?>


  </div>
  <div class="mb-3">
    <label for="body" class="form-label">Feedback</label>
    <textarea
      class="form-control"
      id="body"
      name="body"
      placeholder="Enter your feedback">
      <?php echo htmlspecialchars($body); ?>
    </textarea>

    <?php if (!empty($bodyErr)) { ?> <span class="text-danger"> <?php echo $bodyErr; ?></span> <?php } ?>
  </div>
  <div class="mb-3">
    <input
      type="submit"
      name="submit"
      value="Send"
      class="btn btn-dark w-100" />
  </div>
</form>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php include 'inc/footer.php' ?>