<?php 
include("connection.php"); // first, connect to DB
include("navbar.php");     // then, load navbar

$sel = "SELECT l.*, c.category_name 
        FROM lawyers l
        JOIN category c ON l.category_id = c.category_id
        LIMIT 8";
$q = mysqli_query($conn, $sel);

if (!$q) {
    die("Query failed: " . mysqli_error($conn));}
?>

    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
          	<h2 class="subheading">Welcome To Legalcare</h2>
          	<h1>Attorneys Fighting For Your 
						  <span
						     class="txt-rotate"
						     data-period="2000"
						     data-rotate='[ "Freedom.", "Rights.", "Case.", "Custody." ]'></span>
						</h1>
            <!-- <h1 class="mb-4">Attorneys Fighting For Your Freedom</h1> -->
            <p class="mb-4">We have help thousands of people to get relief from national wide fights wrongfull denials. Now they trusted legalcare attorneys</p>
            
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3 py-5">
	          <div class="heading-section ftco-animate">
	          	<span class="subheading">Services</span>
	            <h2 class="mb-4">Why Select Us?</h2>
	            <p>Trusted by clients nationwide, we offer expert legal solutions with professionalism, transparency, and care. Our experienced team is dedicated to protecting your rights and delivering results that matter.</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Free Consultation</a></p>
	          </div>
    			</div>
<div class="col-lg-9 services-wrap px-4 pt-5">
  <div class="row pt-md-3">
    <!-- Fight for Justice -->
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="services text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-lawyer"></span>
        </div>
        <div class="text">
          <h3>Fight for Justice</h3>
          <p>We stand by your side to ensure fairness and justice in every case, no matter how complex or challenging.</p>
        </div>
        <a href="practice-areas.php" class="btn-custom d-flex align-items-center justify-content-center">
          <span class="ion-ios-arrow-round-forward"></span>
        </a>
      </div>
    </div>

    <!-- Best Case Strategy -->
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="services text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-lawyer"></span>
        </div>
        <div class="text">
          <h3>Best Case Strategy</h3>
          <p>Our team crafts personalized legal strategies to give your case the best possible outcome from day one.</p>
        </div>
        <a href="case.php" class="btn-custom d-flex align-items-center justify-content-center">
          <span class="ion-ios-arrow-round-forward"></span>
        </a>
      </div>
    </div>

    <!-- Experienced Attorneys -->
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="services text-center">
        <div class="icon d-flex justify-content-center align-items-center">
          <span class="flaticon-lawyer"></span>
        </div>
        <div class="text">
          <h3>Experienced Attorneys</h3>
          <p>Our legal team consists of seasoned professionals with years of courtroom experience and proven results.</p>
        </div>
        <a href="attorneys.php" class="btn-custom d-flex align-items-center justify-content-center">
          <span class="ion-ios-arrow-round-forward"></span>
        </a>
      </div>
    </div>
  </div>
</div>

    		</div>
    	</div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
    					
    						<span class="icon-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start pt-3 pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to Legalcare</span>
		            <h2 class="mb-4">We Always Fight For Your Justice to Win</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									</div>
								</div>
		            <div class="years d-flex mt-4 mt-md-5">
		            	<h4>
			            	<span class="number mr-2" data-number="40">0</span>
				            <span>Years of Experienced</span>
			            </h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section ftco-animate">
          	<span class="subheading">Explore Case Studies</span>
            <h2 class="mb-4">1000+ Completed Cases Successfully</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
        		<div class="carousel-case owl-carousel ftco-owl">
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/case-1.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="#">Legal Seperation</a></h3>
		        				<span>Corporate</span>
		        			</div>
		        		</div>
              </div>
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/case-2.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="#">Legal Seperation</a></h3>
		        				<span>Corporate</span>
		        			</div>
		        		</div>
              </div>
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/case-3.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="#">Legal Seperation</a></h3>
		        				<span>Corporate</span>
		        			</div>
		        		</div>
              </div>
              <div class="item">
		        		<div class="case img d-flex align-items-center justify-content-center" style="background-image: url(images/case-4.jpg);">
		        			<div class="text text-center">
		        				<h3><a href="#">Legal Seperation</a></h3>
		        				<span>Corporate</span>
		        			</div>
		        		</div>
              </div>
            </div>
        	</div>
        	<div class="col-md-12 text-center mt-4">
        		<a href="case.html" class="btn btn-primary px-5">See All Successful Cases</a>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Our Attorney</span>
            <h2 class="mb-4">Our Legal Attorneys</h2>
          </div>
        </div>

    <div class="row g-4">
<?php while($fetch = mysqli_fetch_assoc($q)){ ?>
    <div class="col-lg-3 col-sm-6">
        <div class="block-2 ftco-animate">
            <div class="flipper">
                <div class="front" style="background-image: url('../Admin/Admin/image/<?php echo $fetch["profile_image"]; ?>');">
                    <div class="box">
                        <h2><?php echo $fetch["full_Name"]; ?></h2>
                        <a href="addcategory.php?id=<?php echo $fetch['category_id']; ?>">
                            <?php echo $fetch['category_name']; ?>
                        </a>
                    <h6 style='color:white'><?php echo $fetch["City"]; ?></h6>
					</div>
                </div>
                <div class="back">
  <!-- Quote / paragraph -->
  <div class="quote">
    <blockquote>
      <p>
        &ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.
        One day however a small line of blind text.&rdquo;
      </p>
    </blockquote>
  </div>

  <!-- Buttons -->
  <div class="actions">
    <button type="button" class="btn btn-success rounded-pill m-2" ><a href="details.php">take Appointment</a></button>
    <button type="button" class="btn btn-info rounded-pill m-2">view details</button>
  </div>

  <!-- Profile (image + name + category) -->
  <div class="author">
    <img src="../Admin/Admin/image/<?php echo $fetch['profile_image']; ?>" alt="avatar">
    <div class="name">
      <strong><?php echo $fetch["full_Name"]; ?></strong>
      <span class="position"><?php echo $fetch["category_name"]; ?></span>
    </div>
  </div>
</div>

              </div>
	            
            </div>

        	</div>
			   <?php } ?>
     
              

	      
        </div>
    	</div>
    </section>
		

		<section class="ftco-consultation ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_2.jpg);">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 py-5 pl-md-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="#" class="consultation">
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Your Name">
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Your Email">
	            </div>
	            <div class="form-group">
	              <input type="text" class="form-control" placeholder="Subject">
	            </div>
	            <div class="form-group">
	              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
	            </div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
          		<div class="text px-4 py-4">
          			<h3 class="heading mb-0"><a href="#">All you want to know about industrial laws</a></h3>
          		</div>
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
              	<div class="topper d-flex align-items-center">
              		<div class="one py-2 pl-3 pr-1 align-self-stretch">
              			<span class="day">18</span>
              		</div>
              		<div class="two pl-0 pr-3 py-2 align-self-stretch">
              			<span class="yr">2019</span>
              			<span class="mos">October</span>
              		</div>
              	</div>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
      <div class="container">
        <div class="row d-flex justify-content-end">
        	<div class="col-md-8 py-4 px-md-4 bg-primary">
        		<div class="row">
		          <div class="col-md-6 ftco-animate d-flex align-items-center">
		            <h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
		          </div>
		          <div class="col-md-6 d-flex align-items-center">
		            <form action="#" class="subscribe-form">
		              <div class="form-group d-flex">
		                <input type="text" class="form-control" placeholder="Enter email address">
		                <input type="submit" value="Subscribe" class="submit px-3">
		              </div>
		            </form>
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </section>

   <?php
include('footer.php');
?>