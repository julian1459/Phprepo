<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'affiliation.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <p>• <b>Affiliation Page:</b> Active Member of AITS.</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>