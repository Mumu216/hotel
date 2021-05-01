<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ei variable ki asman theke asche ? -->
  <h1>Booking Successfull</h1> 

  <p>
  
  Room Id: {{$book->room_id}}
  </p>
  
 <p>
     Booking From: {{$book->booking_from}}
  </p>

  <p>
  
  Booking to: {{$book->booking_to}}
  
  </p>
  <p>
     Details: {{$book->details}}
  </p>
  <p>
       Price: {{$book->rate}}
  </p>
    
</body>
</html>