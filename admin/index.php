<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/login.php');?>
<?php require_once('../head.php');?>

  <div class="aviana-content">
    <div class="container">
      <div class="aviana-login">
        <div class="row">
          <div class="col-md-4 offset-md-4">
            <div class="card">
              <div class="card-header text-center">
                <img src="/IRS-CLOUD.png" height="35" alt="">
              </div>
              <div class="card-body">
                <?php echo $resultMessage? $resultMessage: NULL ?>
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $_POST["username"]?>" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_POST["password"]?>" required>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block text-center">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once('./footer.php');?>
