<?php  
	if(!defined('SOURCES')) die("Error");

	/* Tìm kiếm sản phẩm */
	if(!empty($_GET['keyword']))
	{
		$tukhoa_show = htmlspecialchars($_GET['keyword']);

		/*$keywords = explode(' ', $tukhoa_show);
		$searchTermKeywords = array();
		$where_search = '';
		foreach ($keywords as $word) 
		{
			$searchTermKeywords[] = "name$lang LIKE '%$word%'";
		}
		if ($tukhoa_show!="")
		{
			$where_search .="(".implode(' and ', $searchTermKeywords).")";
		}*/

		$tukhoa = htmlspecialchars($_GET['keyword']);
		$tukhoa = $func->changeTitle($tukhoa);

		if($tukhoa)
		{
			$where = "";
			/*$where = "type = ? and ($where_search or slugvi LIKE ? or slugen LIKE ?) and find_in_set('hienthi',status)";
			$params = array($type,"%$tukhoa%","%$tukhoa%");*/
			$where = "type = ? and (name$lang LIKE ? or slugvi LIKE ? or slugen LIKE ?) and find_in_set('hienthi',status)";
			$params = array($type,"%$tukhoa_show%","%$tukhoa%","%$tukhoa%");

			$curPage = $getPage;
			$perPage = (isset($optsetting['sp1']) && $optsetting['sp1']!='') ? htmlspecialchars($optsetting['sp1']):24;
			$startpoint = ($curPage * $perPage) - $perPage;
			$limit = " limit ".$startpoint.",".$perPage;
			$sql = "select photo, name$lang, slugvi, slugen, sale_price, regular_price, discount, id from #_product where $where order by numb,id desc $limit";
			$product = $d->rawQuery($sql,$params);
			$sqlNum = "select count(*) as 'num' from #_product where $where order by numb,id desc";
			$count = $d->rawQueryOne($sqlNum,$params);
			$total = (!empty($count)) ? $count['num'] : 0;
			$url = $func->getCurrentPageURL();
			$paging = $func->pagination($total,$perPage,$curPage,$url);
		}
	}

	/* SEO */
	$seo->set('title',$titleMain);

	/* breadCrumbs */
	$breadcr->set('',$titleMain);
	$breadcrumbs = $breadcr->get();
?>