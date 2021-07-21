<!-- <?php
    
?> -->
      














  <div class="fresh-table toolbar-color-blue full-screen-table">
  <div class="bg-white">
     <h2 style="margin-top: 0px;text-align: center;margin-bottom: 0px;font-weight:bold;padding:5px" class="bg-primary">BIRTHS AND DEATH REGISTRY</h2>
  </div>
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->
    <table id="fresh-table" class="table">
      <thead>
        <th data-field="SSN">SSN</th>
        <th data-field="Full Name" data-sortable="true">Full Name</th>
        <th data-field="Date of Birth" data-sortable="true">Date of Birth</th>
        <th data-field="Occupation" data-sortable="true">Occupation</th>
        <th data-field="Nationality">Nationality</th>
        <th data-field="Place of birth">Place of birth</th>
        <th data-field="Date of Registration">Date of Registration</th>
        <th data-field="Date of Issurance">Date of Issurance</th>
        <!-- <th data-field="Place of Birth" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
      </thead>
      <tbody>
      <?php 
        // Connecting to mysql database
        $conn = new mysqli("localhost", "root", "12345", "web_sql_db");
        
        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo( "Failed to connect to MySQL: " . mysqli_connect_error() );
        }

        //echo "Connected to mysql successfully";
        //$query = "SELECT * from users"
        $query = "SELECT SSN,fullname,DOB,Occupation,Nationality,POB,Date_of_Reg,Date_of_Issuranance FROM users";
        $result = $conn->query($query);
  
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            //echo 'Births and Deaths Registry';
            //echo "SSN: " . . " - Full Name: " . . " - Date of Birth " . ." - Occupation " . . " - Nationality " . ." - Place of Birth " . ." - Date of Registration " . ."- Date of Issue " . ."<br>";
            echo "<tr><td>".$row["SSN"]."</td><td>".$row["fullname"]."</td><td>".$row["DOB"]."</td><td>".$row["Occupation"]."</td><td>".$row["Nationality"]."</td><td>".$row["POB"]."</td><td>".$row["Date_of_Reg"]."<\td><td>".$row["Date_of_Issuranance"]."</td></tr>";
          }
        } else {
          echo "<p>0 records found</p>";
        }

        $conn->close();
      ?>
      </tbody>
    </table>
  </div>









<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
// ?>