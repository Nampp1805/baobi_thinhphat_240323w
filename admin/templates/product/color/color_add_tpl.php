<?php
    if(isset($_REQUEST['id_product'])){
        $link_tam = "&id_product=".$_REQUEST['id_product'];
        $linkMan = "index.php?com=product&act=man_color&type=".$type.$link_tam."&p=".$curPage;
        $linkSave = "index.php?com=product&act=save_color&type=".$type.$link_tam."&p=".$curPage;
    } else {
        $linkMan = "index.php?com=product&act=man_color&type=".$type."&p=".$curPage;
        $linkSave = "index.php?com=product&act=save_color&type=".$type."&p=".$curPage;
    }
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active">Chi tiết <?=$config['product'][$type]['title_main_color']?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <form class="validation-form" novalidate method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="card-footer text-sm sticky-top">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check" disabled><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
        </div>

        <?=$flash->getMessages('admin')?>

        <div class="card card-primary card-outline text-sm">
            <div class="card-header">
                <h3 class="card-title"><?=($act=="edit_color")?"Cập nhật":"Thêm mới";?> <?=$config['product'][$type]['title_main_color']?></h3>
            </div>
            <div class="card-body">
                <?php if(isset($config['product'][$type]['color_images']) && $config['product'][$type]['color_images'] == true) { ?>
                    <div class="form-group">
                        <div class="upload-file">
                            <p>Upload hình ảnh:</p>
                            <label class="upload-file-label mb-2" for="file">
                                <div class="upload-file-image rounded mb-3">
                                    <?=$func->getImage(['class' => 'rounded img-upload', 'size-error' => '250x250x1', 'upload' => UPLOAD_COLOR_L, 'image' => (!empty($item['photo'])) ? $item['photo'] : '', 'alt' => 'Alt Photo'])?>
                                </div>
                                <div class="custom-file my-custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="file" lang="vi">
                                    <label class="custom-file-label mb-0" data-browse="Chọn" for="file">Chọn file</label>
                                </div>
                            </label>
                            <strong class="d-block text-sm"><?php echo "Width: ".$config['product'][$type]['width_color']." px - Height: ".$config['product'][$type]['height_color']." px (".$config['product'][$type]['img_type_color'].")" ?></strong>
                        </div>
                    </div>
                <?php } ?>
                <div class="row form-group-category">
                    <?php if(isset($config['product'][$type]['color_code']) && $config['product'][$type]['color_code'] == true) { ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label class="d-block" for="color">Màu sắc:</label>
                            <input type="text" class="form-control jscolor text-sm" name="data[color]" id="color" maxlength="7" value="<?=(!empty($flash->has('color'))) ? $flash->get('color') : ((!empty($item['color'])) ? $item['color'] : '#000000')?>">
                        </div>
                    <?php } ?>
                    <?php if(
                        (isset($config['product'][$type]['color_type']) && $config['product'][$type]['color_type'] == true) && 
                        (isset($config['product'][$type]['color_images']) && $config['product'][$type]['color_images'] == true)
                    ) { ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label for="type_show">Loại hiển thị:</label>
                            <select class="custom-select text-sm" name="data[type_show]" id="type_show">
                                <option value="0">Chọn loại hiển thị</option>
                                <option <?=(isset($item['type_show']) && $item['type_show'] == 0)?"selected":""?> value="0">Màu sắc</option>
                                <option <?=(isset($item['type_show']) && $item['type_show'] == 1)?"selected":""?> value="1">Hình ảnh</option>
                            </select>
                        </div>
                    <?php } ?>
                    <?php /*if(isset($config['product'][$type]['color_product']) && $config['product'][$type]['color_product'] == true){ ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label for="id_product">Chọn sản phẩm (Bắt buộc):</label>
                            <?=$func->getLinkCategory('product', 'product', $type,"Chọn sản phẩm (Bắt buộc)")?>
                        </div>
                    <?php }*/ ?>

                    <?php if(isset($config['product'][$type]['color_regular_price']) && $config['product'][$type]['color_regular_price'] == true) { ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label class="d-block" for="regular_price">Giá bán:</label>
                            <div class="input-group">
                                <input type="text" class="form-control format-price regular_price text-sm" name="data[regular_price]" id="regular_price" placeholder="Giá bán" value="<?=(!empty($flash->has('regular_price'))) ? $flash->get('regular_price') : @$item['regular_price']?>">
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>VNĐ</strong></div>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                    <?php if(isset($config['product'][$type]['color_sale_price']) && $config['product'][$type]['color_sale_price'] == true) { ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label class="d-block" for="sale_price">Giá mới:</label>
                            <div class="input-group">
                                <input type="text" class="form-control format-price sale_price text-sm" name="data[sale_price]" id="sale_price" placeholder="Giá mới" value="<?=(!empty($flash->has('sale_price'))) ? $flash->get('sale_price') : @$item['sale_price']?>">
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>VNĐ</strong></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(isset($config['product'][$type]['color_discount']) && $config['product'][$type]['color_discount'] == true) { ?>
                        <div class="form-group col-md-3 col-sm-4">
                            <label class="d-block" for="discount">Chiết khấu:</label>
                            <div class="input-group">
                                <input type="text" class="form-control discount text-sm" name="data[discount]" id="discount" placeholder="Chiết khấu" value="<?=(!empty($flash->has('discount'))) ? $flash->get('discount') : @$item['discount']?>" maxlength="3" readonly>
                                <div class="input-group-append">
                                    <div class="input-group-text"><strong>%</strong></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
                <div class="form-group">
                    <?php $status_array = (!empty($item['status'])) ? explode(',', $item['status']) : array(); ?>
                    <?php if(isset($config['product'][$type]['check_color'])) { foreach($config['product'][$type]['check_color'] as $key => $value) { ?>
                        <div class="form-group d-inline-block mb-2 mr-2">
                            <label for="<?=$key?>-checkbox" class="d-inline-block align-middle mb-0 mr-2"><?=$value?>:</label>
                            <div class="custom-control custom-checkbox d-inline-block align-middle">
                                <input type="checkbox" class="custom-control-input <?=$key?>-checkbox" name="status[<?=$key?>]" id="<?=$key?>-checkbox" <?=(empty($status_array) && empty($item['id']) && $key=='hienthi' ? 'checked' : in_array($key, $status_array)) ? 'checked' : ''?> value="<?=$key?>">
                                <label for="<?=$key?>-checkbox" class="custom-control-label"></label>
                            </div>
                        </div>
                    <?php } } ?>
                </div>
                <div class="form-group">
                    <label for="numb" class="d-inline-block align-middle mb-0 mr-2">Số thứ tự:</label>
                    <input type="number" class="form-control form-control-mini d-inline-block align-middle text-sm" min="0" name="data[numb]" id="numb" placeholder="Số thứ tự" value="<?=isset($item['numb']) ? $item['numb'] : 1?>">
                </div>
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                            <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                <li class="nav-item">
                                    <a class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-toggle="pill" href="#tabs-lang-<?=$k?>" role="tab" aria-controls="tabs-lang-<?=$k?>" aria-selected="true"><?=$v?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="card-body card-article">
                        <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                            <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                <div class="tab-pane fade show <?=($k=='vi')?'active':''?>" id="tabs-lang-<?=$k?>" role="tabpanel" aria-labelledby="tabs-lang">
                                    <div class="form-group">
                                        <label for="name<?=$k?>">Tiêu đề (<?=$k?>):</label>
                                        <input type="text" class="form-control for-seo text-sm" name="data[name<?=$k?>]" id="name<?=$k?>" placeholder="Tiêu đề (<?=$k?>)" value="<?=(!empty($flash->has('name'.$k))) ? $flash->get('name'.$k) : @$item['name'.$k]?>" <?=($k=='vi')?'required':''?>>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-sm">
            <button type="submit" class="btn btn-sm bg-gradient-primary submit-check" disabled><i class="far fa-save mr-2"></i>Lưu</button>
            <button type="reset" class="btn btn-sm bg-gradient-secondary"><i class="fas fa-redo mr-2"></i>Làm lại</button>
            <a class="btn btn-sm bg-gradient-danger" href="<?=$linkMan?>" title="Thoát"><i class="fas fa-sign-out-alt mr-2"></i>Thoát</a>
            <input type="hidden" name="id" value="<?=(isset($item['id']) && $item['id'] > 0) ? $item['id'] : ''?>">
            <?php if(isset($item['id_product']) && $item['id_product'] > 0 || isset($_REQUEST['id_product']) && $_REQUEST['id_product'] > 0){ ?> 
            <input type="hidden" name="id_product" value="<?=(isset($item['id_product']) && $item['id_product'] > 0) ? $item['id_product'] : $_REQUEST['id_product']?>">
            <?php } ?>
        </div>
    </form>
</section>