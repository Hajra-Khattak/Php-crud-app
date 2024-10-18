<?php
require_once "layout/User/header.php";
require_once "layout/User/nav.php";
require_once dirname(__FILE__)."/action/form_action.php";

?>

<div class="container">


<h2 class="text-center pt-3">New Client</h2>
<form class="bg-warning p-5 shadow m-5 mt-3 pb-5   rounded" action="/myshop/action/form_action.php" method="POST">
<?php

// if(!empty($errormessage)){
//   echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
//     {$errormessage}
//  </div>";
// }

?>
<div class="mb-2">
    <label for="yourname" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="yourname" value="<?php echo $name; ?>">
  </div>
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $email; ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-2">
    <label for="yourphone" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="yourphone" value="<?php echo $phone; ?>">
  </div>
  <div class="mb-2">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="address" value="<?php echo $address; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password; ?>">
  </div>
  <?php

if(!empty($successmessage)){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    {$successmessage}
 </div>";
}

?>
  <div class="mb-3 float-end ">
      <button type="submit" name="submit" class="btn btn-primary px-3 fs-6  ">Submit</button>
      <a href="dashboard.php" class="btn btn-outline-primary px-3 fs-6">Cancel</a>
  </div>
</form>
</div>

<?php
require_once "layout/User/footer.php";

?>