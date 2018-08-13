<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/package_register.php');?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>

<div class="aviana-content">
    <div class="aviana-package-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php echo $resultMessage? $resultMessage : NULL?>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">Daftar Paket:
                <b>IRS Cloud Standard</b>
              </div>
              <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="personName">Nama Lengkap</label>
                    <input type="text" class="form-control" id="personName" name="personName" value="<?php echo $_POST["personName"]?>" required>
                  </div>
                  <div class="form-group">
                    <label for="personAddress">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="personAddress" name="personAddress" value="<?php echo $_POST["personAddress"]?>">
                  </div>
                  <div class="form-group">
                    <label for="personCity">Kota</label>
                    <input type="text" class="form-control" id="personCity" name="personCity" value="<?php echo $_POST["personCity"]?>">
                  </div>
                  <div class="form-group">
                    <label for="personPhone">No. Kontak Pribadi</label>
                    <input type="text" class="form-control" id="personPhone" name="personPhone" value="<?php echo $_POST["personPhone"]?>" required>
                  </div>
                  <div class="form-group">
                    <label for="personEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="personEmail" name="personEmail" value="<?php echo $_POST["personEmail"]?>">
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label for="businessName">Nama Bisnis</label>
                    <input type="text" class="form-control" id="businessName" name="businessName" value="<?php echo $_POST["businessName"]?>" required>
                  </div>
                  <div class="form-group">
                    <label for="buseinessSlogan">Slogan Bisnis (Optional)</label>
                    <input type="text" class="form-control" id="buseinessSlogan" name="buseinessSlogan" value="<?php echo $_POST["buseinessSlogan"]?>">
                  </div>
                  <div class="form-group">
                    <label for="businessAddress">Alamat Bisnis</label>
                    <input type="text" class="form-control" id="businessAddress" name="businessAddress" value="<?php echo $_POST["businessAddress"]?>">
                  </div>
                  <div class="form-group">
                    <label for="businessPhone">No. kontak Bisnis</label>
                    <input type="text" class="form-control" id="businessPhone" name="businessPhone" value="<?php echo $_POST["businessPhone"]?>" required>
                  </div>
                  <hr/>
                  <div class="form-group">
                    <label for="appLogo">Logo untuk Mobile App</label>
                    <input type="file" class="form-control btn btn-regular" id="appLogo" name="appLogo">
                  </div>
                  <div class="form-group">
                    <label for="appColorTheme">Warna theme App</label>
                    <input type="text" class="form-control" id="appColorTheme" name="appColorTheme"  value="<?php echo $_POST["appColorTheme"]?>">
                  </div>
                  <div class="form-group">
                    <label for="irsPackage">Paket IRS Cloud yang dipilih</label>
                    <select type="text" class="form-control" id="irsPackage" name="irsPackage" required>
                      <option value="basic" <?php echo $_GET["package"]=="basic" || $_POST["irsPackage"]=="basic"? "selected=\"selected\"": NULL?>>IRS Basic</option>
                      <option value="standard" <?php echo $_GET["package"]=="standard" || $_POST["irsPackage"]=="standard"? "selected=\"selected\"": NULL?>>IRS Standard</option>
                      <option value="premium" <?php echo $_GET["package"]=="premium" || $_POST["irsPackage"]=="premium"? "selected=\"selected\"": NULL?>>IRS Premium</option>
                    </select>
                  </div>
                  <button type="submit" class="btn aviana-btn btn-outline-orange">Order</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
          <div class="card package-basic">
              <div class="card-body">
                <h5 class="card-title package-text">
                  <b>IRS Cloud Basic</b>
                </h5>
                <p class="card-text">IRS Basic adalah paket IRS Cloud software yang mencakup:
                  <br/>
                  <ul>
                    <li>Share Server</li>
                    <li>Mobile App Android</li>
                    <li>Max 1000 Trx PerHari</li>
                    <li>2 Suplier</li>
                  </ul>
                  <p class="package-text">Harga:
                    <b>
                      <sup>Rp</sup>250.000/bulan</b>
                  </p>
                </p>
                <a href="#" class="btn aviana-btn package-submit-btn">Get Support</a>
              </div>
            </div><br/>
            <div class="card package-standard">
              <div class="card-body">
                <h5 class="card-title package-text">
                  <b>IRS Cloud Standard</b>
                </h5>
                <p class="card-text">IRS Standard adalah paket IRS Cloud software yang mencakup:
                  <br/>
                  <ul>
                    <li>Dedicated Server</li>
                    <li>Mobile App Android</li>
                    <li>Max 2000 Trx PerDay</li>
                    <li>2 Suplier</li>
                  </ul>
                  <p class="package-text">Harga:
                    <b>
                      <sup>Rp</sup>499.000/bulan</b>
                  </p>
                </p>
                <a href="#" class="btn aviana-btn package-submit-btn">Get Support</a>
              </div>
            </div><br/>
            <div class="card package-premium">
              <div class="card-body">
                <h5 class="card-title package-text">
                  <b>IRS Cloud Premium</b>
                </h5>
                <p class="card-text">IRS Premium adalah paket IRS Cloud software yang mencakup:
                  <br/>
                  <ul>
                    <li>Dedicated Server</li>
                    <li>Mobile App Android</li>
                    <li>Max 3000 Trx PerHari</li>
                    <li>3 Suplier</li>
                  </ul>
                  <p class="package-text">Harga:
                    <b>
                      <sup>Rp</sup>999.000/bulan</b>
                  </p>
                </p>
                <a href="#" class="btn aviana-btn package-submit-btn">Get Support</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require_once('../footer.php');?>
