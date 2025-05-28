<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form id="bookForm" method="post" action="summary.php">
  <table>
    <thead>
      <tr>
        <th>Book Title</th>
        <th>Price (RM)</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="title[]" required></td>
        <td><input type="number" name="price[]" step="0.01" required></td>
        <td><input type="number" name="quantity[]" required></td>
      </tr>
      <tr>
        <td><input type="text" name="title[]" required></td>
        <td><input type="number" name="price[]" step="0.01" required></td>
        <td><input type="number" name="quantity[]" required></td>
      </tr>
      <tr>
        <td><input type="text" name="title[]" required></td>
        <td><input type="number" name="price[]" step="0.01" required></td>
        <td><input type="number" name="quantity[]" required></td>
      </tr>
    </tbody>
  </table>
  <button type="submit">View Summary</button>
</form>
</body>
</html>