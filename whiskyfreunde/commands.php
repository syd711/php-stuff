<?php

  // map highlight for main menu
  $parent =array(
		"news"=>"news",
  		"contact"=>"contact",
		"overview"=>"overview",
		"contact"=>"contact",
		"imprint"=>"imprint"
  		);

  // parse submenu and replace current link
  function markMenu ($selectedParent, $page)
  {
    $name = 'inc/overview_navi.inc';
    if (is_file ($name))
    {
      $menu = implode ("\n", file ($name));
      $menu = ereg_replace("<a href=\"index.php\?page=".$page."\">([ [:alnum:]]*)</a>", "<p>\\1</p>", $menu);
      return ereg_replace("<a class=\"sub\" href=\"index.php\?page=".$page."\">([\<\>\.\/=\" [:alnum:]]*)</a>", "<p class=\"sub\">\\1</p>", $menu);
    }
    return $name . " not found";
  }


// parse submenu and replace current link
  function writeMenu ($selectedParent, $page)
  {
    $name = 'inc/' . $selectedParent . '_navi.inc';

    if (is_file ($name))
    {
      $menu = implode ("\n", file ($name));
      $menu = ereg_replace("<a href=\"index.php\?page=".$page."\">([ [:alnum:]]*)</a>", "<p>\\1</p>", $menu);

	// remove cms edit links
      $menu = ereg_replace ('<a href="index.php\?cms=[[:alnum:] _<>=&."]*</a> \|', '', $menu);

      // rewrite index.php navigation
      $menu = ereg_replace ("index.php\?page=([[:alpha:]]*)\"", "\\1.html\"", $menu);
      $menu = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=-[0123456789]*\"", "\\1.html\"", $menu);
      $menu = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=0\"", "\\1.html\"", $menu);
      $menu = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=1\"", "\\1.html\"", $menu);
      $menu = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=([0123456789])*\"", "\\1\\2.html\"", $menu);

      return ereg_replace("<a class=\"sub\" href=\"index.php\?page=".$page."\">([\<\>\.\/=\" [:alnum:]]*)</a>", "<p class=\"sub\">\\1</p>", $menu);
    }

    return $name . " not found";
  }
	
   

  // print paging table with back and next button
  function insertPaging ($page, $index, $max)
  {
    // enable hidden call
    if ($max == 0)
     return "";

    $line = '<table class="pagenavi" cellpadding="0" cellspacing="0" id="pagenavi"><tr>';
    // print previous button
    $line .= '<td class="previous">';
    if ($index < 2)
      $line .= '<img src="pics/spacer.gif" width="0" height="0" alt="" />';
    else
    {
      if ($index == 2)
        $prev = "";
      else
        $prev = "&index=" . ($index + 1);
      $line .= '<a class="img" href="index.php?page=' . $page . $prev . '">';
      $line .= '<img class="img" src="pics/previous.gif" alt="previous" /></a>';
    }
      $line .= '</td>';
    // print page links
    $line .= '<td class="pages"><p>Page ';
    for ($i = 1; $i <= $max; $i += 1)
    {
      $mindex = '&index=' . $i;
      if ($i == 1)
        $mindex = "";
      if ($i == $index || ($i == 1 && empty($index)))
        $line .= ' ' . $i . ' ';
      else
      {
        $line .= '<a href="index.php?page=' . $page . $mindex . '">' .$i. '</a>';
      }
      if ($i < $max)
        $line .= ' / ';
    }
    $line .= '</p></td>';

    // print next button
    $line .= '<td class="next">';
    if ($index == $max)
      $line .= '<img src="pics/spacer.gif" width="0" height="0" alt="" />';
    else
    {
      if (empty($index))
        $next = "&index=2";
      else
        $next = "&index=" . ($index + 1);
      $line .= '<a class="img" href="index.php?page=' . $page . $next .'">';
      $line .= '<img class="img" src="pics/next.gif" alt="Next Page" /></a>';
    }
    $line .= '</td></tr></table>';

    return $line;
  }

  $page = $_GET['page'];
  $changePage = $_GET['changePage'];
  $isUnderCMS = $_GET['isUnderCMS'];

  $selectedParent = $parent[$page];
  if (empty($selectedParent))
    $selectedParent = "overview";

  // set class variable for header image
  $category = $page;

  $cms = $_GET['cms'];
  $index = $_GET['index'];
  if( $index == "1" )
  {
   		$index = "";
  }
  if (!(empty($page)) && $page != "default")
	{
		$template = "inc/" . $page . $index . ".inc"; $isUnderCMS = 1;
	}
  else
  {
    $page = "overview";
    $template = "inc/overview.inc";
    $isUnderCMS = 1;
  }

   if (!(empty($changePage)))
   {
      // delete existing file
      if( is_file ( $template ) )
        unlink($template);

      $fp = fopen( $template, "w");
      $templateContent = $_POST['templateContent'];
      $zeile = ereg_replace("\\\\", "", $templateContent);
      //echo "<textarea cols=40 rows=20>" . $zeile . "</textarea>";
      fputs($fp, $zeile);
      fclose($fp);

      // delete existing static file
      if (is_file ($page . $index . ".html"))
        unlink ($page . $index . ".html");
   }

  ?>

