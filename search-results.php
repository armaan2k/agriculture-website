<?php include_once "inc/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php print_head("Search", 0) ?>
  <body>
    <?php include_once "inc/header.php"; ?>
    <main>
      <h1>Search Results</h1>
      <ul>
      <?php searching($_GET['search']) ?>
     </ul>
    </main>
    <?php include_once "inc/footer.php"; ?>
  </body>
</html>
