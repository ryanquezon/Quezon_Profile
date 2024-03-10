<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile ni Ryan</title>
    <link rel="stylesheet" href="profile_style.css">
    <script src="https://kit.fontawesome.com/7e5cb252d5.js" crossorigin="anonymous"></script>
    <style>
      .header-text button {
    background-color: #d2b55b;
    color: #000000; 
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.header-text button:hover {
    background-color: #c49a32; 
}
    </style>
</head>
<body>
<div id="header">

<div class="container">
    <div class="header-text">
        <h1><span>Kon'nichiwa!</span><br>Watashinonamaeha Ryan.<br>I am a student from NU Fairvew.</h1>
        <button class="header-text" onclick="redirectToIndex()">Know more about me</button>
    </div>
    
</div>
</div>
  

  <script>
    function redirectToIndex() {
      window.location.href = 'profile.php';
    }
  </script>
</body>


</html>
