<?php
//    echo phpinfo();
//    $conn = new SQLite3('web_sqlite_db.db');
//    if(!$conn){
//        die("Failed to connect to SQLITE: <br />");
//    }
    
//    echo "Connected to SQLite successfully.<br />";
//    echo 'Driver and Vehicle Licensing Authority';
    // $query = "CREATE TABLE IF NOT EXISTS user_table(birthcert_id text primary key, licence_no text, expiry_dat date, date_of_issue date)";
    // $conn->exec($query);
//    $query = "SELECT birth_cert_no,licence_no,expirydate,date_of_issue FROM users";
//    $result = $conn->query($query);

    // if ($result->num_rows > 0) {
        // output data of each row
//        while($row = $result->fetchArray()) {
//          echo 'Driver and Vehicle Licensing Authority';
//          echo "Birth Certificate Number: " . $row["birth_cert_no"]. " - Licence Number: " . $row["licence_no"]. " - Expiry date" . $row["expirydate"]." - Date of Issue " . $row["date_of_issue"]."<br>";
//        } 
    //   } else {
    //     echo "0 results";
    //   }


//    $conn->close();
    
    
?>




<div class="fresh-table toolbar-color-blue full-screen-table">
  <div class="bg-white">
     <h2 style="margin-top: 0px;text-align: center;margin-bottom: 0px;font-weight:bold;padding:5px" class="bg-primary">DRIVER AND VEHICLE LICENSING AUTHORITY (DVLA)</h2>
  </div>
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->
    <table id="fresh-table" class="table">
      <thead>
        <th data-field="birth_cert_no">Birth Certificate Number</th>
        <th data-field="licence_no" data-sortable="true">Licence Number</th>
        <th data-field="expirydate" data-sortable="true">Expiry Date</th>
        <th data-field="date_of_issue" data-sortable="true">Date of Issue</th>
        <!-- <th data-field="Place of Birth" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
      </thead>
      <tbody>
      <?php
    // Connecting to mysql database
    $conn = new SQLite3('web_sqlite_db.db');
    
    // Check for database connection error
    if(!$conn){
        die("Failed to connect to SQLITE: <br />");
    }

    //echo "Connected to mysql successfully";
    //$query = "SELECT * from users"
    $query = "SELECT birth_cert_no,licence_no,expirydate,date_of_issue FROM users";
    $result = $conn->query($query);

  while($row = $result->fetchArray()) {
    //echo 'Driver and Vehicle Licensing Authority';
    //echo "Birth Certificate Number: " . $row["birth_cert_no"]. " - Licence Number: " . $row["licence_no"]. " - Expiry date" . $row["expirydate"]." - Date of Issue " . $row["date_of_issue"]."<br>";
    echo "<tr><td>".$row["birth_cert_no"]."</td><td>".$row["licence_no"]."</td><td>".$row["expirydate"]."</td><td>".$row["date_of_issue"]."</td></tr>";
  } 
  
$conn->close();
?>
      </tbody>
    </table>
  </div>
