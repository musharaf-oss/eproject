<?php
include('connection.php');
include('navbar.php');

$getId = $_GET["id"];

// Assuming your primary key is lawyer_id (not product_id)
$query = "SELECT lawyers.*, category.category_name, court.court_name, degree.degree_name 
          FROM lawyers
          INNER JOIN category ON lawyers.category_id = category.category_id
          INNER JOIN court ON lawyers.court_id = court.court_id
          INNER JOIN degree ON lawyers.degree_id = degree.degree_id
          WHERE lawyers.lawyers_id = '$getId'";

$q = mysqli_query($conn, $query);

if (!$q) {
    die("Query failed: " . mysqli_error($conn));
}

$fetch = mysqli_fetch_assoc($q);
?>


<style>
	
	body {
  padding-top: 80px; /* adjust based on navbar height */
}
.detail-page footer.ftco-footer {
  background-color: #222; /* example */
  margin-top: 50px;
}

</style>
<body class="detail-page">
	
     <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex">
    				<div>
    				 <img 
                    class="img-fluid align-self-stretch" 
                    src="../Admin/image/<?php echo $fetch['profile_image']; ?>" 
                    alt="Lawyer Image">
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
									    <a class="nav-link active py-2" data-toggle="tab" href="#home1">Open Details</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Contact</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" href="register.php">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content bg-light rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>
										<?php echo "Office : {$fetch['Office']}"; ?>
										</p>
										<P>
											<?php echo "Degree : {$fetch['degree_name']}"; ?>
										</P>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  <P>
											<?php echo "Email : {$fetch['email']}"; ?>
										</P>
										<P>
											<?php echo "Phone : {$fetch['phone']}"; ?>
										</P>
										<P>
											<?php echo "Whatsapp : {$fetch['Whatsapp']}"; ?>
										</P>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									  </div>
									</div>
								</div>
		            <div class="years d-flex mt-4 mt-md-5">
		            	<h4>
			            	Lawyer of <?php echo $fetch['court_name']; ?>
			            </h4>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
</body>
      <?php
include('footer.php');
?>

   	
   