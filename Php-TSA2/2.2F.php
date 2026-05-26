<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes - User Defined Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <a href="homepage.php" class="back-btn">← Back to Home</a>
        
        <?php

        function volumeCube($s) {
            return pow($s, 3);
        }

        function volumeRectPrism($l, $w, $h) {
            return $l * $w * $h;
        }

        function volumeCylinder($r, $h) {
            return pi() * pow($r, 2) * $h;
        }

        function volumeCone($r, $h) {
            return (1/3) * pi() * pow($r, 2) * $h;
        }

        function volumeSphere($r) {
            return (4/3) * pi() * pow($r, 3);
        }

        $s = 5; $l = 10; $w = 2; $h = 5; $r = 3;
        ?>

        <table class="volume-table">
            <thead>
                <tr>
                    <th colspan="3" class="center">Volume of Shapes</th>
                </tr>
                <tr>
                    <th>Values</th>
                    <th>Formula</th>
                    <th>Answer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>s = <?php echo $s; ?></td>
                    <td>V = s<sup>3</sup></td>
                    <td><?php echo volumeCube($s); ?></td>
                </tr>
                <tr>
                    <td>l=<?php echo $l; ?>, w=<?php echo $w; ?>, h=<?php echo $h; ?></td>
                    <td>V = l × w × h</td>
                    <td><?php echo volumeRectPrism($l, $w, $h); ?></td>
                </tr>
                <tr>
                    <td>r = <?php echo $r; ?>, h = <?php echo $h; ?></td>
                    <td>V = πr<sup>2</sup>h</td>
                    <td><?php echo number_format(volumeCylinder($r, $h), 2); ?></td>
                </tr>
                <tr>
                    <td>r = <?php echo $r; ?>, h = <?php echo $h; ?></td>
                    <td>V = 1/3πr<sup>2</sup>h</td>
                    <td><?php echo number_format(volumeCone($r, $h), 2); ?></td>
                </tr>
                <tr>
                    <td>r = <?php echo $r; ?></td>
                    <td>V = 4/3πr<sup>3</sup></td>
                    <td><?php echo number_format(volumeSphere($r), 2); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>