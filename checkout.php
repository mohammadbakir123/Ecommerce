<?php 
  
    $active='Account';
    include("includes/header.php");

?>
     <div id="content">
   <div class="container">
   <div class="col-md-12">
   <ul class="breadcrumb">
   <li>
   <a href="index.php">Home</a>
   </li>
    <li>Register</li>
   
   </ul>
   
   </div>
   <div class="col-md-3">
    
   
   
    <?php include("includes/sidebar.php"); ?>	
   
   </div>
    <div class="col-md-9">


   <?php
    if(!isset($_SESSION['customer_email'])){
		include("customer/customer_login.php");
		
	}else{
		
		 include("payment_option.php");
		
	}
	
	
   
   ?>
   
   </div>
   
   
      </div> 
	  </div>
   
   
     <?php include("includes/footer.php"); ?>	   

   <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    </body>
	</html>
   <?php
   
   if(isset($_POST['register'])){
	      $c_name = $_POST['c_name'];
		   $c_email = $_POST['c_email'];
		   $c_pass = $_POST['c_pass'];
	     $c_contact = $_POST['c_contact'];
	      
        $c_city = $_POST['c_city'];
	    $c_ip = getRealIpUser();
	 
	 $insert_customer ="insert into customers(customer_name,customer_email,customer_pass,customer_contact,customer_city,customer_ip) values 
	 ('$c_name','$c_email','$c_pass',' $c_contact',' $c_city','$c_ip')";
	 
	    
	     $run_customer = mysqli_query($con,$insert_customer);
	      $sel_cart = "select * from cart where ip_add='$c_ip'";
	   $run_cart = mysqli_query($con,$sel_cart);
	    $check_cart = mysqli_num_rows($run_cart);
	       if($check_cart>0){
			 
		   $_SESSION['customer_email']= $c_email;
		   
		   echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
		   
	   }else{
		    $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have an account')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
		   
	   }
   }
   
   ?>