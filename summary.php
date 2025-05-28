<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Summary</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #e0eafc, #cfdef3);
      padding: 30px;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .summary-card {
      max-width: 700px;
      margin: auto;
      background: white;
      padding: 25px;
      border-radius: 14px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #2c3e50;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #ccc;
    }

    th {
      background-color: #3498db;
      color: white;
    }

    tr:last-child td {
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="summary-card">
  <h2>Order Summary</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $titles = $_POST['title'];
      $prices = $_POST['price'];
      $quantities = $_POST['quantity'];

      $subtotal = 0;
      echo "<table>
              <tr><th>Book</th><th>Quantity</th><th>Unit Price (RM)</th><th>Subtotal (RM)</th></tr>";

      for ($i = 0; $i < count($titles); $i++) {
          $title = htmlspecialchars($titles[$i]);
          $price = floatval($prices[$i]);
          $quantity = intval($quantities[$i]);
          $itemSubtotal = $price * $quantity;
          $subtotal += $itemSubtotal;

          echo "<tr>
                  <td>{$title}</td>
                  <td>{$quantity}</td>
                  <td>" . number_format($price, 2) . "</td>
                  <td>" . number_format($itemSubtotal, 2) . "</td>
                </tr>";
      }

      $tax = $subtotal * 0.06;
      $total = $subtotal + $tax;

      echo "<tr><td colspan='3'>Subtotal</td><td>RM " . number_format($subtotal, 2) . "</td></tr>";
      echo "<tr><td colspan='3'>Tax (6%)</td><td>RM " . number_format($tax, 2) . "</td></tr>";
      echo "<tr><td colspan='3'>Total</td><td>RM " . number_format($total, 2) . "</td></tr>";
      echo "</table>";
  } else {
      echo "<p>No data submitted.</p>";
  }
  ?>
</div>

</body>
</html>
