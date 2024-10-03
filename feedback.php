<?php include 'inc/header.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css" />
  <title>Document</title>
</head>

<body>
  <div class="container">
    <form action="action_page.php">
      <label for="fname">First Name</label>
      <input
        type="text"
        id="fname"
        name="firstname"
        placeholder="Your name.." />

      <label for="lname">Last Name</label>
      <input
        type="text"
        id="lname"
        name="lastname"
        placeholder="Your last name.." />

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Philippines</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>

      <label for="subject">Subject</label>
      <textarea
        id="subject"
        name="subject"
        placeholder="Write something.."
        style="height: 200px"></textarea>

      <input type="submit" value="Submit" />
    </form>
  </div>
</body>
<?php include 'inc/footer.php' ?>

</html>