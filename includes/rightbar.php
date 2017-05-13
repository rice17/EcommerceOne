<!-- Right Sidebar -->
  <nav class="col-md-2">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#rightbar" aria-expanded="false">
        Sort
      </button>
    </div>
    <?php
          if (isset($_GET["brand"]))
          {
            $add = '&brand='.$_GET['brand'];
          }
          else if (isset($_GET["filtercat"]))
          {
            $add = '&filtercat='.$_GET['filtercat'];
          }
          else
          {
            $add = "";
          }
    ?>
    <div class="collapse navbar-collapse" id="rightbar">
      <h2 class="text-center">Sort By</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="text-center"><a href="index.php?sort=title<?=$add;?>">Name</a></li>
        <li class="text-center"><a href="index.php?sort=price<?=$add;?>">Price</a></li>
        <li class="text-center"><a href="index.php?sort=discount<?=$add;?>">Discount</a></li>
      </ul>
    </div>
  </nav>
</div>
<!-- Closed row -->
