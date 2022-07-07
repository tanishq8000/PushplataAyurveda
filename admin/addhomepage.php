<?php
include "include/header.php";
?>
<?php

if (isset($_GET['mode']) && $_GET['mode'] == 'edit') {

    $id = str_replace("'","",$_GET['id']);
    $sql = "select * from tbl_homepageslider where id=$id";

    $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_assoc($query);
} else {
    $result['imgurl'] = '';
    $result['id'] = '';
}
?>
<!-- End of Sidebar -->

<!-- Content Wrapper -->


<!-- Begin Page Content -->
<div class="container-fluid">

    <h2 class="text-primary  text-center">Add Slider Images</h2>

    <form method="POST">
        <div class="heading" style="font-size: 23px;margin-bottom: 13px;">Upload Images in 1345x185</div>
        <div class="custom-file">
            <input type="file" name="files" class="custom-file-input" id="blog_img"
                value="<?php echo $result['imgurl']; ?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
            <?php
if ($result['imgurl'] !== '') {
    $img = $result['imgurl'];
    echo '<img style="max-height: 168px;display: block;padding: 0 4px;margin-top: 18px;height: 135px;" src="upload/blog/' . $img . ' "alt=""><br><br>';
}
?>
            <input type="hidden" class="hide" name="files" id="blog_images" value="<?php echo $result['imgurl']; ?>">

            <input type="hidden" class="hideid" name="" value="<?php echo $result['id']; ?>">
        </div>
        <button style="margin-top: 38px;padding: 11px 25px 8px 25px;" type="submit" id="submitblog"
            class="btn btn-primary">Save</button>
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
<script src="js/slider.js"></script>

</body>

</html>