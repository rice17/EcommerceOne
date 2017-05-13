
<!-- Left Sidebar -->
<nav class="col-md-2">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed form-control text" data-toggle="collapse" data-target="#leftbar" aria-expanded="false" id="branbar">
      Brands<span class="caret"></span>
    </button>
  </div>
  <?php
    $query = "SELECT * FROM brands ORDER BY brand";
    $result = mysqli_query($db, $query);
  ?>
  <div class="collapse navbar-collapse" id="leftbar">
    <ul class="nav nav-pills nav-stacked">
      <h3 class="text-center">Brands</h3>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <li><a class="btn btn-sm" href="index.php?brand=<?=$row['id']?>"><?php echo $row['brand']; ?></a></li>
    <?php endwhile; ?>
  </ul>
  </div>
</nav>
