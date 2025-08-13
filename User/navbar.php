<?php
session_start();
include("connection.php");


$sel = "SELECT * FROM category";
$q = mysqli_query($conn, $sel);
?>

<!DOCTYPE html>
<html lang="en">
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

<nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
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
          <a href="#" class="btn btn-primary nav-link text-white px-3 py-2 consultation-btn" data-toggle="modal" data-target="#signupModal" style="margin-top: 5px;">Register Now!</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
include("singing-signup.php")
?>