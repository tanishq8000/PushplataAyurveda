<?php
// include "include/database.php";
include "include/header.php";
?>
<?php
// sql
$sql = "SELECT * FROM `tbl_blogs`";
$res = mysqli_query($conn, $sql);
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
        <h4 class="text-primary">ALL Blogs</h4>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
        <th scope="col">Title</th>
        <th scope="col">Date/Time</th>
        <th scope="col">Blog Image</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
 
  <tbody>
 <!-- This query for get all data to pages table!! -->
 <?php

while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <tr>
      <th style="width: 231px;" scope="row"><?php echo $row['blog_title']; ?></th>
      <td><?php echo $row['created_at']; ?></td>
      <td><img   style="width: 156px;height:50px;" src="upload/blog/<?php echo $row['blog_img']; ?>" alt=""></td>
      <!-- check session their-->
       <td> <a  href="addblog.php?id=<?php echo $row['id']; ?>&mode=edit"><button class="btn btn-success">Edit</button></a></td>
      <td> <a href="delete.php?id=<?php echo $row['id']; ?>&mode=blogs" onclick="return confirm(' you want to delete?');"><button class="btn btn-danger">Delete</button></a></td>
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
