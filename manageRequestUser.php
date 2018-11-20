<body>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Manage Service Request</title>
    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="style_mr.css">



      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="homeSenior.php"><img src="img\LogoS.png" class="logo"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">

              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="serviceRequest.php">Submit Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="manageRequestUser.php">Manage Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="includes/logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>3

<br><br><br> <br> <br><br>

<div class="container">
    <br />
    <br />
<br />
<div class="table-responsive">
<h1 class="yellow">Manage Request</h1>
  <span id="result"></span>
  <div id="live_data"></div>
</div>
</div>


<br>


  </body>
</html>
<script>
$(document).ready(function(){
    function fetch_data()
    {
        $.ajax({
            url:"select.php",
            method:"POST",
            success:function(data){
				$('#live_data').html(data);
            }
        });
    }
    fetch_data();
    $(document).on('click', '#btn_add', function(){
        var serviceName = $('#serviceName').text();
        var bookingDate = $('#bookingDate').text();
        var bookingTime = $('#bookingTime').text();
        var notes = $('#notes').text();
        var numOfServices = $('#numOfServices').text();
        var status = $('#status').text();


        if(serviceName == '')
        {
            alert("Enter Service Type");
            return false;
        }
        if(bookingDate == '')
        {
            alert("Enter Booking Date");
            return false;
        }
        if(bookingTime == '')
        {
            alert("Enter Booking Time");
            return false;
        }
        if(notes == '')
        {
            alert("Enter Notes");
            return false;
        }
        if(numOfServices == '')
        {
            alert("Enter Number Of Services");
            return false;
        }
        if(status == '')
        {
            alert("Enter current status");
            return false;
        }
        $.ajax({
            url:"insert.php",
            method:"POST",
            data:{serviceName:serviceName, bookingDate:bookingDate,bookingTime:bookingTime,notes:notes,numOfServices:numOfServices,status:status},
            dataType:"text",
            success:function(data)
            {
                alert(data);
                fetch_data();
            }
        })
    });



	function edit_data(serviceID, text, column_name)
    {
        $.ajax({
            url:"edit.php",
            method:"POST",
            data:{serviceID:serviceID, text:text, column_name:column_name},
            dataType:"text",
            success:function(data){
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }
        });
    }
    $(document).on('blur', '.serviceName', function(){
        var serviceID = $(this).data("id1");
        var serviceName = $(this).text();
        edit_data(serviceID, serviceName, "serviceName");
    });
    $(document).on('blur', '.bookingDate', function(){
        var serviceID = $(this).data("id2");
        var bookingDate = $(this).text();
        edit_data(serviceID,bookingDate, "bookingDate");
    });
    $(document).on('blur', '.bookingTime', function(){
        var serviceID = $(this).data("id3");
        var bookingTime = $(this).text();
        edit_data(serviceID,bookingTime, "bookingTime");
    });
    $(document).on('blur', '.notes', function(){
        var serviceID = $(this).data("id4");
        var notes = $(this).text();
        edit_data(serviceID,notes, "notes");
    });
    $(document).on('blur', '.numOfServices', function(){
        var serviceID = $(this).data("id5");
        var numOfServices = $(this).text();
        edit_data(serviceID,numOfServices, "numOfServices");
    });
    $(document).on('blur', '.status', function(){
        var serviceID = $(this).data("id6");
        var status = $(this).text();
        edit_data(serviceID,status, "status");
    });

//delete_btn
      $(document).on('click', '.btn_delete', function(){
        var serviceID=$(this).data("id7");
        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{serviceID:serviceID},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        }
    });
});
</script>
