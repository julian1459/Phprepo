<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'personal_info.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <h3>Personal Information</h3>
    <p><b>Name:</b> Julian Villanueva Gaspar</p>
    <p><b>Age:</b> 20</p>
    <p><b>Address:</b> Parkwood Phase 1a Maybunga Pasig city</p>
    <p><b>Contact:</b> 0977-685-0867</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>