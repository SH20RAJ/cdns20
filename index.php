<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GitHub to jsDelivr CDN Converter</title>

  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="mb-4">GitHub to jsDelivr CDN Converter</h1>
    <div class="form-group">
      <label for="githubLink">GitHub Link:</label>
      <input type="text" id="githubLink" class="form-control" placeholder="Enter GitHub link">
    </div>
    <button class="btn btn-primary mt-2" onclick="convertToJsDelivr()">Convert</button>
    <p id="cdnLink" class="mt-3"></p>
  </div>

  <!-- Add Bootstrap JS (Optional, required for some Bootstrap components) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Add your script.js file after Bootstrap -->
  <script src="script.js"></script>
</body>
</html>
