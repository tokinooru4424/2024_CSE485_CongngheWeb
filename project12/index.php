<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar Example</title>
    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0000FF;
            padding: 10px 20px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
        }

        .navbar a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="navbar">
    <?php
    $navItems = [
        "GIỚI THIỆU" => "introduction",
        "TIN TỨC & THÔNG BÁO" => "news-announcements",
        "TUYỂN SINH" => "admissions",
        "ĐÀO TẠO" => "education",
        "NGHIÊN CỨU" => "research",
        "ĐỐI NGOẠI" => "international",
        "VĂN BẢN" => "documents",
        "SINH VIÊN" => "students",
        "LIÊN HỆ" => "contact"
    ];

    foreach ($navItems as $text => $link) {
        echo "<a href=\"#$link\">$text</a>";
    }
    ?>
</div>
</body>
</html>
