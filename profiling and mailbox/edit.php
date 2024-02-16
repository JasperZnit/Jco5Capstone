<?php

require_once "connection.php";

if(isset($_REQUEST['update_id']))
{
	try
	{
		$id = $_REQUEST['update_id']; 
		$select_stmt = $db->prepare('SELECT * FROM student_file WHERE id =:id'); 
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute(); 
		$row = $select_stmt->fetch(PDO::FETCH_ASSOC);
		extract($row);
	}
	catch(PDOException $e)
	{
		$e->getMessage();
	}
	
}

if(isset($_REQUEST['btn_update']))
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
		$EName	= $_REQUEST['txt_ICnum'];
		$ERel	= $_REQUEST['txt_ERel']; 
		$ETelNo	= $_REQUEST['txt_ETelNo']; 
		$image_file	= $_FILES["txt_file"]["name"];
		$type		= $_FILES["txt_file"]["type"];		
		$size		= $_FILES["txt_file"]["size"];
		$temp		= $_FILES["txt_file"]["tmp_name"];
		
		$path="upload/".$image_file;
		$directory="upload/";
		
		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
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
				$errorMsg="Upload JPG, JPEG, PNG & GIF File Formate.....CHECK FILE EXTENSION";
			}
		}
		else
		{
			$image_file=$row['image']; 
		}
	
		
		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE student_file SET name=:name_up, icnum=:icnum_up, telno=:telno_up, gender=:gender_up,class=:class_up,image=:file_up,fname=:fname_up,fICnum=:fICnum_up,mname=:mname_up,micnum=:micnum_up,ename=:ename_up,erel=:erel_up,etelno=:etelno_up WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':name_up',$Name);
			$update_stmt->bindParam(':icnum_up',$ICnum);
			$update_stmt->bindParam(':telno_up',$TelNo);
			$update_stmt->bindParam(':gender_up',$Gender);
			$update_stmt->bindParam(':class_up',$Classs);
			$update_stmt->bindParam(':file_up',$image_file);
			$update_stmt->bindParam(':fname_up',$FName);
			$update_stmt->bindParam(':fICnum_up',$FICnum);
			$update_stmt->bindParam(':mname_up',$MName);
			$update_stmt->bindParam(':micnum_up',$MICnum);
			$update_stmt->bindParam(':ename_up',$EName);
			$update_stmt->bindParam(':erel_up',$ERel);
			$update_stmt->bindParam(':etelno_up',$ETelNo);
			$update_stmt->bindParam(':id',$id);
			 
			if($update_stmt->execute())
			{
				$updateMsg="File Update Successfully.......";	
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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <title>Profile</title>
    <link rel="stylesheet" href="requestStyle.css" />
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <style>
            li a.active {
            background-color: #191970;
            color: white;
            }

            .form-control {
  			display: block;
  			width: 100%;
  			height: 34px;
  			padding: 6px 12px;
  			font-size: 14px;
  			line-height: 1.42857143;
  			color: #555;
  			background-color: #fff;
  			background-image: none;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          	box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  			-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       		-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			}

    </style>
  </head>
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
                  <tbody>
				  <?php
		if(isset($errorMsg))
		{
			?>
            <div class="alert alert-danger">
            	<strong>WRONG ! <?php echo $errorMsg; ?></strong>
            </div>
            <?php
		}
		if(isset($updateMsg)){
		?>
			<div class="alert alert-success">
				<strong>UPDATE ! <?php echo $updateMsg; ?></strong>
			</div>
        <?php
		}
		?>
		<form method="post" class="container" enctype="multipart/form-data">
				<div style="margin: 50px;">
                <div>
                <h3 style="color: #191970;"><p>Register Information</p></h3>
				<div class="form-group">
				<label>Photo:</label>
				<input type="file" name="txt_file" class="form-control" value="<?php echo $image; ?>" />
				<div><img src="upload/<?php echo $image; ?>" height="100" width="100" /></div>
				</div>

				<div class="form-group">
				<label>Name:</label>
				<input type="text" name="txt_Name" class="form-control" value="<?php echo $name; ?>" />
				</div>
				

				<div class="form-group">
				<label>IC Number:</label>
				<input type="number" name="txt_ICnum" class="form-control" value="<?php echo $icnum; ?>" />
				</div>

				<div class="form-group">
				<label>Telephone Number:</label>
				<input type="text" name="txt_TelNo" class="form-control" value="<?php echo $telno; ?>" />
				</div>

				<div class="form-group">
				<label>Gender:</label>
				<select name="txt_Gender" class="form-control" value="<?php echo $gender; ?>">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                </select>
				</div>

				<div class="form-group">
				<label>Class:</label>
				<select name="txt_Class" class="form-control" value="<?php echo $class; ?>">
                        <option value="01A">01A</option>
                        <option value="01B">01B</option>
                        <option value="02A">02A</option>
                        <option value="02B">02B</option>
                </select>
				</div>
			</div>
			<div>
                <h3 style="color: #191970;text-align:left;"><p>Parent's Information</p></h3>
				<div class="form-group">
				<label>Father's Name</label>
				<input type="text" name="txt_FName" class="form-control" value="<?php echo $fname; ?>" />
				</div>

				<div class="form-group">
				<label>Father's IC Number</label>
				<input type="number" name="txt_fICnum" class="form-control" value="<?php echo $ficnum; ?>" />
				</div>


				<div class="form-group">
				<label>Mother's Name</label>
				<input type="text" name="txt_MName" class="form-control" value="<?php echo $mname; ?>" />
				</div>

				<div class="form-group">
				<label>Mother's IC Number</label>
				<input type="number" name="txt_MICnum" class="form-control" value="<?php echo $micnum; ?>" />
				</div>
			</div>
				<div>
					<h3 style="color: #191970;text-align:left;"><p>Emergency Contact Details</p></h3>
				<div class="form-group">
				<label>Emergency Contact Name</label>
				<input type="text" name="txt_EName" class="form-control" value="<?php echo $ename; ?>" />
				</div>

				<div class="form-group">
				<label>Relationship</label>
				<input type="text" name="txt_ERel" class="form-control" value="<?php echo $erel; ?>" />
				</div>

				<div class="form-group">
				<label>Emergency Contact Number</label>
				<input type="text" name="txt_ETelNo" class="form-control" value="<?php echo $etelno; ?>" />
				</div>
				</div>	
					
				<div class="form-group">
				<input type="submit"  name="btn_update" class="btn btn-primary" value="Update">
				<button><a href="index.php" class="btn btn-danger">Cancel</a></button>
				</div>
				</div>
			</form>
        </tbody>	

      </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="scriptReq.js"></script>
    <script src="script.js"></script>
  </body>
</html>

		
