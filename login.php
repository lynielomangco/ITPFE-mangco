<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);	

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{ box-sizing: border-box; }
        html, body{ margin: 0; padding: 0; }
        .container{
            margin: auto;

          
        }
        
        .container1{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
        .form-group{
            margin: 10px;
        }
         
         .form-group0{
               
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        
        input{
            width: 100%;
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 200px;
            padding: 15px;
            margin-left: 220px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius:33px;
            cursor: pointer;
            transition:  all .38s ease-in-out;
        }
        button:hover{
            background: dodgerblue;
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
         content: " *";
         color: red;
        }
        .container {
    width: 640px;
    height: 360px;
    align: center;
    border: 2px solid #339;
    padding-top: -20px;
    margin-top: 50px;
}
.he{
text-align:center;
}
.c1{
margin-left: auto;
margin-right:auto;
}
.head1{
    text-align: center;
    
}

.btn{
    display: inline-block;
    background: black;
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover {
    background: rgb(173, 171, 171);
    color: #00eaff;
}
.col-2{
    align-items: center;
    min-width: 300px;
    text-align: center;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around; 
    
}
.footer{
    background: black;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}
.footer p{
    color: #8a8a8a;
}
.footer h3{
    color: #fff;
    margin-bottom: 20px;
}
.footer-col-1,.footer-col-2{
    min-width: 250px;
    margin-bottom: 20px;
    text-align: center;
}
.footer-col-1{
    flex: 1;
    text-align: center;
    
}
.footer-col-1 img{
    width: 180px;
    margin-bottom: 20px; 
}
.footer-col-2 a{
    color: #8a8a8a;
    transition: 0.3s;
}
.footer-col-2 a:hover{
    background: #00eaff;
    color: rgb(46, 45, 45);
}
ul{
    list-style-type: none;
}
.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}
.copyright{
    text-align: center;
}
.copyright1{
    text-align: center;
    margin-top: 5px;}
	</style>

<div class="head1 "><img src="images/logo.png" width="150px"></div>

<div class="row">
            <div class="col-2">
                <a href="index.html" class="btn">Home &#8592;</a>
            </div>
        </div>

    <div class="container">
        <h2 class="he">Login</h2>
        <br><br>
		
	<div id="box">
		
		<form method="post">
			<div class="form-group">
             <b>Username</b>   <input type="text" name="user_name" id="username" required placeholder="Enter username"   oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             </div>
			 
			<div class="form-group">
              <b>Password</b>  <input type="password" name="password" id="password" placeholder="Enter new password"  title="Password should be of 6-10 length and should contain atleast one character and one number" Required>
              </div>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="register.php">Click to Register</a><br><br>
		</form>
	</div>
</body>
<div class="footer">
    <div class="container1">
        <div class="row">
            <div class="footer-col-1">
                <img src="images/logo2.png" width="160px">
                <p>WE SHIP WORLDWIDE. STAY FLY, STAY UPDATED.</p>
            </div>
            <div class="footer-col-2">
                <h3>Follow Us</h3>
                <ul>
                    <li><a href="https://web.facebook.com/bugoynakoykoymusic">Facebook</li></a>
                    <li><a href="https://twitter.com/koykoysorrento?lang=en">Twitter</li></a>
                    <li><a href="https://www.instagram.com/bugoynakoykoyofficial/?hl=en">Instagram</li></a>
                    <li><a href="https://www.youtube.com/results?sp=mAEB&search_query=bugoy+na+koykoy+">Youtube</li></a>
                </ul>
            </div>
            
        </div>
        <hr>
        <p class="copyright">Copyright 2022 - Daily Flight PH</p>
        <p class="copyright1">Remake by Lynielo A. Mangco</p>
    </div>
</html>