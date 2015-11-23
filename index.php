<H1> Hello world </H1>
<?php
$con = mysqli_connect('192.168.8.133', 'aaaa', 'xx', 'db_test');
if ($con) {
  echo 'connected 1 successfully<br>';
  $query = mysqli_query($con, 'show databases');
  if ($query) {
    mysqli_select_db('db_test', $con);
    //while ($row = mysqli_fetch_row($query)) {
    //  print_r($row);
   // }
    $howlong = '1111years';
    $firstname = 'Albert';
    $sql = "UPDATE tb_test SET how_long='$howlong' WHERE first_name='$firstname'";
    echo "<pre>Debug: $sql</pre>\n";
    $result = mysqli_query($con, $sql);
    if (false == $result) {
      printf("error: %s\n", mysqli_error($con));
    } else {
      printf("successfully");
    }
  }
  mysqli_close($con);
}

?>
