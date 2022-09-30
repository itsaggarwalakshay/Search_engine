<?php
include 'header.php';
include_once("function.php");
// $ob is an object of dbconnection class
$ob=new dbconnection();

if (isset($_POST['save'])) {
    // ----remove-spaces-from-search-input---
    $search = trim($_POST['search']);
    // ----show-alert-if-input-is-empty--
    if (empty($search)) {
        echo "<SCRIPT>alert('you did not enter any value')window.location.replace('index.php');
            </SCRIPT>";
    }
     // ----show-searched-if-input-is-filled-and-matched-data-found--
    else{
        // ---store-returned-data-in-rows-variable--
        $rows = $ob->search_results($search);
        // // ---store-data-into-rows1-if-matched-data-founded--
        if ($rows > 0 ) {
            $rows1 = $ob->search_results($search); 
        }
         // ---show-alert-if-matched-data-not-founded--
        else{
            echo "<SCRIPT>alert('NO matched data founded')window.location.replace('index.php');
                </SCRIPT>";
        }
    }
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Google</title>
</head>
<body style="overflow-x: hidden;">
<!-- ---container-starts-here-- -->
<div class="container">
    <div class="col-md-6">
        <?php foreach ($rows as $row) 
            {
        ?>
        <div class="card " style="border:none">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['title']; ?></h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
          </div>
        </div>
        <?php
        }
        ?>
    </div>
<!-- ---container-ends-here-- -->
</div>
</body>
</html>