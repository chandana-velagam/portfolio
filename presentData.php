<html>
<head>
  <title> Data</title>
  <link rel="stylesheet" href="styles.css"><meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <section id="hero">
  <div class="container">
  <div class="jumbotron jumbotron-fluid" style="text-align : center">
    <h1>Thanks for entering the details!</h1>
    <p>Name : <span style="color : royalblue"><?php $a=$_GET["name"]; echo $a?> </span></p>
    <p>Email : <span style="color : royalblue"><?php $a=$_GET["email"]; echo $a?> </span></p>
    <p>Subject : <span style="color : royalblue"><?php $a=$_GET["subject"]; echo $a?> </span></p>
    <p>Message : <span style="color : royalblue"><?php $a=$_GET["message"]; echo $a?> </span></p>
  </div>
</div>
</section>
</body>
</html>
