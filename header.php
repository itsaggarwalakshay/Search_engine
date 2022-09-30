<!-- header-php -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<style>
.searchbox{
    position: relative;
    width: 100%;
}
.searchbox .searchbar{
    width: 40%;
    padding-left: 25px;
    padding-right: 60px;
    border-radius: 30px;
    outline: none;
    height: 44px;
    background: #fff;
    border: 1px solid transparent;
    box-shadow: 0 2px 5px 1px rgb(64 60 67 / 16%);
    border-radius: 24px;
}
.searchbox .searchbar:focus{
    box-shadow: rgba(0, 0, 0, 0.20) 0px 5px 15px;
}
.searchbox .icons{
    position: absolute;
    top: 0;
    left: 510px;
    width: 100%;
    padding: 8px 20px;
    pointer-events: none;
}
</style>
<body>
<!-- ----navbar-start-here--- -->
<nav class="navbar navbar-expand-lg navbar-white bg-white p-4" style="border-bottom: 1px solid #ebebeb;">
   <img src="img/google.png" width="92" class="mx-4">
   <!-- ----searchbox-start-here--- -->
    <div class="searchbox">
      <form action="index.php" method="post">
          <input type="text" class="searchbar" name="search">
          <div class="icons d-flex" >
            <div class="micimg mx-3"><img src="img/mic.png"></div>
            <div class="micimg"><img src="img/search.png"></div>
          </div>
          <input type="submit" name="save" value="search" class="btn btn-primary">
      </form>
    </div>
    <!-- ----searchbox-ends-here--- -->
</nav>
<!-- ----navbar-ends-here--- -->
</body>
</html>