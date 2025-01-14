<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Milliondox</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.webp" rel="icon">
  <link href="assets/img/apple-touch-icon.webp" rel="apple-touch-icon">

  <!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
      .car_repet_nt {
    margin-bottom: 10px;
}
  .carrer_options .row .col-sm-8 {
    color: #c1bfbf;
    font-weight: 700;
}
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo me-auto"><a href="index.html">Milliondox</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0"><img src="assets/img/logo.webp" alt="logo" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="feature.html">Features</a></li>
          <li><a class="nav-link scrollto" href="pricing.html">Pricing</a></li>
          <li><a class="nav-link scrollto" href="https://milliondox.com/blogs/">Blogs</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="btn-login" href="https://milliondox.com/crm/public/login">Login</a>
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= hero Main Section ======= -->
  <section id="carrer_hero" class="carrer_hero" data-aos="fade-down" data-aos-delay="100">

<div class="career_hero_image">
<img class="desk-show" src="assets/img/carrer-hero.webp" alt="img">
<img class="mbl-show" src="assets/img/carrer-hero-mbl.webp" alt="img" style="display: none;">
<div class="hero_text" data-aos="fade-down" data-aos-delay="400">
    <h2>Where Passion Meets Purpose, and Every Voice Shapes Tomorrow</h2>
</div>
</div>

<div class="hero_botto_c">
<span data-aos="zoom-in" data-aos-delay="400">CAREERS</span>
<a href="#" data-aos="zoom-in" data-aos-delay="400">EXPLORE <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.75 12C21.75 6.624 17.376 2.25 12 2.25C6.624 2.25 2.25 6.624 2.25 12C2.25 17.376 6.624 21.75 12 21.75C17.376 21.75 21.75 17.376 21.75 12ZM20.25 12C20.25 16.5653 16.5652 20.25 12 20.25C7.43475 20.25 3.75 16.5653 3.75 12C3.75 7.43475 7.43475 3.75 12 3.75C16.5652 3.75 20.25 7.43475 20.25 12ZM16.8045 12.54L15.75 11.46L12.75 14.46L12.75 6.75H11.25L11.25 14.46L8.25 11.46L7.1955 12.54L11.4608 16.8045L12.0008 17.3445L12.5407 16.8045L16.8052 12.5392L16.8045 12.54Z" fill="#D1D1D1"/>
    </svg>
    </a>
</div>
        </section><!-- ======= hero Main Section ======= -->

            <!-- ======= carrer_opportunities Section ======= -->
  <section id="carrer_opportunities" class="carrer_opportunities">
    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-sm-8">
<div class="opp_head">
<h2>Opportunities Await</h2>
<p>Discover Your Next Career Move and Propel Your Journey with MillionDox</p>
</div>
            </div>

            <div class="col-sm-4">
<div class="opp_select">
    <select id="post_division" name="options">
        <option value="All">All</option>
          <!--<option value="Engineering">Engineering</option>-->
          <!--<option value="Design">Developer</option>-->
        </select>
</div>
            </div>

        </div>
    </div>
    </section><!-- ======= carrer_opportunities Section ======= -->

                <!-- ======= carrer_options Section ======= -->
  <section id="carrer_options" class="carrer_options">

              <!-- ======= Engineering Start ======= -->
<div id="Engineering" class="Engineering">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
<div class="car_title" data-aos="fade-up" data-aos-delay="100">
    <h2>Jobs</h2>
</div>
                </div>

                <div class="col-sm-8">
                     <?php
  // Database connection parameters
    $servername = "localhost";
    $username = "millionjob";
    $password = "vikram@plutus@007";
    $dbname = "millionjob";

    // Create connection
    $link = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // SQL query to fetch data from your database table
    $sql = "SELECT * FROM millionsjob";

    // Execute SQL query
    $result = mysqli_query($link, $sql);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
?>
<div class="car_repet_nt">

    <div class="inner_car_repet" data-aos="fade-up" data-aos-delay="100">
        <div class="top_car_nt">
            <h2> <?php echo $row["jobname"]; ?> </h2>
            <span><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="3" cy="3" r="3" fill="#707070"/>
                </svg>
                 <?php echo $row["category"]; ?></span>
        </div>
        <div class="middle_car_nt">
<p> <?php echo $row["jobdescription"]; ?> </p>
        </div>
        <div class="bottom_car_nt">
<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_498_86)">
    <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25271C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7487 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#9D9D9D"/>
    </g>
    <defs>
    <clipPath id="clip0_498_86">
    <rect width="24" height="24" fill="white"/>
    </clipPath>
    </defs>
    </svg>Full-time</span>
    <a data-bs-toggle="modal" data-bs-target="#apply_job" data-job-category="<?php echo $row["category"]; ?>">APPLY NOW
    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9H15V7H0V9Z" fill="black"/>
    </svg>
</a>
        </div>
        
         


    </div>

</div>



 <?php
        }
    } else {
        echo "No job available";
    }

    // Close connection
    mysqli_close($link);
?>


                </div>
                </div>
                </div>
            </div>
                <!-- ======= Engineering End ======= -->
                
                <!-- model start -->
<div class="modal fade drop_coman_file have_title" id="apply_job" tabindex="-1" role="dialog" aria-labelledby="apply_job" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" style="font-weight:700">Apply Job</h5>
                                    <button class="close" style="border-radius:5px;" type="button" data-bs-dismiss="modal">
                                      <span aria-hidden="true">
                                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect width="4.27093" height="66.172" transform="matrix(0.702074 -0.712104 0.709324 0.704883 0 3.31244)" fill="black" />
                                          <rect width="4.27086" height="66.3713" transform="matrix(-0.704896 -0.70931 0.706518 -0.707695 3.10742 50)" fill="black" />
                                        </svg>
                                      </span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <h3>Apply Job</h3>


                                    <form action="https://milliondox.com/job-assign-panel/store_milliondox_form_data.php" method="POST" enctype="multipart/form-data" class="upload-form apply-form">                                       									 									                                                                          
                                    <div class="file-area">      
                                    <input type="file" class="dragfile" id="contractfile" name="file" accept=".pdf,.doc,.docx" >    
                          
  <div class="file-dummy">
    <div class="success">Great, your files are selected. Keep on.</div>
    <div class="default">
    <span class="upload_icon">
      
                          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99.09 122.88"><title>file-upload</title><path d="M64.64,13,86.77,36.21H64.64V13ZM42.58,71.67a3.25,3.25,0,0,1-4.92-4.25l9.42-10.91a3.26,3.26,0,0,1,4.59-.33,5.14,5.14,0,0,1,.4.41l9.3,10.28a3.24,3.24,0,0,1-4.81,4.35L52.8,67.07V82.52a3.26,3.26,0,1,1-6.52,0V67.38l-3.7,4.29ZM24.22,85.42a3.26,3.26,0,1,1,6.52,0v7.46H68.36V85.42a3.26,3.26,0,1,1,6.51,0V96.14a3.26,3.26,0,0,1-3.26,3.26H27.48a3.26,3.26,0,0,1-3.26-3.26V85.42ZM99.08,39.19c.15-.57-1.18-2.07-2.68-3.56L63.8,1.36A3.63,3.63,0,0,0,61,0H6.62A6.62,6.62,0,0,0,0,6.62V116.26a6.62,6.62,0,0,0,6.62,6.62H92.46a6.62,6.62,0,0,0,6.62-6.62V39.19Zm-7.4,4.42v71.87H7.4V7.37H57.25V39.9A3.71,3.71,0,0,0,61,43.61Z"/></svg>
                          </span>  
                          Upload a resume <span class="fille">Choose File</span>
  </div>
  </div>
  <br><div class="selected-file"></div>
</div> 
                          <span class="basic-file">Note:- file|mimes:pdf,doc,docx|max size:2048kb</span>    

<hr class="cusrom_hr"/>

                          <div class="gropu_form">
                          <label for="fname">First Name</label>
                           <input placeholder="First Name" type="text" value="" required id="first_name" name="first_name">
                          </div>
						  
						   <div class="gropu_form">
                          <label for="lname">Last Name</label>
                           <input placeholder="Last Name" type="text" value="" required id="last_name" name="last_name">
                          </div>
						  
						  <div class="gropu_form">
                          <label for="lname">Phone No:</label>
                          
                                            <div class="flag_cnty">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                    <form id="registration-form" class="formpaddsettingss logss" method="POST"  action="">
                        	
                          <input id="phoneNumbers" type="text" name="phone" placeholder="Phone no">
<script>
  const phoneInputFields = document.querySelector("#phoneNumbers");
  const phoneInputs = window.intlTelInput(phoneInputFields, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    initialCountry: "in" // Set initial country to India
  });
</script>
                  </div>
                          
                          </div>
						  
						  <div class="gropu_form">
                          <label for="lname">E-mail</label>
                          <input placeholder="E-mail" type="email" id="email" name="email">
                          </div>


                          <div class="gropu_form">
                          <label for="con_type">Job type</label>
            <select id="category" name="category" required="">
            <option value="" disabled="" selected="">select</option>
            <option value="Engineering">Engineering</option>
            <option value="Design">Design</option>
            <option value="Testing">Testing</option>
            <option value="Data Entry">Data Entry</option>
            <option value="Founders Office">Founders Office</option>            
            </select>
                          </div>
                        
  
  <div class="gropu_form test-areaa">
                          <label for="fname">Cover Letter</label>
                          <textarea name="cover_letter" required style="height: 58px;"></textarea>
                          </div>

</div>

                <div class="root_btn">                        
                          <button class="btn btn-primary"  style="border-radius:5px;" type="submit">Apply</button>
</div>
				
                                    </form>
                                  </div>
                                </div>
                              </div>
                            <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Get all the "APPLY NOW" buttons
        var applyButtons = document.querySelectorAll("a[data-bs-target='#apply_job']");
        
        // Loop through each button
        applyButtons.forEach(function(button) {
            // Add a click event listener to each button
            button.addEventListener("click", function() {
                // Get the job category from the button's data attribute
                var jobCategory = button.getAttribute("data-job-category");
                
                // Get the select element
                var categorySelect = document.getElementById("category");

                // Loop through each option in the select element
                for (var i = 0; i < categorySelect.options.length; i++) {
                    // If the option's value matches the selected job category
                    if (categorySelect.options[i].value === jobCategory) {
                        // Enable this option
                        categorySelect.options[i].disabled = false;
                    } else {
                        // Disable all other options
                        categorySelect.options[i].disabled = true;
                    }
                }
                
                // Set the value of the job category select element in the modal form
                categorySelect.value = jobCategory;
            });
        });
    });
</script>
<!-- model end -->

                              <!-- ======= Design Start ======= -->
<!--<div id="Design" class="Design">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-4">-->
<!--<div class="car_title" data-aos="fade-up" data-aos-delay="400">-->
<!--    <h2>Developer</h2>-->
<!--</div>-->
<!--                </div>-->

<!--                <div class="col-sm-8">-->
<!--<div class="car_repet_nt">-->

<!--    <div class="inner_car_repet" data-aos="fade-up" data-aos-delay="400">-->
<!--        <div class="top_car_nt">-->
<!--            <h2>Senior PHP Developer</h2>-->
<!--            <span><svg width="6" height="6" viewBox="0 0 6 6" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                <circle cx="3" cy="3" r="3" fill="#707070"/>-->
<!--                </svg>-->
<!--                Developer</span>-->
<!--        </div>-->
<!--        <div class="middle_car_nt">-->
<!--<p>Join our innovative team at Milliondox as a Senior PHP Developer and pave the way for cutting-edge solutions in web development. Take your career to new heights with exciting challenges and endless opportunities for growth.</p>-->
<!--        </div>-->
<!--        <div class="bottom_car_nt">-->
<!--<span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--    <g clip-path="url(#clip0_498_86)">-->
<!--    <path d="M12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2ZM12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4ZM12 6C12.2449 6.00003 12.4813 6.08996 12.6644 6.25271C12.8474 6.41547 12.9643 6.63975 12.993 6.883L13 7V11.586L15.707 14.293C15.8863 14.473 15.9905 14.7144 15.9982 14.9684C16.006 15.2223 15.9168 15.4697 15.7487 15.6603C15.5807 15.8508 15.3464 15.9703 15.0935 15.9944C14.8406 16.0185 14.588 15.9454 14.387 15.79L14.293 15.707L11.293 12.707C11.1376 12.5514 11.0378 12.349 11.009 12.131L11 12V7C11 6.73478 11.1054 6.48043 11.2929 6.29289C11.4804 6.10536 11.7348 6 12 6Z" fill="#9D9D9D"/>-->
<!--    </g>-->
<!--    <defs>-->
<!--    <clipPath id="clip0_498_86">-->
<!--    <rect width="24" height="24" fill="white"/>-->
<!--    </clipPath>-->
<!--    </defs>-->
<!--    </svg>Full-time</span>-->
<!--    <a href="#">APPLY NOW-->
<!--        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--            <path d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9H15V7H0V9Z" fill="black"/>-->
<!--            </svg>-->
<!--    </a>-->
<!--        </div>-->
<!--    </div>-->


<!--</div>-->
<!--                </div>-->
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->
                <!-- ======= Design End ======= -->

                </section>  <!-- ======= carrer_options Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="roww">

          <div class="footer-contact-wrap">
            <div class="footer-contact">
            <div class="footyer_logo"><img src="assets/img/footer-logo.webp" alt="img"></div>
            <p>
              Copyright © Datasolv Technologies Pvt. Ltd.
            </p>
            <div class="social-links mt-5">
              <a href="https://www.facebook.com/people/Milliondox/61558151050019/?mibextid=ZbWKwL" class="facebook"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3334 9.99984C18.3334 5.39984 14.6001 1.6665 10.0001 1.6665C5.40008 1.6665 1.66675 5.39984 1.66675 9.99984C1.66675 14.0332 4.53341 17.3915 8.33341 18.1665V12.4998H6.66675V9.99984H8.33341V7.9165C8.33341 6.30817 9.64175 4.99984 11.2501 4.99984H13.3334V7.49984H11.6667C11.2084 7.49984 10.8334 7.87484 10.8334 8.33317V9.99984H13.3334V12.4998H10.8334V18.2915C15.0417 17.8748 18.3334 14.3248 18.3334 9.99984Z" fill="#C5C5C5"/>
                </svg>
                </a>
              <a href="https://www.instagram.com/milliondoxofficial/?igsh=ZXFoNGg3am14M3Bs" class="instagram"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.50008 1.6665H13.5001C16.1667 1.6665 18.3334 3.83317 18.3334 6.49984V13.4998C18.3334 14.7817 17.8242 16.0111 16.9178 16.9175C16.0113 17.8239 14.782 18.3332 13.5001 18.3332H6.50008C3.83341 18.3332 1.66675 16.1665 1.66675 13.4998V6.49984C1.66675 5.21796 2.17597 3.98858 3.0824 3.08215C3.98882 2.17573 5.2182 1.6665 6.50008 1.6665ZM6.33341 3.33317C5.53777 3.33317 4.7747 3.64924 4.21209 4.21185C3.64949 4.77446 3.33341 5.53752 3.33341 6.33317V13.6665C3.33341 15.3248 4.67508 16.6665 6.33341 16.6665H13.6667C14.4624 16.6665 15.2255 16.3504 15.7881 15.7878C16.3507 15.2252 16.6667 14.4622 16.6667 13.6665V6.33317C16.6667 4.67484 15.3251 3.33317 13.6667 3.33317H6.33341ZM14.3751 4.58317C14.6513 4.58317 14.9163 4.69292 15.1117 4.88827C15.307 5.08362 15.4167 5.34857 15.4167 5.62484C15.4167 5.9011 15.307 6.16606 15.1117 6.36141C14.9163 6.55676 14.6513 6.6665 14.3751 6.6665C14.0988 6.6665 13.8339 6.55676 13.6385 6.36141C13.4432 6.16606 13.3334 5.9011 13.3334 5.62484C13.3334 5.34857 13.4432 5.08362 13.6385 4.88827C13.8339 4.69292 14.0988 4.58317 14.3751 4.58317ZM10.0001 5.83317C11.1052 5.83317 12.165 6.27216 12.9464 7.05356C13.7278 7.83496 14.1667 8.89477 14.1667 9.99984C14.1667 11.1049 13.7278 12.1647 12.9464 12.9461C12.165 13.7275 11.1052 14.1665 10.0001 14.1665C8.89501 14.1665 7.8352 13.7275 7.0538 12.9461C6.2724 12.1647 5.83341 11.1049 5.83341 9.99984C5.83341 8.89477 6.2724 7.83496 7.0538 7.05356C7.8352 6.27216 8.89501 5.83317 10.0001 5.83317ZM10.0001 7.49984C9.33704 7.49984 8.70115 7.76323 8.23231 8.23207C7.76347 8.70091 7.50008 9.3368 7.50008 9.99984C7.50008 10.6629 7.76347 11.2988 8.23231 11.7676C8.70115 12.2364 9.33704 12.4998 10.0001 12.4998C10.6631 12.4998 11.299 12.2364 11.7678 11.7676C12.2367 11.2988 12.5001 10.6629 12.5001 9.99984C12.5001 9.3368 12.2367 8.70091 11.7678 8.23207C11.299 7.76323 10.6631 7.49984 10.0001 7.49984Z" fill="#C5C5C5"/>
                </svg></a>
              <a href="https://in.linkedin.com/company/milliondox" class="linkedin"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_140_221)">
                <path d="M15.4062 0.398499H1.59375C1.28035 0.395309 0.978492 0.516575 0.7544 0.735687C0.530308 0.954799 0.402291 1.25386 0.398438 1.56725V15.4355C0.402987 15.7485 0.531311 16.0468 0.755327 16.2654C0.979343 16.4839 1.28081 16.6048 1.59375 16.6016H15.4062C15.7197 16.6041 16.0213 16.4824 16.2453 16.2632C16.4693 16.0439 16.5974 15.7449 16.6016 15.4315V1.56326C16.596 1.25079 16.4673 0.95316 16.2435 0.735053C16.0196 0.516947 15.7188 0.395999 15.4062 0.398499ZM5.20227 14.211H2.79703V6.47201H5.20227V14.211ZM4.00695 5.41748C3.73108 5.41775 3.46134 5.33618 3.23183 5.18311C3.00233 5.03004 2.82338 4.81233 2.71763 4.55754C2.61188 4.30274 2.58407 4.02231 2.63773 3.75171C2.69139 3.48111 2.8241 3.2325 3.01907 3.03734C3.21405 2.84218 3.46253 2.70923 3.73308 2.65531C4.00363 2.6014 4.28409 2.62894 4.53898 2.73445C4.79388 2.83996 5.01175 3.0187 5.16504 3.24805C5.31833 3.47741 5.40016 3.74708 5.40016 4.02295C5.39981 4.20631 5.36331 4.3878 5.29274 4.55703C5.22217 4.72626 5.11891 4.87992 4.98889 5.0092C4.85887 5.13848 4.70463 5.24085 4.53499 5.31046C4.36536 5.38006 4.18367 5.41553 4.00031 5.41483L4.00695 5.41748ZM14.2109 14.211H11.8057V10.4458C11.8057 9.54928 11.7898 8.39514 10.5559 8.39514C9.32211 8.39514 9.11227 9.37264 9.11227 10.3873V14.211H6.71102V6.47201H9.01664V7.53452H9.04852C9.36992 6.92623 10.1535 6.28475 11.3236 6.28475C13.7594 6.27944 14.2109 7.88248 14.2109 9.961V14.211Z" fill="#C5C5C5"/>
                </g>
                <defs>
                <clipPath id="clip0_140_221">
                <rect width="17" height="17" fill="white"/>
                </clipPath>
                </defs>
                </svg>
                </a>   
                <a href="https://www.threads.net/@milliondoxofficial" class="threat">
                  <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.31453 2.66004C3.53924 1.35458 5.31495 0.583496 7.51341 0.583496C11.1274 0.583496 13.5237 2.66637 14.2822 5.55279C14.3355 5.75593 14.3059 5.97193 14.2 6.15328C14.0941 6.33463 13.9204 6.46648 13.7173 6.51981C13.5142 6.57314 13.2982 6.54359 13.1168 6.43766C12.9355 6.33173 12.8036 6.15809 12.7503 5.95495C12.1747 3.76758 10.4101 2.16683 7.51261 2.16683C5.70286 2.16683 4.36178 2.79145 3.47036 3.74225C2.57103 4.70175 2.06991 6.05629 2.06991 7.60954V9.39079C2.06991 10.944 2.57103 12.2986 3.47036 13.2573C4.36178 14.2097 5.70286 14.8335 7.51261 14.8335C8.82282 14.8335 9.86228 14.5295 10.6603 14.0379C11.4638 13.5431 11.9428 12.8868 12.0774 12.1339C12.2317 11.2662 12.0417 10.6709 11.7148 10.241C11.5352 10.01 11.3172 9.8116 11.0704 9.65441C10.9635 10.2474 10.7727 10.8071 10.4845 11.2457C9.42211 12.8599 7.3907 12.9984 6.0512 12.464C5.32603 12.1751 4.70457 11.3842 4.51141 10.5363C4.3951 10.0503 4.43414 9.53999 4.62303 9.07729C4.83282 8.57379 5.22153 8.1447 5.77491 7.81854C6.32274 7.49475 7.13657 7.34591 7.94328 7.32375C8.42936 7.31029 8.95661 7.34275 9.48703 7.42904C9.3762 6.91445 9.18857 6.5305 8.9772 6.33337C8.59403 5.97712 7.95911 5.72616 7.32261 5.73012C6.70749 5.73487 6.18578 5.97158 5.87386 6.47033C5.76258 6.64838 5.58513 6.77493 5.38054 6.82214C5.17596 6.86935 4.961 6.83336 4.78295 6.72208C4.6049 6.6108 4.47835 6.43335 4.43114 6.22876C4.38392 6.02417 4.41992 5.80921 4.5312 5.63116C5.19382 4.57191 6.28553 4.1547 7.31232 4.14679C8.31774 4.13966 9.35324 4.52045 10.0562 5.17437C10.7672 5.8362 11.0727 6.92158 11.1519 7.90879C11.8438 8.21041 12.4977 8.65295 12.9767 9.28391C13.595 10.0993 13.861 11.1507 13.6362 12.4118C13.4066 13.6975 12.5951 14.706 11.4907 15.3861C10.4077 16.0527 9.07141 16.4168 7.51261 16.4168C5.31495 16.4168 3.53845 15.6457 2.31532 14.3403C1.09932 13.0435 0.486572 11.2813 0.486572 9.39079V7.60954C0.486572 5.71904 1.09932 3.95679 2.31532 2.66004H2.31453ZM9.55828 9.05433C9.04197 8.94259 8.51412 8.89316 7.98603 8.90708C7.28066 8.92608 6.78586 9.05987 6.57924 9.18179C6.27524 9.3615 6.14382 9.54437 6.08524 9.68608C6.02284 9.84499 6.01231 10.0196 6.05516 10.1848C6.15174 10.6092 6.47078 10.9274 6.63782 10.9931C7.52924 11.3494 8.6447 11.161 9.16166 10.3756C9.3477 10.0922 9.49574 9.61562 9.55749 9.05433H9.55828Z" fill="#C5C5C5"/>
                  </svg>                    
                </a>            
            </div>

          </div>
        </div>

          <div class="footer-links-wrap">
          <div class="footer-links">
            <h4>MillionDox</h4>
            <ul>
              <li><a href="about.html">About</a></li>
              <li><a href="https://milliondox.com/blogs/">Blogs</a></li>
              <li><a class="active" href="Careers.html">Careers</a></li>
              <li><a href="contact.html">Customer Support</a></li>              
            </ul>
          </div>

          <div class="footer-links">
            <h4>Policy</h4>
            <ul>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="Refund-Policy.html">Refund Policy</a></li>
              <li><a href="Terms-Conditions.html">Terms & Conditions</a></li>
              <li><a href="cookie.html">Cookie Policy</a></li>
            </ul>
          </div>
        </div>

        </div>
      </div>
    </div>

  </footer> 
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
        // Hide all divisions initially
        $(".Engineering, .Design").hide();
        
        // Event listener for select change
        $("#post_division").change(function(){
            var selectedOption = $(this).val();
            if(selectedOption === "All") {
                $(".Engineering, .Design").show();
            } else if(selectedOption === "Engineering") {
                $(".Engineering").show();
                $(".Design").hide();
            } else if(selectedOption === "Design") {
                $(".Engineering").hide();
                $(".Design").show();
            }
        });

        // Trigger the change event to show all divisions by default
        $("#post_division").trigger("change");
    });
</script>

<script>
        // Add event listener to input file elements with class 'dragfile'
    document.querySelectorAll('.dragfile').forEach(function(input) {
        input.addEventListener('change', function() {
            console.log('File input changed');
            var fileInput = input;
            var fileArea = input.closest('.modal-content');
            console.log('File Area:', fileArea);

            if (fileInput.files.length > 0) {
                console.log('File selected:', fileInput.files[0].name);
                var selectedFileDiv = fileArea.querySelector('.selected-file');
                console.log('Selected file div:', selectedFileDiv);
                selectedFileDiv.textContent = fileInput.files[0].name;
                fileArea.classList.add('green-outline');
                // Add style to modal content when file is chosen
                fileArea.style.outline = '2px dashed green';

                // Hide the span when file is chosen
                input.closest('.file-dummy').querySelector('.fille').style.display = 'none';
            } else {
                fileArea.classList.remove('green-outline');
                // Add style to modal content when file is not chosen
                fileArea.style.outline = '2px dashed #D2DBE5';

                // Show the span when file is not chosen
                input.closest('.file-dummy').querySelector('.fille').style.display = 'inline';
            }
        });
    });
</script>

</body>

</html>