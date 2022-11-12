<style>
    .error{
        color: red;
    }
</style>
<div class="row">
    <div class="row frmtitle">
        <h1>Thêm mới sản phẩm</h1>

    </div>
    <div class="row frmcontent">
        <form action="../admin/index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Danh mục <br>
                <select name="iddm" id="">
                    <option value="123" >hello</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="">
            </div>
            <div class="error">
                <?php
                if (isset($error['tensp'])) {
                    echo $error['tensp'];
                }
                ?>
            </div>
            <div class="row mb10">
                Giá sản phẩm <br>
                <input type="text" name="giasp" id="">
            </div>
            <div class="error">
                <?php
                if (isset($error['giasp'])) {
                    echo $error['giasp'];
                }
                ?>
            </div>
            <div class="row mb10">
                Hình sản phẩm <br>
                <input type="file" name="hinh" id="">
            </div>
            <div class="row mb10">
                Mô tả sản phẩm <br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="error">
                <?php
                if (isset($error['mota'])) {
                    echo $error['mota'];
                }
                ?>
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới" name="themmoi" id="">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>

        </form>
    </div>
</div>
</div>
