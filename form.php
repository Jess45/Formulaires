<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 19/03/19
 * Time: 10:13
 */
    if($_POST) {
        //not empty
        //at least 6 chars long
        $errors = array();

        //start validation

        if (empty($_POST['firstName'])) {
            $errors['first_name_empty'] = 'There is no name !';
        }
        if (strlen($_POST['firstName']) < 2) {
            $errors['first_name_small'] = 'You must fill in your name !';
        }
        if (strlen($_POST['lastName']) < 2) {
            $errors['last_name_small'] = 'You must fill in your name !';
        }
        if (empty($_POST['lastName'])) {
            $errors['last_name_empty'] = 'There is no last name !';
        }
        if (empty($_POST['comment'])) {
            $errors['comment_empty'] = 'There is no message !';
        }
        if (empty($_POST['password'])) {
            $errors['password_empty'] = 'You must fill in your password !';
        }
        if (strlen($_POST['password']) < 8)
        {
            $errors['password_short'] = 'Your password is not long enough';
        }
        if(empty($_POST['email']))
        {
            $errors['email_empty'] = 'You must fill in your email !';
        }
        if (strlen($_POST['email']) < 6)
        {
            $errors['email_short'] = 'Your email is not long enough';
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email1'] = "L'adresse e-mail n'est pas valide !";
        }
        if (empty($_POST['phone']))
        {
            $errors['phone_empty'] = 'You must fill in your phone number !';
        }

//$errors['phone']= 'Please enter a valid phone number';


//$errors['email']= 'Your email is not valid';


//Check errors

        if (count($errors) == 0) {
            //redirect to sucess page
            header("Location: sucess.php");
            exit();
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mon formulaire</title>
  </head>
  <body>


    <div class="container">

        <h1>Mon formulaire</h1>

    <form method="POST" action="form.php" novalidate>


        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName"
                   value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>" placeholder="First Name" required>
            <p><?php if(isset($errors['first_name_empty'])) echo $errors['first_name_empty'];?></p>
            <p><?php if(isset($errors['first_name_small'])) echo $errors['first_name_small'];?></p>
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName"
                   value="<?php if(isset($_POST['lastName'])) echo $_POST['lastNameName']; ?>" placeholder="Last Name" required>
            <p><?php if(isset($errors['last_name_empty'])) echo $errors['last_name_empty'];?></p>
            <p><?php if(isset($errors['last_name_small'])) echo $errors['last_name_small'];?></p>
        </div>

        <div class="form-group">
            <label for="phone">Enter your phone number:</label>
            <input type="tel" id="phone" name="phone" pattern="[-+]?[0-9]" min="10" max="10" required>
            <p><?php if(isset($errors['phone_empty'])) echo $errors['phone_empty'];?></p>
        </div>

        <div class="form-group">
            <label for="select">Select a subject</label>
            <select class="form-control" id="select" name="select">
                <option>I have no idea</option>
                <option>I am bored</option>
                <option>I am hungry</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Your message</label>
            <textarea name="comment" rows="5" cols="120"
                      value="<?php if(isset($_POST['comment'])) echo $_POST['comment']; ?>" placeholder="Type your message here" required></textarea>
            <p><?php if(isset($errors['comment_empty'])) echo $errors['comment_empty'];?></p>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  name="email"
                   value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="Enter email" required>
            <p><?php if(isset($errors['email_empty'])) echo $errors['email_empty'];?></p>
            <p><?php if(isset($errors['email_short'])) echo $errors['email_short'];?></p>
            <p><?php if(isset($errors['email1'])) echo $errors['email1'];?></p>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                   placeholder="Password" required>
            <p><?php if(isset($errors['password_empty'])) echo $errors['password_empty'];?></p>
            <p><?php if(isset($errors['password_short'])) echo $errors['password_short'];?></p>
        </div>

        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
    </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

    </script>
  </body>
</html>
