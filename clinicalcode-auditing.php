<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Title Tag
    ========================================================================= -->
    <title>Clinical Code Auditing Service</title>
    <!-- Site Favicon
    ========================================================================= -->
    <link rel="shortcut icon" href="images/fav.png" title="Favicon" />


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/x-cover.css" rel="stylesheet">
    <link href="css/he4.css" rel="stylesheet">
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:600,600italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->
<header id="top_navigation" >    
    <nav class=" top-navbar navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="nav-icon">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </span>
                   <span class=" menu-link-text">Menu</span> 
                </button>
                 <a href="index.html" class="navbar-brand" title="let’s care together"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right text-capitalize" role="tablist">
                    <li>
                        <a href="index.html">home</a>
                    </li>
                    <li class="active">
                        <a href="services.html">services</a>
                    </li>
                    <li>
                        <a href="methodology.html">our methodology</a>
                    </li>
                     <li>
                        <a href="about.html">about us</a>
                    </li>
                     <li>
                        <a href="#productsolutions.html">product & solutions</a>
                    </li>
                    <li>
                        <a href="#news.html">news</a>
                    </li>
                    <li>
                        <a href="#search"><i class="fa fa-search"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="cc-auditing." class="x-site-cover" >
  <div class="x-site-cover-inner">
    <div class="x2-cover-container" id="coverbg">
     	<div class="x-inner x-cover text-center white">
         <div id="content" class="row">	
            <h1 class="crimson">Clinical Code Auditing Service</h1>
          </div>     
      </div>
	</div>
 </div>
</div>
<section id="left-right">
	<div class="container scs">
    	<div class="row">
        	<div id="section-right" class="col-md-7 id">
            	<div class="section-data  bm">
                	<h3 class="text-capitalize">Clinical Code Auditing Service</h3>
                     <p>Are your clinical documentation accurate and complete? You will be agree that quality healthcare is based on accurate and complete clinical documentation in the medical record. We will make a complete audit of your clinical code to review its coding accuracy, policies and procedures to ensure that you are an efficient and compliant organization.</p>
                     <p class=" bg-danger text-danger">WE ARE AN APPROVED HIM AUDITING COMPANY, BY HAAD.
</p>
                </div>
                <div class="section-data ">
                     <h5>Healthcare organizations, like yours, go for a Coding Audit to:</h5>
                     <ul>
                     	<li>Ensure transparency between patients, providers, & payers.</li>
                        <li>Provide efficient and better delivery of care.</li>
                        <li>Improve the financial health.</li>
                        <li>Determine areas that require improvements and corrections.</li>
                        <li>Protect against fraudulent claims and billing activities.</li>
                        <li>Reveal inappropriate coding, insufficient documentation, or lost revenue.</li>
                        <li>Identify and correct problem areas before payers challenge inappropriate coding.</li>
                        <li>Remedy under-coding, bad unbundling habits, and code overuse and to bill appropriately for documented procedures.</li>
                        <li>Stop the use of outdated or incorrect codes</li>
                     </ul>
                     <h5>A Snapshot of optimized performance after the audit as an appetizer:</h5>
                     <ul>
                     	<li>Executive Reports and Action Plan for all cases with recommendations.</li>
                        <li>Summary of Findings.</li>
                     	<li>Financial Impact Report</li>
                     </ul>
                     <h5>Code Audit Services for your organization:</h5>
                     <ul>
                     	<li>Hospital code audit Services</li>
                        <li>Physician code audit Services</li>
                     </ul>
                     <h5>HE4 Team Capabilities:</h5>
                     <ul>
                     	<li>AHIMA and AAPC Certified</li>
                        <li>Six Sigma Certified</li>
                        <li>TTT (Trained To Teach)</li>
                        <li>Over 10 years of experience in Healthcare</li>
                     </ul>
                    
                    
                     
                </div>		
            </div><!--s1-->
            
             <?php
            
             if(isset($_POST['submit'])){
              //  var_dump($_POST);
                $dbhost = '127.0.0.1';
                $dbuser = 'cranbes0_shahid';
                $dbpass = 'cr@nberry1';
                $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                if(! $conn )
                {
                    die('Could not connect: ' . mysql_error());
                }
            
                            
							$fname = addslashes($_POST['fname']);
							$lastname = addslashes($_POST['lastname']);
							$email = addslashes($_POST['email']);
							$phone = addslashes($_POST['phone']);
							$organization = addslashes($_POST['organization']);
							$industry = addslashes($_POST['industry']);
							$state = addslashes($_POST['state']);
							$concern = addslashes($_POST['concern']);
                           // $date=date('y-m-d h:i:s'); 
						   
                            $sql = "INSERT INTO he4_contest (fname, lastname, email, phone, organization, industry, state, concern)VALUES ('$fname', '$lastname', '$email', '$phone', '$organization', '$industry', '$state', '$concern'); ";
                         
							  mysql_select_db('cranbes0_he4');
                            
                            $retval = mysql_query($sql,$conn);
                            if(!$retval ){
                                die('Could not enter data: ' . mysql_error());
                            }
                            
							
                            $to = 'info@he4.com';
                            //$to = 'anwar@cranberrymktg.com';
                            $subject = 'Clinical Code Auditing Service'; 
                            $message = "Get Free Assessment on Clinical Code Auditing Service."; 
                            $headers = "From: $email\r\nReply-To: $email";
							$headers .= 'Bcc: shahid@cranberrymktg.com' . "\r\n";
                            $mail_sent = mail( $to, $subject, $message, $headers );
                            echo $mail_sent ? "Mail sent" : "Mail failed";
            				//echo "Email sent!";
                            ?>
                            <script type="text/javascript">
                              document.location.href="http://www.cranberrymktg.com/demo/HE4/thankyou.php?msg=succes&name=<?php echo $fname;?>";
                            </script>
                            <?php 
                             if($retval){	
                            
                                header('location:http://www.cranberrymktg.com/demo/HE4/thankyou.php?msg=succes&name='.$fname);
                                mysql_close($conn);
                                }
                         
		            }
            ?>
            
            <div id="heform" class="col-md-4 col-md-offset-1 id">
              <div class=" panel panel-danger">
                 <div class="panel-heading bg-danger text-center">Get Free Assessment on Clinical Code Auditing Service</div>
                	<div class="panel-body">
                    	<form class="form-horizontal" role="form" method="post" name="consultation">
                            <fieldset>
                                
                                <div class="form-group-lg">
                                      <input type="text"  name="fname" placeholder="First Name" id="firstname" class="form-control">
								</div>
                                <div class="form-group-lg">
                                      <input type="text"   name="lastname"  placeholder="Last Name" id="lastname" class="form-control">
                                </div>
                                
                                <div class="form-group-lg">
                                      <input type="email"  name="email"  placeholder="Email Address" id="email" class="form-control">
								</div>
                                <div class="form-group-lg">
                                      <input type="tel"  name="phone"  placeholder="Phone" id="phone" class="form-control">
                                </div>
                                <div class="form-group-lg">
                                      <input type="text"  name="organization"  placeholder="Organization" id="organization" class="form-control">
								</div>
                                <div class="form-group-lg">
                                      <input type="text" name="industry"  placeholder="Industry" id="industry" class="form-control">
                                </div>
                                <div class="form-group-lg">
                                     <select class="form-control" tabindex="2"  name="state" > 
										<option value="United States">United States</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Aland Islands">Aland Islands</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									</select>
								</div>
                                <div class="form-group-lg">
                                  <textarea  name="concern"  class="form-control" placeholder="What is your major concern"></textarea>
          						</div>
                                
                                <button type="submit" name="submit" class="btn btn-danger  btn-block tm">Request Your Consultation</button>
                                
                            </fieldset>
                        </form>
                    </div>
                    <div class="panel-footer bg-danger"><b>Note:</b> One of our team member will call you back in max 2 working days.
</div>
                </div>
            </div><!--s2-->
        </div>
    </div>
</section>

<footer class="ultra-gray">
		<div class="container">
			<div class="row col-lg-12 ">
				<div class=" col-md-4">
					<strong>HE4</strong>
					<ul>
						<li><a href="about.html">About Us</a></li>
						<li><a href="#what?">Career</a></li>
                        <li><a href="methodology.html">Methodology</a></li>

					</ul>
				</div><!--Post1-->
				<!--<div class="col-md-3">
                 <div class="foo-sec">
					<strong>PRODUCT & SOLUTION</strong>
					<ul>
						<li><a href="#">Medical Imaging and Dental </a></li>
						<li><a href="#">Solutions</a></li>
						<li><a href="#">ERP and Revenue Management </a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">HIS Value-Added Solutions</a></li>
                        <li><a href="#">Clinical Solutions</a></li>
                        <li><a href="#">Integration Solutions</a></li>
					</ul>
                   </div>
                  
				</div>-->
				<div class="col-md-4 contact">
				  <div class="foo-sec">
					<strong>Services</strong>
					<ul>
						<li><a href="end-to-end.html">End-to-End Implementation Services</a></li>
						<li><a href="pp-management.html">Program and Project Management</a></li>
						<li><a href="clinicalcode-auditing.html">Clinical Coding and auditing Services</a></li>
					</ul>
                   </div> 
				</div>
                <div class="col-md-4 contact">
					<strong>Contact</strong>
                    <address>2nd Floor Suite 204, Building 8,
Dubai Outsource Zone, Dubai, UAE</address>

					<div class="foo">
                        <ul>
                        <li><i class="fa fa-phone"></i> &nbsp; +971 4 3914491 </li>
                        <li><i class="fa fa-fax"></i> &nbsp; +971 4 3908621</li>
                        <li><i class="fa fa-envelope"></i> &nbsp; info@he4.com</li>
                            
                        </ul>
                    </div>
                    <div class="foo">	
                    <strong>Follow US</strong>
                    <ul class="list-inline">
                     <li><a href="https://www.facebook.com/OCSHISolutionsAndServices" target="new" title="Like Us"><i class=" fb fa fa-2x fa-facebook-square"></i></a></li>
                     <li><a href="https://twitter.com/OCSHI_Solutions" target="new" title="Follow Us"><i class=" tw fa fa-2x fa-twitter-square"></i></a></li>
                     <li><a href="http://www.linkedin.com/company/ocshi" target="new" title="Connect With Us"><i class=" in fa fa-2x fa-linkedin-square"></i></a></li>
                    </ul>
                  </div> 
				</div>
			</div>
			<div class="row">
            	<div class="col-md-12 text-center">
                	<span class="copyright">© Copyright HE4 All Rights Reserved. </span>
                </div>
            </div>
        </div>
	</footer>

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/min/he4.min.js"></script>

</body>

</html>
