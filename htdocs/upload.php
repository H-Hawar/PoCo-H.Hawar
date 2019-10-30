<?php
if (isset($_POST["uploadBtn"]) && $_POST["uploadBtn"] == "Upload") {
  if ($_FILES["file"] > 0) {
    echo "You have selected a file to upload";

    print('<pre>');
    print_r($_FILES["file"]);
    print('</pre>');
  }
}
?>