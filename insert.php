<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>TPM</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/fresh-bootstrap-table"/>

  <!--  Social tags    -->
  <meta name="keywords" content="creative tim, html table, html css table, web table, freebie, free bootstrap table, bootstrap, css3 table, bootstrap table, fresh bootstrap table, frontend, modern table, responsive bootstrap table, responsive bootstrap table">

  <meta name="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Fresh Bootstrap Table by Creative Tim">
  <meta itemprop="description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">

  <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <!-- Twitter Card data -->

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Fresh Bootstrap Table by Creative Tim">

  <meta name="twitter:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg">
  <meta name="twitter:data1" content="Fresh Bootstrap Table by Creative Tim">
  <meta name="twitter:label1" content="Product Type">
  <meta name="twitter:data2" content="Free">
  <meta name="twitter:label2" content="Price">

  <!-- Open Graph data -->
  <meta property="og:title" content="Fresh Bootstrap Table by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://wenzhixin.github.io/fresh-bootstrap-table/full-screen-table.html" />
  <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/31/original/opt_fbt_thumbnail.jpg"/>
  <meta property="og:description" content="Probably the most beautiful and complex bootstrap table you've ever seen on the internet, this bootstrap table is one of the essential plugins you will need." />
  <meta property="og:site_name" content="Creative Tim" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet" />

  <!--   Fonts and icons   -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.js"></script>

  <!--  Just for demo purpose, do not include in your project   -->
  <script src="assets/js/demo/gsdk-switch.js"></script>
  <script src="assets/js/demo/jquery.sharrre.js"></script>
  <script src="assets/js/demo/demo.js"></script>

 

</head>
<body>

<div>
 <div class="bg-primary" style=" margin-top: 0px; margin-bottom: 0px; padding: 0.5em;">
   <h1 class="text-center fw-bold">NATIONAL IDENTIFICATION AUTHORITY (NIA)</h1>
 </div>
  
  <form method="post" style="margin: 3em 0">
              <div class="container-fluid m-4">
                <div class="row align-items-center">
                  <div class="col-3 col-sm-3 text-center">
                    <input type="submit" class='btn bg-gradient-info w-100 mt-4 mb-0 click shadow-lg' name="mysql" value="MYSQL(BND REGISTRY)" />
                  </div>
                  <div class="col-3 col-sm-3 text-center">
                    <input type="submit" class='btn bg-gradient-info w-100 mt-4 mb-0 click' name="postgreSQL" value="POSTGRESQL(EC)" />
                  </div>
                  <div class="col-3 col-sm-3 text-center">                           
                    <input type="submit" class='btn bg-gradient-info w-100 mt-4 mb-0 click' name="sqlite" value="SQLITE(DVLA)" />
                  </div>
                  <div class="col-3 col-sm-3 text-center">                                   
                    <input type="submit" class='btn bg-gradient-info w-100 mt-4 mb-0 click' name="oracle" value="MARIA(GIS)" />
                  </div>
                  
                </div>
              </div>

    </form>
    
  
   

  <?php 
  
function runMySQLFunction() {
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
  }

  function runpostgreSQLFunction() {
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
  }

  function runmsSQLiteFunction() {
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
  }

function runmariaFunction() {
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
  }
  if (array_key_exists('mysql', $_POST)) {
    //include 'sqltest.php';
    runMySQLFunction();
  }

  if (array_key_exists('postgreSQL', $_POST)) {
    //include 'pgtest.php';
    runpostgreSQLFunction();
    
  }

  if (array_key_exists('sqlite', $_POST)) {
    //include 'sqlite.php';
    runmsSQLiteFunction();
  }

  if (array_key_exists('oracle', $_POST)) {
    //include 'maria.php';
    runmariaFunction();
  }
  ?>

  <!-- <div class="description description-footer">
    <h2 id="sharrreTitle">Thank you for shares!</h2>
    <br>
    <button id="twitter" class="btn btn-info btn-social btn-twitter btn-round btn-fill btn-wd"><i class="fa fa-twitter"></i></button>
    <button id="facebook" class="btn btn-info btn-social btn-facebook btn-round btn-fill btn-wd"><i class="fa fa-facebook-square"></i></button>

    <p>Copyright &copy; 2019 <a href="http://creative-tim.com">Creative Tim</a>, made with <i class="fa fa-heart ct-heart"></i> for a better web.</p>
  </div> -->
</div>


<!-- <div class="fixed-plugin" style="top: 300px">
  <div class="dropdown open">
    <a href="#" data-toggle="dropdown">
    <i class="fa fa-cog fa-2x"> </i>
    </a>
    <ul class="dropdown-menu">
      <li class="header-title">Adjustments</li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Full Background</p>
          <div class="switch"
            data-on-label="ON"
            data-off-label="OFF">
            <input type="checkbox" checked data-target="section-header" data-type="parallax"/>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="adjustments-line">
        <a href="javascript:void(0)" class="switch-trigger">
          <p>Colors</p>
          <div class="pull-right">
            <span class="badge filter badge-blue" data-color="blue"></span>
            <span class="badge filter badge-azure" data-color="azure"></span>
            <span class="badge filter badge-green" data-color="green"></span>
            <span class="badge filter badge-orange active" data-color="orange"></span>
            <span class="badge filter badge-red" data-color="red"></span>
          </div>
          <div class="clearfix"></div>
        </a>
      </li>
      <li class="header-title">Layouts</li>
      <li>
          <a class="img-holder" href="compact-table.html">
            <img src="assets/img/compact.jpg">
            <h5>Compact Table</h5>
          </a>
        </li>
        <li class="active">
          <a class="img-holder" href="full-screen-table.html">
            <img src="assets/img/full.jpg">
            <h5>Full Screen Table</h5>
          </a>
        </li>
        <li>
          <div class="">
            <a href="fresh-table-tutorial.html" target="_blank" class="btn btn-default btn-block btn-fill">Tutorial</a>
          </div>
        </li>
      <li>
        <div class="">
          <a href="http://www.creative-tim.com/product/fresh-bootstrap-table" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
        </div>
      </li>
    </ul>
  </div>
</div> -->

<script>
  var $table = $('#fresh-table')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
      '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
      '</a>',
      '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
      '</a>'
    ].join('')
  }

  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      height: $(window).height(),
      pageSize: 25,
      pageList: [25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })


    $(window).resize(function () {
      $table.bootstrapTable('resetView', {
        height: $(window).height()
      })
    })
  })

  $('#sharrreTitle').sharrre({
    share: {
      twitter: true,
      facebook: true
    },
    template: '',
    enableHover: false,
    enableTracking: true,
    render: function (api, options) {
      $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
    },
    enableTracking: true,
    url: location.href
  })

  $('#twitter').sharrre({
    share: {
      twitter: true
    },
    enableHover: false,
    enableTracking: true,
    buttons: { twitter: {via: 'CreativeTim'}},
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('twitter')
    },
    template: '<i class="fa fa-twitter"></i> {total}',
    url: location.href
  })

  $('#facebook').sharrre({
    share: {
      facebook: true
    },
    enableHover: false,
    enableTracking: true,
    click: function (api, options) {
      api.simulateClick()
      api.openPopup('facebook')
    },
    template: '<i class="fa fa-facebook-square"></i> {total}',
    url: location.href
  })
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga')

  ga('create', 'UA-46172202-1', 'auto')
  ga('send', 'pageview')

</script>

</body>

</html>
