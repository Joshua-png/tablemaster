<div class="fresh-table toolbar-color-blue full-screen-table">
  <div class="bg-white">
     <h2 style="margin-top: 0px;text-align: center;margin-bottom: 0px;font-weight:bold;padding:5px" class="bg-primary">ELECTORAL COMMISION</h2>
  </div>
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->
    <table id="fresh-table" class="table">
      <thead>
        <th data-field="voter_id">Voter Id</th>
        <th data-field="Full Name" data-sortable="true">Full Name</th>
        <th data-field="Date of Birth" data-sortable="true">Date of Birth</th>
        <th data-field="region" data-sortable="true">Region</th>
        <th data-field="Reg_date" data-sortable="true"> Registration Date</th>
        <th data-field="sex" data-sortable="true">Sex</th>
        <th data-field="poll_code" data-sortable="true">Polling station code</th>
        <!-- <th data-field="Place of Birth" data-formatter="operateFormatter" data-events="operateEvents">Actions</th> -->
      </thead>
      <tbody>
      <?php 
        // Connecting to mysql database
        $conn = pg_connect("host=localhost dbname=web_pg_db user=postgres password=12345");
        
        if( $conn ) {
           // echo "Connected to PostgreSQL successfully.<br />";
            $query = "SELECT voter_id,full_name,dob,region,reg_date,sex,polling_code FROM users";
            $result = pg_query($conn,$query);
    
            
                while($row = pg_fetch_assoc($result)) {
                  //echo 'Electoral';
                  //echo "fullname: " . $row["full_name"]."<br>";
                  echo "<tr><td>".$row["voter_id"]."</td><td>".$row["full_name"]."</td><td>".$row["dob"]."</td><td>".$row["region"]."</td><td>".$row["reg_date"]."</td><td>".$row["sex"]."</td><td>".$row["polling_code"]."</td></tr>";
                }
             
    
            pg_close();
        } else {
            //echo "Failed to connect to PostgreSQL:<br />";
            die("<p>Failed to connect to PostgreSQL:</p><br />");
        }
          
      ?>
      </tbody>
    </table>
  </div>
