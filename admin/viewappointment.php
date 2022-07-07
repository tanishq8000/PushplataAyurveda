<?php
// include "include/database.php";
include "include/header.php";
?>
<?php
// sql
$sql = "SELECT * FROM `tbl_appointment`";
$res = mysqli_query($conn, $sql);
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h4 class="text-primary">ALL Appointment</h4>
        <table class="table table-responsive table-striped table-dark ">
  <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Date/Time</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Transtion Id</th>
        <th scope="col">Phoneno</th>
    </tr>
  </thead>
 
  <tbody>
  <?php
while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
      <th style="width: 231px;" scope="row">
      <?php echo $row['name']; ?></th>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['created_date']; ?></td>
      <td><?php echo $row['adate']; ?></td>
      <td><?php echo $row['transtionid']; ?></td>
      <td><?php echo $row['phoneno']; ?></td>
     </tr>
      <?php
// close else
    }

    ?>
 
  </tbody>
</table>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "include/footer.php";?>

      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->

</body>

</html>
