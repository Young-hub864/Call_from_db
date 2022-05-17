<!DOCTYPE html>
<html>
   <head>
      <style>
         table, th, td {
         border: 1px solid #fff;
         padding: 14px;
         margin: 0px auto;
         }
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Students Registration</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div class="container">
      <div class="shade">
         <div class="blackboard">
            <!-- form -->
            <form action="processor/parents_form.php" method="POST">
               <div class="form">
                  <p>
                     <label>First Name :</label>
                     <input type="text" name="first_name">
                  </p>
                   <p>
                     <label>Last Name :</label>
                     <input type="text" name="last_name">
                  </p>
                  <p>
                     <label>Phone Number</label>
                     <input type="tel" name="phone">
                  </p>
                  <p>
                     <label>Address</label>
                     <input type="text" name="address">
                  </p>
                  <p class="wipeout">
                     <button style="background-color: #bda27e;border-color: #bda27e;" type="submit" class="btn btn-primary">Submit</button>
                  </p>
            </form>
            </div>
         </div>
      </div>
   </body>
</html>
