<!-- <!DOCTYPE html> -->
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
            <form action="processor/assessment_form.php" method="POST">
               <div class="form">
                  <p>
                     <label>Type</label>
                      <select class="custom_select" name="type">
                        <option value="">C.A</option>
                        <option value="" selected>Examination</option>
                     </select>
                  </p>
                   <p>
                     <label>Score</label>
                     <input type="tel" name="score">
                  </p>
                  <p>
                     <label>Overall Mark</label>
                     <input type="tel" name="overall">
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
