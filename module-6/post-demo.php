<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post resultaat</title>
</head>
<body>
  <h1>Je post data</h1>
  <p>Normaal sla je die op in een databank of verstuur je ze in een e-mail, maar als demo bek echo.</p>
  <pre>
<?php
echo 'Value 1: ' . htmlspecialchars($_POST["value1"]) . "\n" .
'Value 2: ' . htmlspecialchars($_POST["value2"]);
?>
  </pre>
</body>
</html>
