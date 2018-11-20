<?php
 $connect = mysqli_connect("localhost", "root", "", "seniorcare");
 $output = '';
 $sql = "SELECT * FROM booking ORDER BY serviceID DESC";
 $result = mysqli_query($connect, $sql);
 $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th>Service ID</th>
                     <th>Service Name</th>
                     <th>Booking Date</th>
                     <th>Booking Time</th>
                     <th>Notes</th>
                     <th>Number of Services</th>
                     <th>Status</th>
                     <th>Action</th>
                </tr>';
 $rows = mysqli_num_rows($result);
 if($rows > 0)
 {
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM booking LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["serviceID"].'</td>

                     <td class="serviceName" data-id1="'.$row["serviceID"].'" contenteditable>'.$row["serviceName"].'</td>
                     <td class="bookingDate" data-id2="'.$row["serviceID"].'" contenteditable>'.$row["bookingDate"].'</td>
                     <td class="bookingTime" data-id3="'.$row["serviceID"].'" contenteditable>'.$row["bookingTime"].'</td>
                     <td class="notes" data-id4="'.$row["serviceID"].'" contenteditable>'.$row["notes"].'</td>
                     <td class="numOfServices" data-id5="'.$row["serviceID"].'" contenteditable>'.$row["numOfServices"].'</td>
                     <td class="status" data-id6="'.$row["serviceID"].'" contenteditable>'.$row["status"].'</td>
                     <td><button type="button" name="delete_btn" data-id7="'.$row["serviceID"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>

                </tr>
           ';
      }
      $output .= '
           <tr>
                <td></td>

                <td id="serviceName" contenteditable></td>
                <td id="bookingDate" contenteditable></td>
                <td id="bookingTime" contenteditable></td>
                <td id="notes" contenteditable></td>
                <td id="numOfServices" contenteditable></td>
                <td id="status" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '
				<tr>
					<td></td>
          <td id="serviceID" contenteditable></td>
          <td id="serviceName" contenteditable></td>
          <td id="bookingDate" contenteditable></td>
          <td id="bookingTime" contenteditable></td>
          <td id="notes" contenteditable></td>
          <td id="numOfServices" contenteditable></td>
          <td id="status" contenteditable></td>
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
			   </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;
 ?>
