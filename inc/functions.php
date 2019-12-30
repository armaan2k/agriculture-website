<?php include_once "inc/search.php"; ?>
<?php
  function print_head ($title, $included) {
    if ($included == 1) {
      echo "  <!-- Armaan Merchant -->
            <head>
           <meta charset=\"UTF-8\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
           <link rel=\"stylesheet\" href=\"css/style.css\"/>
           <link rel=\"stylesheet\" href=\"css/icons.css\"/>
           <link rel=\"stylesheet\" href=\"css/responsive.css\"/>
           <script src=\"https://code.jquery.com/jquery-3.4.1.js\"integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"crossorigin=\"anonymous\"></script>
           <script src=\"/~16am122/a5/js/head_slideshow.js\"></script>
           <link rel=\"stylesheet\" href=\"css/magnific_popup.css\"/>
           <script src=\"/~16am122/a4/js/magnific_popup.js\"></script>
           <script src=\"/~16am122/a4/js/gallery_slideshow.js\"></script>
           <script src=\"/~16am122/a5/js/search_empty_prevent.js\"></script>
           <title>".$title."</title>
           </head> ";
    }
    else {
      echo "  <!-- Armaan Merchant -->
            <head>
           <meta charset=\"UTF-8\">
           <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
           <link rel=\"stylesheet\" href=\"css/style.css\"/>
           <link rel=\"stylesheet\" href=\"css/icons.css\"/>
           <link rel=\"stylesheet\" href=\"css/responsive.css\"/>
           <script src=\"https://code.jquery.com/jquery-3.4.1.js\"integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"crossorigin=\"anonymous\"></script>
           <script src=\"/~16am122/a5/js/head_slideshow.js\"></script>
           <script src=\"/~16am122/a5/js/search_empty_prevent.js\"></script>
           <title>".$title."</title>
           </head> ";
    }
  }

  function searching ($input) {
    $input_no_space = str_replace(' ', '',$input);
    $searchstring = preg_replace('/[^a-zA-Z0-9_ -]/s','',$input_no_space);
    $array = search_for_term($searchstring);
    if (count($array) > 0) {
      echo "<p>Your search for \"".$input. "\" produced ".count($array). " result(s)<br></p>";
      for ($i = 0; $i < count($array); $i++) {
        $array_keys = $array[$i];
        echo "<li><a href='" .$array_keys["link"]. "'>".$array_keys["type"]."</a></li>";
      }
    }
    else {
      echo "<p>Did not find any results for  \"".$input."\".</p>";
    }
  }
?>
