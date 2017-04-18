<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function getloginform()
{
  ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <div class="form-group">
  <label for="password">Enter the Administrative Password:</label>
  <input id="password" type="password" class="form-control"  name="password" placeholder="Administrative Password"/>
  <input type="submit" value="Login" class="btn btn-primary btn-block" name="Login"/>
  </div>
  </form>
  <?php
}

function getdata()
{
	?>
	<form action="uploader.php" class="dropzone"></form>
    <?php
 }

 ?>
