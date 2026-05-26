<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'experience.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <p>• <b>Work Experience Page:</b> Gained 2 months of professional work experience as a Barista at 8/0 Coffee, providing quality customer service, preparing beverages efficiently, and maintaining a clean and organized work environment.</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>