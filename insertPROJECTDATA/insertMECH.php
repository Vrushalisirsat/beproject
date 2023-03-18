<!DOCTYPE html>
<html lang="en">

<head>

    <title>Form page</title>
    <link rel="stylesheet" type="text/css" href="one.css">
</head>



<body>
<form action="insertMECH.php"  method="POST">
    <div>   
        
        <div class="one">

            <h1>Enter project Details</h1>

        </div>

        <div class="container">

            <div class="two">
                <h3><span>Students_Name</span><br></h3>
                <textarea name="students_name" type="text" cols="70" rows="7"></textarea>
            </div>

            <div class="three">
                <h3><label for="project_name">Project_Name</label></h3>
                <input type="text" class="form-control" id="project_name" name="project_name" />
            </div>

            <div class="four">
                <h3><label for="deparnment">Deparnment</label></h3>
                <input type="text" class="form-control" id="deparnment" name="deparnment" />
            </div>

            <div class="five">
                <h3><label for="guided_by">Guided_By</label></h3>
                <input type="text" class="form-control" id="guided_by" name="guided_by" />


                </table>
            </div>

            <div class="six">
                <td colspan="2" rowspan="2">
                    <label id="project_details">
                        <h3><span>Project_Details</span><br></h3>
                        <textarea name="project_details" type="text" cols="70" rows="8"></textarea>

                </td>
            </div>

            <form>
                <div class="seven">
                    <h2><input type="Submit" value="SUBMIT" name="submit"></h2>
                </div>
            </form>

            <div class=" panel footer text-right">
                <small> @Ten Coder Squad</small>
            </div>


        </div>


    </div>

<br>




 <!-- Signup form php -->
 <?php

 #create connection
       $con =mysqli_connect('localhost','root','','php_college');
 
 
 
       if(isset($_POST['submit']))
       {
          $studname=$_POST['students_name'];
          $projectname=$_POST['project_name'];
          $dept=$_POST['deparnment'];
          $guidby=$_POST['guided_by'];  
          $projectdetails=$_POST['project_details'];
    

          $query="INSERT INTO mainmech(students_name,project_name,deparnment,guided_by,project_details) VALUES ('$studname','$projectname','$dept','$guidby','$projectdetails')";
          $run=mysqli_query($con,$query);

          
          //$sql="select username,password from login where username='$email' and password='$password'";
         //  $result=mysqli_query($con,$sql);
 
         
          if(($run)>0)
          {
             echo "Data Inserted Succesfully";
          }
          else
          {
             echo "Invalid Data";
          }
 
       }
       ?>
 
 <br>
 
 
 <a href="/beproject" style=" padding-left: 300px; text-align:bottom; " >Back to home</a>
 
 





 </form>


</body>

</html>