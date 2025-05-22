<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <title>Shop</title>
</head>

<body>
  <nav>
    <div class="logo">
      <img src="./rec/Logo.png" alt="" />
      <h3>VeggieCart</h3>
    </div>
    <ul>
      <li class="active">
        <a href="./index.php">
          <i class="fa-solid fa-store"></i>
          <p>Store</p>
        </a>
      </li>
      <li>
        <a href="dashboard.php">
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

      <select class="filter" name="" id="">
        <option value="all">All Items</option>
        <option value="veg">Vegtables</option>
        <option value="fru">Fruits</option>
      </select>

      <ul class="itemList">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "veggicart";
        $conn = mysqli_connect($servername, $username, $password, $dbname);


        $result = mysqli_query($conn, "SELECT * FROM `items` where inStock > 0");

        while ($row = mysqli_fetch_assoc($result)) {
          echo '<li class="item" item_id="' . $row['id'] . '" category = "' . $row['category'] . '">';
          echo '<img src="' . $row['img'] . '" alt="' . $row['name'] . '" />';
          echo '<div class="info">';
          echo '<div class="head">';
          echo '<p class="name">' . $row['name'] . '</p>';
          echo '<p class="dis">' . $row['disc'] . '</p>';
          echo '<p class="price">' . $row['price'] . ' <span class="unit">' . $row['curency'] . '</span></p>';
          echo '</div>';
          echo '<div class="quantity-controls">';
          echo '<button class="quantity-btn minus">';
          echo '<i class="fas fa-minus"></i>';
          echo '</button>';
          echo '<span class="quantity">1</span>';
          echo '<button class="quantity-btn plus">';
          echo '<i class="fas fa-plus"></i>';
          echo '</button>';
          echo '</div>';
          echo '</div>';
          echo '</li>';
        }
        ?>
      </ul>
    </div>
  </div>
</body>
<script src="js/app.js"></script>

</html>