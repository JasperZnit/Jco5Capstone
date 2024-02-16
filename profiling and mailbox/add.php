<?php

require_once "connection.php";

if(isset($_REQUEST['btn_insert']))
{
	try
	{
		$Name	= $_REQUEST['txt_Name']; 
		$ICnum	= $_REQUEST['txt_ICnum'];
		$TelNo	= $_REQUEST['txt_TelNo']; 
		$Gender	= $_REQUEST['txt_Gender']; 
		$Classs	= $_REQUEST['txt_Class']; 
		$FName	= $_REQUEST['txt_FName']; 
		$FICnum	= $_REQUEST['txt_fICnum']; 
		$MName	= $_REQUEST['txt_MName']; 
		$MICnum	= $_REQUEST['txt_MICnum']; 
		$EName	= $_REQUEST['txt_EName']; 
		$ERel	= $_REQUEST['txt_ERel']; 
		$ETelNo	= $_REQUEST['txt_ETelNo']; 
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="upload/".$image_file; 
		
		if(empty($Name)){
			$errorMsg="Please Enter Name";
		}
		else if(empty($ICnum)){
			$errorMsg="Please Enter IC Number";
		}
		else if(empty($TelNo)){
			$errorMsg="Please Enter Contact Number";
		}
		else if(empty($Gender)){
			$errorMsg="Please Enter Gender";
		}
		else if(empty($Classs)){
			$errorMsg="Please Enter Class";
		}
		else if(empty($FName)){
			$errorMsg="Please Enter Father's Name";
		}
		else if(empty($FICnum)){
			$errorMsg="Please Enter Father's IC Number";
		}
		else if(empty($MName)){
			$errorMsg="Please Enter Mother's Name";
		}
		else if(empty($MICnum)){
			$errorMsg="Please Enter Mother's IC Number";
		}
		else if(empty($EName)){
			$errorMsg="Please Enter Emergency Contact Name";
		}
		else if(empty($ERel)){
			$errorMsg="Please Enter Relationship";
		}
		else if(empty($ETelNo)){
			$errorMsg="Please Enter Emergency Contact Number";
		}
		else if(empty($image_file)){
			$errorMsg="Please Select Image";
		}
		else if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
		{	
			if(!file_exists($path)) 
			{
				if($size < 5000000) 
				{
					move_uploaded_file($temp, "upload/" .$image_file); 
				}
				else
				{
					$errorMsg="Your File To large Please Upload 5MB Size"; 
				}
			}
			else
			{	
				$errorMsg="File Already Exists...Check Upload Folder"; 
			}
		}
		else
		{
			$errorMsg="Upload JPG , JPEG , PNG & GIF File Formate.....CHECK FILE EXTENSION"; 
		}
		
		if(!isset($errorMsg))
		{
			$insert_stmt=$db->prepare('INSERT INTO student_file(name,icnum,telno,gender,class,image,fname,fICnum,mname,micnum,ename,erel,etelno) VALUES(:fname,:ficnum,:ftelno,:fgender,:fclass,:fimage,:ffname,:fficnum,:fmname,:fmicnum,:fename,:ferel,:fetelno)'); //sql insert query					
			$insert_stmt->bindParam(':fname',$Name);
			$insert_stmt->bindParam(':ficnum',$ICnum);
			$insert_stmt->bindParam(':ftelno',$TelNo);
			$insert_stmt->bindParam(':fgender',$Gender);
			$insert_stmt->bindParam(':fclass',$Classs);
			$insert_stmt->bindParam(':fimage',$image_file);	  
			$insert_stmt->bindParam(':ffname',$FName);
			$insert_stmt->bindParam(':fficnum',$FICnum);
			$insert_stmt->bindParam(':fmname',$MName);
			$insert_stmt->bindParam(':fmicnum',$MICnum);
			$insert_stmt->bindParam(':fename',$EName);
			$insert_stmt->bindParam(':ferel',$ERel);
			$insert_stmt->bindParam(':fetelno',$ETelNo);
			
		
			if($insert_stmt->execute())
			{
				$insertMsg="File Upload Successfully........"; 
				header("refresh:3;index.php"); 
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Profile</title>
		
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="requestStyle.css" />
<link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>
<style>

</style>
<body>
    <input type="checkbox" id="menu-toggle" />
    <div class="sidebar">
      <div class="side-header">
        <h3>BRGY<span>HQ+</span></h3>
      </div>

      <div class="side-content">
        <div class="profile">
          <div class="profile-img bg-img" style="background-image: url(img/1.jpeg)"></div>
          <h4>Jasper Senit</h4>
          <small>Administrator</small>
        </div>

        <div class="side-menu">
          <ul>
            <li>
              <a href="dashboard.php" title="Dashboard">
                <span class="las la-home"></span>
                <small>Dashboard</small>
              </a>
            </li>
            <li>
              <a href="#content-profile" title="profile">
                <span class="las la-user-alt"></span>
                <small>Profile</small>
              </a>
            </li>
            <li>
              <a href="#content-mailbox" title="Mailbox">
                <span class="las la-envelope"></span>
                <small>Mailbox</small>
              </a>
            </li>
            <li>
              <a href="#content-request" title="Request">
                <span class="las la-scroll"></span>
                <small>Requests</small>
              </a>
            </li>
            <li>
              <a href="#content-validate" title="Validate">
                <span class="las la-id-card"></span>
                <small>Validate</small>
              </a>
            </li>
            <li>
              <a href="#content-records" title="Records">
                <span class="las la-folder-open"></span>
                <small>Records</small>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-content">
      <header>
      <div class="header-content">
          <label for="menu-toggle">
            <span class="las la-bars"></span>
          </label>

          <div class="header-menu">
            <input type="text" class="search-box" placeholder="Search...">
            <label for="">
              <span class="las la-search"></span>
            </label>

            <div class="notify-icon">
              <span class="las la-envelope" onclick="toggleMenu('MessageMenu')"></span>
              <span class="notify">4</span>
              <div class="mini-menu-wrap" id="MessageMenu">
                <div class="mini-menu">
                    <div class="">
                      <h3>Messages</h1>
                    </div>
                    <hr>
                    <span></span>
                    <span></span>
                </div>
              </div>
            </div>

            <div class="notify-icon">
              <span class="las la-bell" onclick="toggleMenu('NotifMenu')"></span>
              <span class="notify">3</span>
              <div class="mini-menu-wrap" id="NotifMenu">
                <div class="mini-menu">
                    <div class="">
                      <h3>Notifications</h1>
                    </div>
                    <hr>
                    <span></span>
                    <span></span>
                </div>
              </div>
            </div>

            <div class="user">
              <div class="bg-img" style="background-image: url(img/1.jpeg)" onclick="toggleMenu('ProfMenu')"></div>

              <span class="las la-power-off"></span>
              <span>Logout</span>
            </div>
            <div class="mini-menu-wrap" id="ProfMenu">
              <div class="mini-menu">
                <div class="user-info">
                  <h3> Jasper Senit </h3>
              </div>
                  <hr>
                  <a href="#" class="mini-menu-link">
                    <img src="img/profile.png">
                    <p>Edit Profile</p>
                    <span>  </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/setting.png">
                    <p>Settings and Privacy</p>
                    <span> </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/help.png">
                    <p>Help & Support</p>
                    <span>  </span>
                </a>

                <a href="#" class="mini-menu-link">
                    <img src="img/logout.png">
                    <p>Logout</p>
                    <span>  </span>
                </a>
                  
              </div>
            </div>
          </div>
        </div>
      </header>
      <!------- content in each tab ------->
      <main>
	  <div class="page-header">
            <h1>Profile</h1>
            <small>All Profiles</small>
          </div>
	  <?php
		if(isset($errorMsg))
		{
			?>
            <div align="margin-left" class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($insertMsg)){
		?>
			<div align="margin-left" class="alert alert-success">
				<strong>SUCCESS ! <?php echo $insertMsg; ?></strong>
			</div>
        <?php
		}
		?>   
		<form method="post" class="container" enctype="multipart/form-data">
				<div >
                
                <div>
                <h3 style="color: #191970;"><p>Register Information</p></h3>

				<div class="form-group">
				<label>Name:</label>
				<input type="text" name="txt_Name" class="form-control" placeholder="enter name" />
				</div>
				

				<div class="form-group">
				<label>IC Number:</label>
				<input type="number" name="txt_ICnum" class="form-control" placeholder="enter IC number" />
				</div>

				<div class="form-group">
				<label>Telephone Number:</label>
				<input type="text" name="txt_TelNo" class="form-control" placeholder="enter telephone number" />
				</div>

				<div class="form-group">
				<label>Gender:</label>
				<select name="txt_Gender" class="form-control" >
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                </select>
				</div>

				<div class="form-group">
				<label>Class:</label>
				<select name="txt_Class" class="form-control">
                        <option value="01A">01A</option>
                        <option value="01B">01B</option>
                        <option value="02A">02A</option>
                        <option value="02B">02B</option>
                </select>
				</div>

				<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="txt_file" class="form-control" />
				</div>
			</div>
			<div>
                <h3 style="color: #191970;text-align:left;"><p>Parent's Information</p></h3>
				<div class="form-group">
				<label>Father's Name</label>
				<input type="text" name="txt_FName" class="form-control" placeholder="enter name" />
				</div>

				<div class="form-group">
				<label>Father's IC Number</label>
				<input type="number" name="txt_fICnum" class="form-control" placeholder="enter IC number" />
				</div>


				<div class="form-group">
				<label>Mother's Name</label>
				<input type="text" name="txt_MName" class="form-control" placeholder="enter name" />
				</div>

				<div class="form-group">
				<label>Mother's IC Number</label>
				<input type="number" name="txt_MICnum" class="form-control" placeholder="enter IC number" />
				</div>
			</div>
				<div>
					<h3 style="color: #191970;text-align:left;"><p>Emergency Contact Details</p></h3>
				<div class="form-group">
				<label>Emergency Contact Name</label>
				<input type="text" name="txt_EName" class="form-control" placeholder="enter name" />
				</div>

				<div class="form-group">
				<label>Relationship</label>
				<input type="text" name="txt_ERel" class="form-control" placeholder="enter relationship" />
				</div>

				<div class="form-group">
				<label>Emergency Contact Number</label>
				<input type="text" name="txt_ETelNo" class="form-control" placeholder="enter telephone number" />
				</div>
				</div>	
					
				<div class="form-group">
				<input type="submit"  name="btn_insert" class="btn btn-success " value="Insert">
				<a href="index.php" class="btn btn-danger">Cancel</a>
				</div>
				</div>
			</form>			    
      </main>
                 <div style="text-align: end;">
                    <button><a href="add.php">Add Profile</a></button>
                    <button><a class="active" href="index.php">Profile List</a></button>
                </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
  </body>
  
</html>