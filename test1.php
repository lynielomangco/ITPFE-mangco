
<div class="container">
   <style>
     
      .container{
         
         font-size: 25px;
         width: 500px;
         height: 490px;
         margin: auto;
         text-align: center;
    
    border: 10px solid #339;
      }
      .container1{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
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
<body class="main-layout inner_posituong">
<?php
   
     $fname = $_POST['fname'];
      
     $mname = $_POST['mname'];
      
     $lname = $_POST['lname'];

     $gender = $_POST['gender'];

     $username = $_POST['user_name'];

	  $password = $_POST['password'];
	  
	  $confpassword = $_POST['confpassword'];
	 
	  
?>
<main>
		<h1> REGISTER SUCCESS!! </h1>
      

		<label> First Name: </label>
		<span> <?php 
               if(isset($_POST['fname'])) {

                  echo $fname;
               
               if(empty($_POST['fname'])) {

                  echo "First Name is Required";
               }

               }
                  ?>
                   </span><br>

		<label> Middle Name: </label>
		<span> <?php 
               if(isset($_POST['mname'])) {

                  echo $mname;
               
               if(empty($_POST['mname'])) {

                  echo "Middle Name is Required";
               }

               }
                  ?> </span><br>

		<label> Last Name: </label>
		<span> <?php 
               if(isset($_POST['lname'])) {

                  echo $lname;
               
               if(empty($_POST['lname'])) {

                  echo "Last Name is Required";
               }

               }
                  ?> </span><br>

    <label> Gender: </label>
		<span> <?php 
               if(isset($_POST['gender'])) {

                  echo $gender;
               
               if(empty($_POST['gender'])) {

                  echo "Gender is Required";
               }

               }
                  ?> </span><br>

                  

		<label> Username: </label>
		<span> <?php 
               if(isset($_POST['username'])) {

                  echo $username;
               
               if(empty($_POST['username'])) {

                  echo "Username is Required";
               }

               }
                  ?> </span><br>

		<label> Password: </label>
		<span> <?php echo $password; ?> </span><br>

		<label> Confirm password: </label>
		<span> <?php echo $confpassword; ?> </span><br>
     <h3> <a class="btn "href="index.html"> Go Back &#8592; </a></h3>
     

</main>

</div>
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
</div>
<script>
    var MenuItems = document.getElementById("MenuItems")

    MenuItems.style.maxHeight = "0px";
    
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>