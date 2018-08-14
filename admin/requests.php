<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/get_package_register.php');?>
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/change_status_package_register.php');?>

<?php require_once('./header.php');?>
<?php session_start(); if (!isset($_SESSION["username"])) header('Location: '."/admin/index.php")?>
  <div class="aviana-admin-content">
    <div class="container">
      <h3>
        <b>IRS Cloud Orders</b>
      </h3>
      <form method="POST">
        <select id="newStatus" name="newStatus">
            <option value="PENDING">PENDING</option>
            <option value="PROCESS">ON PROCESS</option>
            <option value="DONE">DONE</option>
            <option value="CANCELLED">CANCELLED</option>
          </select>
        <button type="submit" class="btn btn-outline-primary">Ubah Status</button>
        <div class="request-table">
          <?=$resultMessage?>
          <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col"></th>
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
                <th scope="col">Referal</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while($row = mysqli_fetch_array($result)){
                  if ($row["status"]=='PENDING')
                    $statusBadge = '<span class="badge badge-warning">'.$row["status"].'</span>';
                  else if ($row["status"]=='PROCESS')
                    $statusBadge = '<span class="badge badge-primary">'.$row["status"].'</span>';
                  else if ($row["status"]=='DONE')
                    $statusBadge = '<span class="badge badge-success">'.$row["status"].'</span>';
                  else if ($row["status"]=='CANCELLED')
                    $statusBadge = '<span class="badge badge-danger">'.$row["status"].'</span>';
                    ?>
                  <tr>
                    <td><input type="checkbox" id="tickRecord" name="tickRecord[]" value="<?=$row["id"]?>"/></td>
                    <td><?=$row["id"]?></td>
                    <td><?=$statusBadge?></td>
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
                    <td><?=$row["referal"]?></td>
                  </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </form>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item <?php echo !isset($_GET["page"]) || $_GET["page"]<2 ? "disabled": NULL?>"><a class="page-link" href="?page=<?php echo !isset($_GET["page"]) ? 1 : (intval($_GET["page"]))-1 ?>">Previous</a></li>
          <li class="page-item disabled"><a class="page-link" href="#"><?=isset($_GET["page"])? intval($_GET["page"]) : 1 ?></a></li>
          <li class="page-item"><a class="page-link" href="?page=<?php echo !isset($_GET["page"]) ? 2 : (intval($_GET["page"]))+1 ?>">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
<?php require_once('./footer.php');?>
