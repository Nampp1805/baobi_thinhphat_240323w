<div class="danhmucct">
    <div class="tieude">DANH MỤC SẢN PHẨM</div>
    <div class="danhmucl danhmuc">
    <?php if(count($splist)) { ?>
        <ul>
        <?php foreach($splist as $v) {
            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($v['id'])); ?>
            <li class="has-submenu level1">
                <a class="transition  <?php if(count($spcat)>0) { ?>acap<?php } ?> text-decoration-none" title="<?=$v['name'.$lang]?>" href="<?=$v[$sluglang]?>"><?=$v['name'.$lang]?></a>
                <?php if(count($spcat)>0) { ?>
                <span class="icon-plus-submenu plus-nClick2"></span>
                <ul>
                <?php foreach($spcat as $v1) { ?>
                    <li class="has-submenu level2">
                        <a class="transition text-decoration-none" title="<?=$v1['name'.$lang]?>" href="<?=$v1[$sluglang]?>"><?=$v1['name'.$lang]?></a>
                    </li>
                <?php } ?>
                </ul>
                <?php } ?>
            </li>
        <?php } ?>
        </ul>
    <?php } ?>
    </div>
</div>