<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/get_package_register.php');?>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/header.php');?>
<?php session_start(); if (!isset($_SESSION["username"])) header('Location: '."/admin/index.php")?>
  <div class="aviana-content">
    <div class="container">
      <h3><b>IRS Cloud Orders</b> <a href="/admin/logout.php" class="btn btn-outline-primary">Logout</a></h3>
      <div class="request_table">
        <table class="table table-hover table-responsive">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Status</th>
              <th scope="col">Paket</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">Kontak Pemesan</th>
              <th scope="col">Email Pemesan</th>
              <th scope="col">Alamat Pemesan</th>
              <th scope="col">Kota Alamat Pemesan</th>
              <th scope="col">Nama Bisnis</th>
              <th scope="col">Slogan Bisnis</th>
              <th scope="col">Kontak Bisnis</th>
              <th scope="col">Alamat Bisnis</th>
              <th scope="col">Logo Bisnis</th>
              <th scope="col">Warna Tema</th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = mysqli_fetch_array($result)){?>        
              <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["status"]?></td>
                <td><?=$row["package_choice"]?></td>
                <td><?=$row["person_name"]?></td>
                <td><?=$row["person_phone"]?></td>
                <td><?=$row["person_email"]?></td>
                <td><?=$row["person_address"]?></td>
                <td><?=$row["person_city"]?></td>
                <td><?=$row["business_name"]?></td>
                <td><?=$row["business_slogan"]?></td>
                <td><?=$row["business_phone"]?></td>
                <td><?=$row["business_address"]?></td>
                <td><a href="<?=$upload_dir.$row["app_logo_path"]?>"><?=$row["app_logo_path"]?></a></td>
                <td><?=$row["app_color_theme"]?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php require_once('../footer.php');?>
