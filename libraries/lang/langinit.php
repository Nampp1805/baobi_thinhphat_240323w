<?php
	$columnarr = array(
		"title"=>'TEXT',
		"keywords"=>'TEXT',
		"description"=>'TEXT'
	);

	$columnarr1 = array(
		"name"=>'TEXT',
		"desc"=>'TEXT',
		"content"=>'TEXT',
		"slug"=>'TEXT'
	);

	$columnarrgt = array(
		"name"=>'TEXT',
		"desc"=>'TEXT',
		"content"=>'TEXT',
		"slug"=>'TEXT',
		"slogan"=>'TEXT',
		"slogan1"=>'TEXT',
	);

	$columnarr2 = array(
		"name"=>'TEXT',
		"address"=>'TEXT',
		"copyright"=>'TEXT'
	);

	$columnarr3 = array(
		"name"=>'TEXT',
		"desc"=>'TEXT',
		"content"=>'TEXT'
	);

	$columnarr4 = array(
		"name"=>'TEXT'
	);
	$columnarr5 = array(
		"schema"=>'TEXT',
		"title"=>'TEXT',
		"keywords"=>'TEXT',
		"description"=>'TEXT'
	);


	$columnLang = array(
		"lang"=>"TEXT"
	);
	
	function createLangInit()
	{
		global $config, $d, $columnarr, $columnarr2, $columnarr1,$columnarrgt, $columnarr3, $columnarr4,$columnarr5, $columnLang;

		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnLang as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_lang like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_lang add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr5 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_seo like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_seo add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_seopage like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_seopage add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr2 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_setting like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_setting add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_news like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_news add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_news_list like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_news_list add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_news_cat like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_news_cat add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_news_item like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_news_item add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_news_sub like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_news_sub add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr3 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_photo like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_photo add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr3 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_gallery like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_gallery add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarrgt as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_static like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_static add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_tags like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_tags add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr4 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_size like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_size add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr4 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_color like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_color add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product_list like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product_list add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product_cat like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product_cat add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product_item like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product_item add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product_sub like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product_sub add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		foreach($config['website']['lang'] as $klang => $vlang)
		{
			foreach($columnarr1 as $kcol => $vcol)
			{
				$col = $kcol.$klang;
				$rowcol = $d->rawQueryOne("show columns from #_product_brand like '$col'");

				if($rowcol==null) $d->rawQuery("alter table #_product_brand add $col $vcol character set utf8 collate utf8_unicode_ci ");
			}
		}
		die("Thêm cột ngôn ngữ thành công.");
	}

	function deleteLangInit($lang)
	{
		if($lang!='')
		{
			global $config, $d, $columnarr, $columnarr2, $columnarr1,$columnarrgt, $columnarr3, $columnarr4,$columnarr5, $columnLang;

			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnLang as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_lang like '$col'");

					if($row!=null) $d->rawQuery("alter table #_lang drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr5 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_seo like '$col'");

					if($row!=null) $d->rawQuery("alter table #_seo drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_seopage like '$col'");

					if($row!=null) $d->rawQuery("alter table #_seopage drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr2 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_setting like '$col'");

					if($row!=null) $d->rawQuery("alter table #_setting drop $col");
				}
			}

			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_news like '$col'");

					if($row!=null) $d->rawQuery("alter table #_news drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_news_list like '$col'");

					if($row!=null) $d->rawQuery("alter table #_news_list drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_news_cat like '$col'");

					if($row!=null) $d->rawQuery("alter table #_news_cat drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_news_item like '$col'");

					if($row!=null) $d->rawQuery("alter table #_news_item drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_news_sub like '$col'");

					if($row!=null) $d->rawQuery("alter table #_news_sub drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr3 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_photo like '$col'");

					if($row!=null) $d->rawQuery("alter table #_photo drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarrgt as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_static like '$col'");

					if($row!=null) $d->rawQuery("alter table #_static drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_tags like '$col'");

					if($row!=null) $d->rawQuery("alter table #_tags drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr4 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_size like '$col'");

					if($row!=null) $d->rawQuery("alter table #_size drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr4 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_color like '$col'");

					if($row!=null) $d->rawQuery("alter table #_color drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product_list like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product_list drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product_cat like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product_cat drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product_item like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product_item drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product_sub like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product_sub drop $col");
				}
			}
			foreach($config['website']['lang'] as $vlang)
			{
				foreach($columnarr1 as $kcol => $vcol)
				{
					$col = $kcol.$lang;
					$row = $d->rawQueryOne("show columns from #_product_brand like '$col'");

					if($row!=null) $d->rawQuery("alter table #_product_brand drop $col");
				}
			}
			die("Xóa cột ngôn ngữ thành công.");
		}
	}

	//createLangInit();
	//deleteLangInit('jp');
?>