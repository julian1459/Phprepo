<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'objective.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <p>• <b>Career Objective:</b> To seek a position that will allow me to utilize my skills in web development and applications technology.</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>