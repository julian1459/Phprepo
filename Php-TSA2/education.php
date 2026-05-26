<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'education.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <p>• <b>Educational Attainment:</b> Currently pursuing a Bachelor of Science in Information Technology.</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>