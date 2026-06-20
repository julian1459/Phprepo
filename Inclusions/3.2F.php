<?php require('header.php'); ?>

<div class="sekiro-header" style="position: relative;">
    <a href="homepage1.php" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #ffffff; text-decoration: none; font-size: 14px; font-family: Arial, sans-serif; letter-spacing: 1px; font-weight: normal; z-index: 999;">← BACK TO HUB</a>
    STRING FUNCTIONS
</div>

<div class="container" style="max-width: 1200px; margin: 40px auto; padding: 0 20px;">
    
    <table style="width: 100%; border-collapse: collapse; background: #1a1e23; color: #e0e0e0; border: 1px solid #444;">
        <thead>
            <tr>
                <th colspan="6" style="background: #222; color: #decb9a; padding: 20px; text-align: center; font-size: 1.5rem; letter-spacing: 2px;">
                    List of names
                </th>
            </tr>
            <tr style="background: #decb9a; color: #000;">
                <th style="padding: 15px; border: 1px solid #444;">Name</th>
                <th style="padding: 15px; border: 1px solid #444;">Number of characters</th>
                <th style="padding: 15px; border: 1px solid #444;">Uppercase first character</th>
                <th style="padding: 15px; border: 1px solid #444;">Replace vowels with @</th>
                <th style="padding: 15px; border: 1px solid #444;">Check position of character "a"</th>
                <th style="padding: 15px; border: 1px solid #444;">Reverse name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $names = [
                "chrisa", "kuro", "sekiro", "emma", "isshin", 
                "genichiro", "owl", "sculptor", "hanbei", "kotaro", 
                "anayama", "jinzaemon", "orin", "butterfly", "gyoubu", 
                "monkey", "demon", "guardian", "headless", "shichimen"
            ];

            foreach ($names as $name) {
                $numChars = strlen($name);
                $upperFirst = ucfirst($name);

                $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
                $replacedVowels = str_replace($vowels, '@', $name);

                $posA = strpos($name, 'a');
                if ($posA === false) {
                    $displayPos = "None";
                } else {
                    $displayPos = $posA;
                }

                
                $reversed = strrev($name);
            ?>
                <tr style="border-bottom: 1px solid #333;">
                    <td style="padding: 12px; border: 1px solid #444; text-align: center; color: #58d6ff; font-weight: bold;"><?php echo $name; ?></td>
                    <td style="padding: 12px; border: 1px solid #444; text-align: center;"><?php echo $numChars; ?></td>
                    <td style="padding: 12px; border: 1px solid #444; text-align: center;"><?php echo $upperFirst; ?></td>
                    <td style="padding: 12px; border: 1px solid #444; text-align: center;"><?php echo $replacedVowels; ?></td>
                    <td style="padding: 12px; border: 1px solid #444; text-align: center;"><?php echo $displayPos; ?></td>
                    <td style="padding: 12px; border: 1px solid #444; text-align: center;"><?php echo $reversed; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>