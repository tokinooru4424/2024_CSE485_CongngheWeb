<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .course {
            width: 30%;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
        i{
            color: #971F1B;
        }

    </style>
</head>
<body>
<div class="container">
    <?php
    $courses = [
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => '<img style="width: 570px;height: 190px" src="lap-trinh-.net_.png.webp">',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
    ];
    foreach ($courses as $course) {
        echo '<div class="course">';
        echo  $course['img'] ;
        echo '<h2>' . $course['title'] . '</h2>';
        echo '<p>' . $course['description'] . '</p>';
        echo '<p><i class="fa-solid fa-gift"></i>  Học phí: ' . $course['fee'] . '</p>';
        echo '<p><i class="fa-solid fa-clock"></i> Khải giảng: ' . $course['start_date'] . '</p>';
        echo '<p><i class="fa-solid fa-bookmark"></i> Thời lượng: ' . $course['duration'] . '</p>';
        echo '</div>';
    }
    ?>
</div>


</body>
</html>