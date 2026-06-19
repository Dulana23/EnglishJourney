<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | EnglishJourney</title>

    <link rel="stylesheet" href="bootstrap.css">
     <link rel="stylesheet" href="EJ.css">

    <link rel="icon" href="Img/logo.png">
</head>
<body class="bodyH">
      <div class="container-fluid">
           <div class="row">
                    
           <?php
            include "header.php";
            include "navbar.php";

                 ?>

             
       
                      <div class="col-12  rounded mt-4 mb-4 ">
                            <div class="row g-2">
                               
                              <div class="col-12 ">
                                 <div class="row">
                               
                                     <div class="col-12 col-lg-12 mt-2 my-lg-4">
                                 
                                      
                                       </div>
                                         <h1 class="col-12  col-lg-12 text-dark fw-bold text-center">Profile Settings</h1>
                                     </div>

                                     </div>
                                </div>   
                           
                                <div class="col-12 offset-0 offset-lg-2 col-12 col-lg-8 justify-content-center">
                                    <div class="d-flex flex-column align-items-center text-center p-1 py-5">
                                            

                                       

                            
                                            <img src="Img/Profile.jpg" id="img" class="rounded mt-3" style="width: 150px;" />
                                        
                                           
                                       

                                        <input type="file" class="d-none" id="profileimage" />
                                        <label for="profileimage" class="btn btn-primary mt-4" onclick="changeProfileImg();">Update Profile Image</label>

                                    
                                              

                                        <div class="row mt-4">
                                        
                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold ">First Name</label>
                                                <input id="fname" type="text" class="form-control" value="" />
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold" >Last Name</label>
                                                <input id="lname" type="text" class="form-control" value="" />
                                            </div>

                                            

                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold">Mobile</label>
                                                <input id="mobile" type="text" class="form-control" value="" />
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold">Password</label>
                                                <div class="input-group">
                                                    <input id="user_password" type="password" class="form-control" value="" readonly />
                                                    <span class="input-group-text bg-primary" id="basic-addon2" onclick="showPassword3();">
                                                        <i class="bi bi-eye-slash-fill text-white" id="basic-addon2_i"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold">Email</label>
                                                <input type="text" class="form-control" readonly value="" />
                                            </div>
                                             
                                        
                                               <div class="col-6">
                                                   <label class="form-label p1 fs-4 fw-bold">Registered Date</label>
                                                   <input type="text" class="form-control" readonly value="" />
                                               </div>

                                            
                                            

                                            
                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold">Address</label>
                                                <input type="text" class="form-control" readonly value="" />
                                            </div>
                                           

                                            <div class="col-6">
                                                <label class="form-label p1 fs-4 fw-bold">Gender</label>
                                                
                                                <input type="text" class="form-control" value="" readonly />
                                            </div>
                                              
                                            <center><div class="col-6 d-grid mt-5 me-lg-4">
                                                <button class="btn btn-primary" onclick="updateProfile();">Update My Profile</button>
                                            </div></center>

                                        </div>

                                    </div>
                                </div>
                             

                            
                      

                            </div>
                        </div>



       <?php
             include "footer.php";
       ?>         

           </div>
           

      </div>
      <script src="bootstrap.bundle.js"></script>
      <script src="script.js"></script>
</body>
</html>