<div class="sidebar left-sidebar">
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="floatleft">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <ul id="accordion" class="panel-group clearfix">
                <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>
                    <li class="panel">
                        <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse<?=$i?>">
                            <div class="medium-a">
                                <b><?= $data_danhmuc[$i-1]['TenDM'] ?></b>
                            </div>
                        </div>
                        <div class="paypal-dsc panel-collapse collapse" id="collapse<?=$i?>">
                            <div class="normal-a">
                                <?php foreach ($row as $value) { ?>
                                    <a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php $i++;
             } ?>
            </ul>
        </div>
    </div>
    <div class="s-side-text">
        <div class="sidebar-title">
            <h4>Giá</h4>
        </div>
        <div class="range-slider clearfix">
            <form action="index.php?act=shop" method="post">
                <label><span>Giá: </span> <input type="text" id="amount" readonly  /></label>
                <input type="hidden" id="amount2" name="shop" />
                <div id="slider-range"></div></br>
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
    
</div>