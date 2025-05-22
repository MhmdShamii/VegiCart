<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - VeggieCart</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/dash.css" />
</head>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
  $conn = mysqli_connect("localhost", "root", "", "veggicart");
  $itemId = intval($_POST['item_id']);

  if ($itemId > 0) {
    mysqli_query($conn, "UPDATE items SET inStock = NOT inStock WHERE id = $itemId");
  }
}
$conn = mysqli_connect("localhost", "root", "", "veggicart");
?>

<body>
  <nav>
    <div class="logo">
      <img src="rec/Logo.png" alt="" />
      <h3>VeggieCart</h3>
    </div>
    <ul>
      <li>
        <a href="index.php">
          <i class="fa-solid fa-store"></i>
          <p>Store</p>
        </a>
      </li>
      <li class="active">
        <a href="#">
          <i class="fa-solid fa-table"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li>
        <a href="about.php">
          <i class="fa-solid fa-user"></i>
          <p>About Us</p>
        </a>
      </li>
      <li>
        <a href="contact.php">
          <i class="fa-solid fa-phone"></i>
          <p>Contact</p>
        </a>
      </li>
    </ul>
  </nav>
  <div class="main">
    <div class="body">

      <table>
        <tr>
          <td>ID</td>
          <td>Image</td>
          <td>Name</td>
          <td>Description</td>
          <td>Category</td>
          <td>Price</td>
          <td>Stock</td>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM `items`");

        while ($row = mysqli_fetch_assoc($result)) {
          $instocktxt = $row['inStock'] > 0 ? "In Stock" : "Out of Stock";
          $instockclass = $row['inStock'] > 0 ? "in" : "out";
          echo "<tr>";
          echo '<td>' . $row['id'] . '</td>';
          echo '<td><img src="' . $row['img'] . '" alt="" class="img"></td>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['disc'] . '</td>';
          echo '<td>' . ($row['category'] == "fru" ? "fruit" : "vegetable") . '</td>';
          echo '<td>$' . number_format($row['price'], 2) . '</td>';
          echo '<td><button class="stock ' . $instockclass . '" data-id="' . $row['id'] . '">' . $instocktxt . '</button></td>';
          echo '</tr>';
        }
        ?>
      </table>


    </div>

  </div>

  <script src="js/dash.js"></script>
</body>

</html>