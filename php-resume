<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruit Directory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a href="homepage.php" class="back-btn">← Back to Home</a>

    <?php
    $fruits = [
        ["name" => "Banana", "desc" => "Color Yellow", "facts" => "Bananas are a healthful addition to a balanced diet, providing vital nutrients and fiber.", "img" => "https://upload.wikimedia.org/wikipedia/commons/8/8a/Banana-Single.jpg"],
        ["name" => "Apple", "desc" => "Color Red/Green", "facts" => "Apples are high in fiber and vitamin C. They are low in calories and have no cholesterol.", "img" => "https://upload.wikimedia.org/wikipedia/commons/1/15/Red_Apple.jpg"],
        ["name" => "Orange", "desc" => "Color Orange", "facts" => "Oranges are highly nutritious citrus fruits that contribute to strong, clear skin.", "img" => "https://upload.wikimedia.org/wikipedia/commons/c/c4/Orange-Fruit-Pieces.jpg"],
        ["name" => "Grapes", "desc" => "Color Purple", "facts" => "Grapes are a great source of potassium, helping to balance fluids in your body.", "img" => "https://upload.wikimedia.org/wikipedia/commons/b/bb/Table_grapes_on_white.jpg"],
        ["name" => "Blueberry", "desc" => "Color Blue", "facts" => "Blueberries are a superfood. They are low in calories and incredibly good for you.", "img" => "https://img.imageboss.me/fourwinds/width/425/dpr:2/shop/products/shutterstock_722035450blueberry2_70d2b1fb-ee3f-46fb-afde-5df11232bdbe.jpg?v=1729795889"],
        ["name" => "Mango", "desc" => "Color Yellow", "facts" => "Mangoes are rich in vitamins and antioxidants, associated with many health benefits.", "img" => "https://shopmetro.ph/wp-content/uploads/2026/01/SM13560-2-1.jpg"],
        ["name" => "Strawberry", "desc" => "Color Red", "facts" => "Strawberries are an excellent source of vitamin C, manganese, and folate.", "img" => "https://upload.wikimedia.org/wikipedia/commons/2/29/PerfectStrawberry.jpg"],
        ["name" => "Pineapple", "desc" => "Color Yellow", "facts" => "Pineapples are tropical fruits rich in enzymes that may help boost the immune system.", "img" => "https://upload.wikimedia.org/wikipedia/commons/c/cb/Pineapple_and_cross_section.jpg"],
        ["name" => "Watermelon", "desc" => "Color Green/Red", "facts" => "Watermelon is 90% water, making it perfect for staying hydrated in the summer.", "img" => "https://shopsuki.ph/cdn/shop/products/kcc-fruits-watermelon-approx-5kg-16241291690116_1024x.jpg?v=1703048712"],
        ["name" => "Kiwi", "desc" => "Color Brown/Green", "facts" => "Kiwis pack a lot of flavor and vitamin C. Their green flesh is sweet and tangy.", "img" => "https://cdn.britannica.com/45/126445-050-4C0FA9F6/Kiwi-fruit.jpg"]
    ];

    usort($fruits, function($a, $b) {
        return strcmp($a['name'], $b['name']);
    });

    $total = count($fruits);
    ?>

    <table>
        <thead>
            <tr>
                <th colspan="4" class="main-title">My Fruits</th>
            </tr>
            <tr class="sub-header">
                <th width="150">Image</th>
                <th width="120">Name</th>
                <th width="150">Description</th>
                <th>Facts</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < $total; $i++) { ?>
            <tr>
                <td>
                    <img src="<?php echo $fruits[$i]['img']; ?>" class="fruit-img">
                </td>
                <td class="fruit-name"><?php echo $fruits[$i]['name']; ?></td>
                <td><?php echo $fruits[$i]['desc']; ?></td>
                <td class="facts-cell"><?php echo $fruits[$i]['facts']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>