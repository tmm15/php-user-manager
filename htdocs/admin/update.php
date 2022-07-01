<?php
require_once __DIR__ ."/classes/Auther.class.php";
require_once __DIR__ ."/classes/Users.class.php";

$user_id=isset($_POST['user_id']) ? $_POST['user_id']:"";

$auther = new Auther();
$user = new Users();
$user = $users->getDetail;
$auther->login_chk();

<!doctype html>
<html lang="en">

<head>
    $user_name = isset($_POST['user_name']) ? $_POST['user_name'] : $user['user_name'];
    $mail_address = isset($_POST['mail_address']) ? $_POST['mail_address'] : $user['mail_address'];
    $pass_word = isset($_POST['pass_word']) ? $_POST['pass_word']:"";
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ユーザー登録</title>
</head>

<body>
<h1>ユーザー登録</h1>
<?php if( !empty($errors['user_name']) || 
          !empty($errors['mail_address']) ||
          !empty($errors['pass_word']) ) { ?>
    <div class="alert alert-danger" role="alert">
         <?php foreach($errors['user_name']as $error)  {?>
            <?php echo $error; ?><br>
        <?php } ?>
        <?php foreach($errors['mail_address']as $error)  {?>
            <?php echo $error; ?><br>
        <?php } ?>
        <?php foreach($errors['pass_word']as $error)  {?>
            <?php echo $error; ?><br>
        <?php } ?>
    </div>
    <form method="POST" action="./update_check.php">
    <div class="mb-3">
         <label for="exampleInputName" class="form-label">User Name</label>
        <input type="hidden" name="user_id" value="<?php echo $user_name; ?>">
    </div>
<div class="mb-3">
    <label for="exampleInputEmail address" class="form-label">Email address</label>
    <input type="email" class="form-control <?php if(!empty($errors['mail_adress'])) echo 'border-danger text-danger'; ?>" id="exampleInputEmail1" name="mail_address" aria-describedby="emailHelp" value="<?php echo $mail_address; ?>">
</div>
<div class="mb-3">
    <label for="exampleInputPass word" class="form-label">Pass word</label>
    <input type="password" class="form-control <?php if(!empty($errors['pass_word'])) echo 'border-danger text-danger'; ?>" id="exampleInputPassWord1" name="pass_word" aria-describedby="emailHelp" value="<?php echo $pass_word; ?>">
 </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php } else { ?>
<from method="POST" action="./comp.php">
<div class="mb-3">
    <label for="exampleInputName" class="form-label">User Name</label>
    <input type="text" class="form-control" readonly id="exampleInputName" name="user_name" aria-describedby="emailHelp" value="<?php echo $user_name;?>">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" readonly id="exampleInputEmail1" name="mail_address"  aria-describedby="emailHelp" value="<?php echo $mail_address;?>">
</div>
<div class="mb-3">
    <label for="exampleInputPassWord1" class="form-label">Password</label>
    <input type="password" class="form-control" readonly id="exampleInputPassword1" name="pass_word" aria-describedby="emailHelp" value="<?php echo $pass_word;?>">
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <input type="text" class="form-control" readonly id="exampleInputName" name="user_name" aria-describedby="emailHelp" value="<?php echo $user_name;?>">
    <input type="email" class="form-control" readonly id="exampleInputEmail1" name="mail_address"  aria-describedby="emailHelp" value="<?php echo $mail_address;?>">
    <input type="password" class="form-control" readonly id="exampleInputPassWord1" name="pass_word" aria-describedby="emailHelp"  value="<?php echo $pass_word;?>">
    <button type="submit" class="btn btn-primary">Back</button>
</form>
<?php } ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>