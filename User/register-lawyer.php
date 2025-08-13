<?php
include("connection.php");

$selCat = "SELECT * FROM category";
$catq = mysqli_query($conn, $selCat);

$selcourt = "SELECT * FROM court";
$courtq = mysqli_query($conn, $selcourt);

$seldeg = "SELECT * FROM degree";
$degreeq = mysqli_query($conn, $seldeg);

session_start();
include("connection.php");


$sel = "SELECT * FROM category";
$q = mysqli_query($conn, $sel);
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>ADMIN - Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../admin/css/style.css" rel="stylesheet">
</head>
<style>
     .input-wrapper {
      position: relative;
    }

    .input-wrapper i {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: #9ca3af;
      font-size: 0.9rem;
      pointer-events: none;
    }

    input[type="date"] {
      width: 100%;
      padding: 10px 12px 10px 38px;
      font-size: 0.95rem;
      border: 1.6px solid #d1d5db;
      border-radius: 10px;
      background-color: #f9fafb;
      transition: all 0.3s ease;
      outline: none;
    }

    input[type="date"]:hover {
      background-color: #f3f4f6;
      border-color: #a5b4fc;
    }

    input[type="date"]:focus {
      border-color: #6366f1;
      background-color: #ffffff;
      box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }

    input[type="date"]::-webkit-calendar-picker-indicator {
      filter: invert(40%);
      cursor: pointer;
    }
</style>
  <head>
    <title>Legalcare - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>

  .consultation-btn {
    transition: background-color 0.3s ease, transform 0.2s ease;
  }
  .consultation-btn:hover {
    transform: scale(1.05);
  }
  .consultation-btn:active {
    transform: scale(0.97);
  }

</style>
<style>
  /* ---- Card back: force consistent layout and height ---- */
.block-2 {
  height: 420px; /* adjust to taste (desktop). Use media queries for smaller screens) */
  box-sizing: border-box;
}
/* ensure flipper/front/back fill the card */
.block-2 .flipper,
.block-2 .front,
.block-2 .back {
  height: 100%;
}

/* Make the back a vertical flex column so items stack */
.block-2 .back {
  display: flex !important;
  flex-direction: column;
  justify-content: flex-start; /* quote on top */
  align-items: center;
  padding: 22px;
  gap: 16px;
  box-sizing: border-box;
  text-align: center;
  position: relative !important; /* override absolute positioning if present */
}

/* Quote area should take remaining space so actions/author sit toward bottom */
.block-2 .back .quote {
  flex: 1 1 auto;
  display: flex;
  align-items: flex-start;   /* top of the quote block */
  justify-content: center;
  width: 100%;
  margin: 0;
}

/* Buttons area stays just under the quote */
.block-2 .back .actions {
  flex: 0 0 auto;
  display: flex;
  gap: 10px;
  justify-content: center;
  width: 100%;
}

/* Author block anchored at bottom of the back face */
.block-2 .back .author {
  flex: 0 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  width: 100%;
  padding-top: 6px;
}

/* Avatar styling */
.block-2 .back .author img {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  object-fit: cover;
  display: block;
}

/* Name and position */
.block-2 .back .name {
  text-align: left;
}
.block-2 .back .name strong { display: block; }
.block-2 .back .name .position { display: block; font-size: 13px; opacity: .85; }

/* Defensive overrides: remove previous absolute bottoms that break layout */
.block-2 .back .author,
.block-2 .back .actions,
.block-2 .back blockquote {
  position: static !important;
}

</style>
  </head>
  <body>
    
<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.php">Legalcare <span>A Law Firm Agency</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item <?= ($currentPage == 'index.php') ? 'active' : '' ?>">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'about.php') ? 'active' : '' ?>">
          <a href="about.php" class="nav-link">About</a>
        </li>
       <li class="nav-item dropdown <?= ($currentPage == 'attorneys.php') ? 'active' : '' ?>">
  <a class="nav-link dropdown-toggle" href="#" id="attorneysDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Attorneys
  </a>
 <div class="dropdown-menu m-0">
                            <?php while($fetch = mysqli_fetch_assoc($q)){ ?>
                            <a href="attorneys.php?id=<?php echo $fetch["category_id"] ?>" class="dropdown-item"> <?php echo $fetch["category_name"] ?></a>
                           <?php }?>
                        </div>
</li>

      
        <li class="nav-item <?= ($currentPage == 'practice-areas.php') ? 'active' : '' ?>">
          <a href="practice-areas.php" class="nav-link">Practice Areas</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'case.php') ? 'active' : '' ?>">
          <a href="case.php" class="nav-link">Case Studies</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'blog.php') ? 'active' : '' ?>">
          <a href="blog.php" class="nav-link">Blog</a>
        </li>
        <li class="nav-item <?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
          <a href="contact.php" class="nav-link">Contact</a>
        </li>
        <li class="nav-item cta">
          <a href="User/singing-signup.php" class="btn btn-primary nav-link text-white px-3 py-2 consultation-btn" data-toggle="modal" data-target="#signupModal" style="margin-top: 5px;">sign-in!</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">SIGN UP AS LAWYER</h6>

                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_Name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" name="father_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input class="form-control" type="file" name="profile_image">
                    </div>

                    <h6 class="mb-4">Enter Your Full Address</h6>

                    <div class="mb-3">
                        <label class="form-label">House/Building/Street</label>
                        <input type="text" name="House" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CNIC No</label>
                        <input type="number" name="CNIC" class="form-control" placeholder="xxxxx-xxxxxxx-x">
                    </div>

                    <label class="form-label">Date Of Birth</label>
                    <div class="input-wrapper">
                        <input type="date" name="dob" required class="form-control">
                    </div><br>

                    <label class="form-label">Select Your Gender *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label">Female</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="gender" value="Transgender">
                        <label class="form-check-label">Transgender</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" maxlength="11" pattern="\d{11}" required oninput="this.value = this.value.replace(/\D/g, '')">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Whatsapp Number</label>
                        <input type="text" name="Whatsapp" class="form-control" maxlength="11" pattern="\d{11}" required oninput="this.value = this.value.replace(/\D/g, '')">
                    </div>

                    <h6 class="mb-4">Qualifications</h6>
                    <label class="form-label">Select Degrees You Hold</label>
                    <select name="degree" class="form-select mb-3">
                        <option disabled selected>Select degree</option>
                        <?php while($fetdeg = mysqli_fetch_assoc($degreeq)){ ?>
                        <option value="<?php echo $fetdeg["degree_id"] ?>"><?php echo $fetdeg["degree_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">University/College</label>
                        <input type="text" name="University" class="form-control">
                    </div>

                    <label class="form-label">Your LLB Degree Completion Date</label>
                    <div class="input-wrapper">
                        <input type="date" name="doc" required class="form-control">
                    </div><br>

                    <div class="mb-3">
                        <label class="form-label">City of Legal Practice</label>
                        <input type="text" name="City" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enrolment Year</label>
                        <input type="text" name="Enrolment" class="form-control" maxlength="4" pattern="\d{4}" required oninput="this.value = this.value.replace(/\D/g, '').slice(0,4);">
                    </div>

                    <label class="form-label">Enrolment Type (Court)</label>
                    <select name="c_id" class="form-select mb-3">
                        <option disabled selected>Select court</option>
                        <?php while($fetcourt = mysqli_fetch_assoc($courtq)){ ?>
                        <option value="<?php echo $fetcourt["court_id"] ?>"><?php echo $fetcourt["court_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">Bar License Number</label>
                        <input type="text" name="License" class="form-control" maxlength="7" pattern="\d{7}" required oninput="this.value = this.value.replace(/\D/g, '').slice(0,7);">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Front Picture of Bar License</label>
                        <input class="form-control" type="file" name="licence_image">
                    </div>

                    <label class="form-label">Select Expertise (Category)</label>
                    <select name="e_id" class="form-select mb-3">
                        <option disabled selected>Select Category</option>
                        <?php while($fetCat = mysqli_fetch_assoc($catq)){ ?>
                        <option value="<?php echo $fetCat["category_id"] ?>"><?php echo $fetCat["category_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">Address of Your Office</label>
                        <input type="text" name="Address" class="form-control">
                    </div>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["submitBtn"])) {
    $fn = $_POST["full_Name"];
    $ftn = $_POST["father_name"];
    $un = $_POST["user_name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $house = $_POST["House"];
    $cn = $_POST["CNIC"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $Whatsapp = $_POST["Whatsapp"];
    $degree = $_POST["degree"];
    $University = $_POST["University"];
    $doc = $_POST["doc"];
    $City = $_POST["City"];
    $Enrolment = $_POST["Enrolment"];
    $cid = $_POST["c_id"];
    $license = $_POST["License"];
    $address = $_POST["Address"];
    $eid = $_POST["e_id"];

    // Profile image
    $pi = $_FILES["profile_image"];
    $pi_name = $pi["name"];
    $pi_tmp = $pi["tmp_name"];
    $pi_path = "../admin/image/" . $pi_name;
    move_uploaded_file($pi_tmp, $pi_path);

    // License image
    $li = $_FILES["licence_image"];
    $li_name = $li["name"];
    $li_tmp = $li["tmp_name"];
    $li_path = "../admin/image/" . $li_name;
    move_uploaded_file($li_tmp, $li_path);

    // Insert query
    $ins = "INSERT INTO lawyers (
        full_Name, father_name, user_name, email, `password`, profile_image,
        House_address, CNIC, dob, Gender, phone, Whatsapp, degree_id,
        University, Completion, City, Enrolment_Year, court_id, License,
        licence_image, category_id, Office
    ) VALUES (
        '$fn', '$ftn', '$un', '$email', '$pass', '$pi_name',
        '$house', '$cn', '$dob', '$gender', '$phone', '$Whatsapp', '$degree',
        '$University', '$doc', '$City', '$Enrolment', '$cid', '$license',
        '$li_name', '$eid', '$address'
    )";

    $done = mysqli_query($conn, $ins);

    if ($done) {
        echo "<script>
            alert('Record Inserted');
            window.location.href='index.php';
        </script>";
    } else {
        echo "<script>alert('Error inserting record');</script>";
    }
}

include("footer.php");
include("singing-signup.php");
?>
