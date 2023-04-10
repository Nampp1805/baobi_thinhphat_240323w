<?php
include "config.php";

/* Paginations */
include LIBRARIES . "class/class.PaginationsAjax.php";
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$idCat = (!empty($_GET['idCat'])) ? htmlspecialchars($_GET['idCat']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();

/* Math url */
if ($idList) {
	$tempLink .= "&idList=" . $idList;
	$where .= " and id_list = ?";
	array_push($params, $idList);
}
if ($idCat) {
	$tempLink .= "&idCat=" . $idCat;
	$where .= " and id_cat = ?";
	array_push($params, $idCat);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select name$lang, slugvi, slugen, id, photo,code,regular_price, sale_price, discount, type from #_product where type='san-pham' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";
$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $d->rawQuery($sqlCache, $params);

/* Count all data */
$countItems = count($d->rawQuery($sql, $params));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
	<div class="flex-product">
		<?php foreach ($items as $k => $v) { ?>
			<div class="box-product" data-aos="fade-up" data-aos-delay="<?= ($k * 50 + 100) ?>">
				<p class="pic-product">
					<a class="d-block scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
						<img class="d-block w-100 lazy" data-src="<?= WATERMARK ?>/product/580x560x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/580x560x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
					</a>
				</p>
				<h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
				<p class="code"> <?= $v["code"] ?> </p>

				<p class="price-product">
					<?php if ($v['discount']) { ?>
						<span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
						<span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
						<span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
					<?php } else { ?>
						<?php if ($v['sale_price']) { ?>
							<span class="price-new">Giá : <?= ($v['sale_price']) ? $func->formatMoney($v['sale_price']) : lienhe ?></span>
						<?php } else { ?>
							 <span class="price-new"><?= $optsetting['phone_product'] ?>Giá: Liên hệ</span>
						<?php } ?>
					<?php } ?>
				</p>
			</div>
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>