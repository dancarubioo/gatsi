<?php
session_start();
if(!isset($_SESSION["admin"])){
  ?>
  <script type="text/javascript">
      window.location="index.php";
  </script>

  <?php
}
?>
<?php
    include "../user/connection.php";
    $id = $_GET["id"];

    mysqli_query($link, "DELETE FROM products
                        WHERE id = $id") or die(mysqli_error($link));

?>

<script type="text/javascript">
    window.location="add_products.php";
</script>
