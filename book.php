<?php include 'inc/header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Audiowide" />
</head>

<body>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3 mt-5">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="connect.php" method="post">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="fullName"
                                name="fullName" />
                        </div>
                        <div class="form-group">
                            <label for="tourTo">Tour Destination</label>
                            <input
                                type="text"
                                class="form-control"
                                id="tourTo"
                                name="tourTo" />
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input
                                        type="radio"
                                        name="gender"
                                        value="m"
                                        id="male" />Male</label>
                                <label for="female" class="radio-inline"><input
                                        type="radio"
                                        name="gender"
                                        value="f"
                                        id="female" />Female</label>
                                <label for="others" class="radio-inline"><input
                                        type="radio"
                                        name="gender"
                                        value="o"
                                        id="others" />Others</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="text"
                                class="form-control"
                                id="email"
                                name="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input
                                type="password"
                                class="form-control"
                                id="password"
                                name="password" />
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number</label>
                            <input
                                type="number"
                                class="form-control"
                                id="number"
                                name="number" />
                        </div>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'inc/footer.php' ?>

</html>