<div class="menu-res">
    <div class="menu-bar-res">
        <a id="hamburger" href="#menu" title="Menu"><span></span></a>
        <div class="search-res">
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword-res');" value="<?php if( !empty($_GET['keyword-res']) ) {echo $_GET['keyword-res'];}?>" />
                <p onclick="onSearch('keyword-res');"><i class="bi bi-search"></i></p>
            </div>
        </div>
        <?php /*
        <div class="search-res">
            <p class="icon-search transition"><i class="bi bi-search"></i></p>
            <div class="search-grid w-clear">
                <input type="text" name="keyword-res" id="keyword-res" placeholder="<?=nhaptukhoatimkiem?>" onkeypress="doEnter(event,'keyword-res');" value="<?php if( !empty($_GET['keyword-res']) ) {echo $_GET['keyword-res'];}?>" />
                <p onclick="onSearch('keyword-res');"><i class="bi bi-search"></i></p>
            </div>
        </div>*/ ?>
    </div>
    <nav id="menu">
        <ul>
            <?php /*?><li class="Divider"><?=danhmucsanpham?></li><?php */?>
        </ul>
    </nav>
</div>