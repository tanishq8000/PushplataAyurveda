<?php
include "include/header.php";
?>
<?php

if (isset($_GET['mode']) && $_GET['mode'] == 'edit') {

    if (isset($_SESSION['username'])) {
        $permission=$_SESSION['username'];
    }
    $id = str_replace("'","",$_GET['id']);
    $sql = "select * from tbl_blogs where id=$id";

    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_assoc($query);
} else {
    $result['blog_title'] = '';
    $result['blog_desc'] = '';
    $result['blog_img'] = '';
    $result['id'] = '';

}
?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->


        <!-- Begin Page Content -->
<div class="container-fluid">

        <h2 class="text-primary  text-center">Blog</h2>

        <form method="POST">

        <div class="form-group">

            <label for="">Title</label>
            <input type="text"   class="form-control" id="blog_title" aria-describedby="" value="<?php echo $result['blog_title']; ?>" placeholder="Enter Title Here!">

        </div>
        <div class="form-group">

            <label for="">Description</label>
            <textarea name="description"  class="form-control" id="blog_desc" placeholder="Enter Description" cols="5" rows="2" placeholder="Enter OG Description"><?php echo $result['blog_desc']; ?></textarea>

        </div>

        <div class="custom-file">
            <input type="file" name="files" class="custom-file-input" id="blog_img" value="<?php echo $result['blog_img']; ?>" >
                <label  class="custom-file-label" for="customFile">Choose file</label>
                    <?php
if ($result['blog_img'] !== '') {
    $img = $result['blog_img'];
    echo '<img style="max-height: 168px;display: block;padding: 0 4px;margin-top: 18px;height: 135px;" src="upload/blog/' . $img . ' "alt=""><br><br>';
}
?>


            <input type="hidden" class="hide" name="files" id="blog_images" value="<?php echo $result['blog_img']; ?>">

            <input type="hidden" class="hideid" name="" value="<?php echo $result['id']; ?>">

        </div>
        <button style="margin-top: 38px;padding: 11px 25px 8px 25px;" type="submit" id="submitblog" class="btn btn-primary">Save</button>

        </form>

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
    <script src="js/blog.js"></script>

</body>
</html>
