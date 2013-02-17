<?php

 $FRAMETEXX_EXP = "/frametexx/([[:alnum:]]*)\.html";
 $FRAMETEXX_ROOT = "/usr/local/apache2/htdocs/frametexx/";

 $uri = $_SERVER['REQUEST_URI'];
 ereg ($FRAMETEXX_EXP, $uri, $temp);

 if (count($temp) == 2)
 {
    $lookup = $temp[1];
    $staticname = $lookup;
    if ($lookup == 'index')
      $lookup = 'home';

    $index = "";
    ereg ("[[:alpha:]]*([0123456789]*)", $lookup, $index);
    if (sizeof ($index) == 2)
    {
      $index = $index[1];
      $lookup = substr ($lookup, 0, strlen($lookup) - strlen($index));
      if ($index == "0" || $index == "1")
      {
        $index = "";
      }
    }
    // echo $lookup . " - " . $index[1] . "<br>";

    if (file_exists ($FRAMETEXX_ROOT . "inc/" . $lookup . ".inc"))
    {
      $html = "http://" . $_SERVER["HTTP_HOST"] . "/frametexx/index.php?page=" . $lookup;
      if (!empty($index))
      {
        $html .= "&index=" . $index;
      }

      $buffer = "";

      $http = fopen ($html, "r");
      while (!feof ($http))
        $buffer .= fread ($http, 1024);
      fclose ($http);

      // remove cms edit links
      $buffer = ereg_replace ('<a href="index.php\?cms=[[:alnum:] _<>=&."]*</a> \|', '', $buffer);

      // rewrite index.php navigation
      $buffer = ereg_replace ("index.php\?page=([[:alpha:]]*)\"", "\\1.html\"", $buffer);
      $buffer = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=-[0123456789]*\"", "\\1.html\"", $buffer);
      $buffer = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=0\"", "\\1.html\"", $buffer);
      $buffer = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=1\"", "\\1.html\"", $buffer);
      $buffer = ereg_replace ("index.php\?page=([[:alpha:]]*)&index=([0123456789])*\"", "\\1\\2.html\"", $buffer);
      echo $buffer;

      // create static file
      $out = fopen ($FRAMETEXX_ROOT . $staticname . ".html", "w");
      fwrite ($out, $buffer);
      fclose ($out);

    }

 }
 //echo var_dump ($_SERVER);
?>
