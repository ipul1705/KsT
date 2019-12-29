<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sorted Name</title>
  </head>
  <body>
  
  <h1>Done</h1>
    
    <?php

      $file_path = "unsorted-names-list.txt "; //file unsorted-names-list.txt
      $new_file_path = "sorted-names-list.txt"; //file sorted-names-list.txt



      $rows = array(); //Definisi array
      $result = '';
      $data = file($file_path); //Get the data line in the file txt

      //Create arrays from data
      foreach($data as $key => $val) {
          $rowarray = explode(",", $val);
          $rows[] = $rowarray[0];
      }

      //var_dump($rows);

      asort($rows); // Sort data

      // Get Data after Sorted
      foreach($rows as $key => $val) {
          $result .= trim($data[$key]) . "\r\n";
      }

      file_put_contents($new_file_path, $result); // Input & Save to file sorted-names-list.txt
    ?>
  
  </body>
</html>

