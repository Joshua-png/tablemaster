


<!-- <?php
    
    ?> -->
      














    <div class="fresh-table toolbar-color-blue full-screen-table">
    <div class="bg-white">
       <h2 style="margin-top: 0px;text-align: center;margin-bottom: 0px;font-weight:bold;padding:5px" class="bg-primary">GHANA IMMIGRATION SERVICE</h2>
    </div>
    <!--
      Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
      Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->
      <table id="fresh-table" class="table">
        <thead>
          <th data-field="Full Name" data-sortable="true">Full Name</th>
          <th data-field="Date of Birth" data-sortable="true">Date of Birth</th>
          <th data-field="Place of birth" data-sortable="true">Place of birth</th>
          <th data-field="Passport_Number" data-sortable="true">Passport Number</th>
          <th data-field="Occupation" data-sortable="true">Occupation</th>
          <th data-field="Contact_Address">Contact Address</th>
          <th data-field="Nationality">Nationality</th>
          <th data-field="Gender">Gender</th>
          <th data-field="GIS">Ghana Immigration Service Id</th>
          <!-- <th data-field="Place of Birth" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
        </thead>
        <tbody>
        <?php
         $dbhost = 'localhost:3036';
         $dbuser = 'root';
         $dbpass = '12345';
         $db ='web_maria_db';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
      
         if(! $conn ) {
            die('Could not connect: ' . mysqli_connect_error());
         }
         
         //echo 'Connected successfully';
         $query = "SELECT full_name,dob,pob,passport_no,occupation,contact_address,nationality,gender,gis_id FROM users;";
         $result = mysqli_query($conn,$query);

         while ($row = mysqli_fetch_assoc($result)) {
           echo "<tr><td>".$row["full_name"]."</td><td>".$row["dob"]."</td><td>".$row["pob"]."</td><td>".$row["passport_no"]."</td><td>".$row["occupation"]."</td><td>".$row["contact_address"]."</td><td>".$row["nationality"]."</td><td>".$row["gender"]."</td><td>".$row["gis_id"]."</td></tr>";
        
        }
         mysqli_close($conn);
      ?>
        </tbody>
      </table>
    </div>