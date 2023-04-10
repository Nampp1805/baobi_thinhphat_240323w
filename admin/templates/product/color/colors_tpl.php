<?php 
    if(isset($_REQUEST['id_product'])){
        $link_tam = "&id_product=".$_REQUEST['id_product'];
        $linkMan = $linkFilter = "index.php?com=product&act=man_color&type=".$type.$link_tam."&p=".$curPage;
        $linkAdd = "index.php?com=product&act=add_color&type=".$type.$link_tam."&p=".$curPage;
        $linkEdit = "index.php?com=product&act=edit_color&type=".$type.$link_tam."&p=".$curPage;
        $linkDelete = "index.php?com=product&act=delete_color&type=".$type.$link_tam."&p=".$curPage;
    }else{
        $linkMan = $linkFilter = "index.php?com=product&act=man_color&type=".$type;
        $linkAdd = "index.php?com=product&act=add_color&type=".$type;
        $linkEdit = "index.php?com=product&act=edit_color&type=".$type;
        $linkDelete = "index.php?com=product&act=delete_color&type=".$type;
    }
?>
<!-- Content Header -->
<section class="content-header text-sm">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb float-sm-left">
                <li class="breadcrumb-item"><a href="index.php" title="Bảng điều khiển">Bảng điều khiển</a></li>
                <li class="breadcrumb-item active">Quản lý <?=$config['product'][$type]['title_main_color']?></li>
            </ol>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="card-footer text-sm sticky-top">
        <?php if(isset($config['product'][$type]['color']) && $config['product'][$type]['color'] == true && $config['product'][$type]['color_product'] == false || isset($_REQUEST['id_product']) && $_REQUEST['id_product'] > 0) { ?>
    	<a class="btn btn-sm bg-gradient-primary text-white" href="<?=$linkAdd?>" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <?php } ?>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="<?=$linkDelete?>" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
        <div class="form-inline form-search d-inline-block align-middle ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar text-sm" type="search" id="keyword" placeholder="Tìm kiếm" aria-label="Tìm kiếm" value="<?=(isset($_GET['keyword'])) ? $_GET['keyword'] : ''?>" onkeypress="doEnter(event,'keyword','<?=$linkMan?>')">
                <div class="input-group-append bg-primary rounded-right">
                    <button class="btn btn-navbar text-white" type="button" onclick="onSearch('keyword','<?=$linkMan?>')">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($config['product'][$type]['color']) && $config['product'][$type]['color'] == true && $config['product'][$type]['color_product'] == true) { ?>
    <div class="card-footer form-group-category text-sm bg-light row">
        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-2">
            <?=$func->getLinkCategory('product', 'product', $type,"Chọn sản phẩm để thêm màu sắc theo sản phẩm")?>
        </div>
    </div>
    <?php } ?>

    <div class="card card-primary card-outline text-sm mb-0">
        <div class="card-header">
            <h3 class="card-title">Danh sách <?=$config['product'][$type]['title_main_color']?></h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="align-middle" width="5%">
                            <div class="custom-control custom-checkbox my-checkbox">
                                <input type="checkbox" class="custom-control-input" id="selectall-checkbox">
                                <label for="selectall-checkbox" class="custom-control-label"></label>
                            </div>
                        </th>
                        <th class="align-middle text-center" width="10%">STT</th>
                        <?php if(isset($config['product'][$type]['color']) && $config['product'][$type]['color'] == true && $config['product'][$type]['color_product'] == true) { ?>
                        <th class="align-middle" width="20%">Sản phẩm</th>
                        <?php } ?>
                        <?php if(isset($config['product'][$type]['color_images']) && $config['product'][$type]['color_images'] == true) { ?>
                            <th class="align-middle">Hình</th>
                        <?php } ?>
						<th class="align-middle" style="width:30%">Tiêu đề</th>
                        <?php if(isset($config['product'][$type]['check_color'])) { foreach($config['product'][$type]['check_color'] as $key => $value) { ?>
                            <th class="align-middle text-center"><?=$value?></th>
                        <?php } } ?>
                        <th class="align-middle text-center">Thao tác</th>
                    </tr>
                </thead>
                <?php if(empty($items)) { ?>
                    <tbody><tr><td colspan="100" class="text-center">Không có dữ liệu</td></tr></tbody>
                <?php } else { ?>
                    <tbody>
                        <?php for($i=0;$i<count($items);$i++) { ?>
                            <tr>
                                <td class="align-middle">
                                    <div class="custom-control custom-checkbox my-checkbox">
                                        <input type="checkbox" class="custom-control-input select-checkbox" id="select-checkbox-<?=$items[$i]['id']?>" value="<?=$items[$i]['id']?>">
                                        <label for="select-checkbox-<?=$items[$i]['id']?>" class="custom-control-label"></label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control form-control-mini m-auto update-numb" min="0" value="<?=$items[$i]['numb']?>" data-id="<?=$items[$i]['id']?>" data-table="color">
                                </td>
                                <?php if(isset($config['product'][$type]['color']) && $config['product'][$type]['color'] == true && $config['product'][$type]['color_product'] == true) { 
                                    $pronb = $cache->get("select namevi from #_product where type = ? and id = ? and find_in_set('hienthi',status)", array('san-pham',$items[$i]['id_product']), 'fetch', 7200);
                                    ?>
                                <td class="align-middle">
                                    <a href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['namevi']?>">
                                        <?=$pronb['namevi']?>
                                    </a>
                                </td>
                                <?php } ?>
                                <?php if(isset($config['product'][$type]['color_images']) && $config['product'][$type]['color_images'] == true) { ?>
                                    <td class="align-middle">
                                        <a href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['namevi']?>">
                                            <?=$func->getImage(['class' => 'rounded img-preview', 'sizes' => $config['product'][$type]['thumb_color'], 'upload' => UPLOAD_COLOR_L, 'image' => $items[$i]['photo'], 'alt' => $items[$i]['namevi']])?>
                                        </a>
                                    </td>
                                <?php } ?>
                                <td class="align-middle">
                                    <a class="text-dark text-break" href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['namevi']?>"><?=$items[$i]['namevi']?></a>
                                </td>
								<?php $status_array = (!empty($items[$i]['status'])) ? explode(',', $items[$i]['status']) : array(); ?>
                                <?php if(isset($config['product'][$type]['check_color'])) { foreach($config['product'][$type]['check_color'] as $key => $value) { ?>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="custom-control-input show-checkbox" id="show-checkbox-<?=$key?>-<?=$items[$i]['id']?>" data-table="color" data-id="<?=$items[$i]['id']?>" data-attr="<?=$key?>" <?=(in_array($key, $status_array)) ? 'checked' : ''?>>
                                            <label for="show-checkbox-<?=$key?>-<?=$items[$i]['id']?>" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                <?php } } ?>
                                <td class="align-middle text-center text-md text-nowrap">
                                    <a class="text-primary mr-2" href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="Chỉnh sửa"><i class="fas fa-edit"></i></a>
                                    <a class="text-danger" id="delete-item" data-url="<?=$linkDelete?>&id=<?=$items[$i]['id']?>" title="Xóa"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
    <?php if($paging) { ?>
        <div class="card-footer text-sm pb-0">
            <?=$paging?>
        </div>
    <?php } ?>
    <div class="card-footer text-sm">
        <?php if(isset($config['product'][$type]['color']) && $config['product'][$type]['color'] == true && $config['product'][$type]['color_product'] == false || isset($_REQUEST['id_product']) && $_REQUEST['id_product'] > 0) { ?>
    	<a class="btn btn-sm bg-gradient-primary text-white" href="<?=$linkAdd?>" title="Thêm mới"><i class="fas fa-plus mr-2"></i>Thêm mới</a>
        <?php } ?>
        <a class="btn btn-sm bg-gradient-danger text-white" id="delete-all" data-url="<?=$linkDelete?>" title="Xóa tất cả"><i class="far fa-trash-alt mr-2"></i>Xóa tất cả</a>
    </div>
</section>