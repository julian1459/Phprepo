<?php 
  $standalone = (basename($_SERVER['PHP_SELF']) == 'skills.php');
  
  if($standalone) { 
    require 'header.inc'; 
    echo '<a href="2.3F.php" class="back-btn">&larr; Back to Resume</a>';
    echo '<div class="standalone-container">'; 
  }
?>
    <p>• <b>Skills Page:</b> Proficiency in PHP Programming, HTML5, CSS3, PYTHON, JAVASCRIPT, JAVA, C++ and SQL.</p>
<?php if($standalone) { echo '</div>'; require 'footer.inc'; } ?>