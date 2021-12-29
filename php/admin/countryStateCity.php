<?php
require '../connection.php';
// $con=mysqli_connect('localhost','root','','countrystate');


      if(isset($_REQUEST['country']))
      {
         $country_id= $_REQUEST['country'];

                    echo  '<option>--Select State--</option>';

                          $sql =  mysqli_query($con,"SELECT * FROM tbl_state WHERE country_id= $country_id ORDER BY name ASC");
                          while($row = mysqli_fetch_assoc($sql))

                          {

                    echo  '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                          
                          }

      }


      if(isset($_REQUEST['state']))
      {
         $city_state= $_REQUEST['state'];
                    echo  '<option>--Select City--</option>';

                           $sql = mysqli_query($con,"SELECT * FROM cities WHERE state_id='$city_state' ORDER BY name ASC");

                          while($row = mysqli_fetch_assoc($sql))

                          {

                    echo  '<option  value="'.$row["id"].'">'.$row["name"].'</option>';
                          
                          }

      }


?>