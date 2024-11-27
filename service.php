<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/service.css">
    <title>قائمة أطعمة بيت الطابون</title>
</head>
<body>
<?php
require 'navabar.php';?>
<div class="container">
<h1 class="text">قائمة أطعمة بيت الطابون</h1>
<br>
<div class="row" id="list-con">
<div class="jh col-8">
    <div>
        <h2>الأطباق الرئيسية</h2>
        <ul>
            <li>مناسف دجاج/لحم</li>
            <li>لحم بعجين</li>
            <li>صينية كفتة</li>
            <li>طاجن دجاج بالخضار</li>
            <li>لحم/مشوي</li>
            <li>سمك مشوي مع الليمون</li>
            <li>ورق عنب محشي</li>
        </ul>
    </div>

    <div>
        <h2>المقبلات</h2>
        <ul>
            <li>حمص بالطحينة</li>
            <li>متبل باذنجان</li>
            <li>تبولة</li>
            <li>فلافل</li>
        
        </ul>
    </div>


    <div>
        <h2>المعجنات</h2>
        <ul>
            <li>بيتزا بالطابون</li>
            <li>سمبوسة</li>
            <li>فطائر سبانخ</li>
            <li>معجنات بالجبنة</li>
            <li>معجنات بالزعتر</li>
        </ul>
    </div>

    <div>
        <h2>الأطباق الجانبية</h2>
        <ul>
            <li>سلطة فتوش</li>
            <li>سلطة خضار</li>
        
        </ul>
    </div>

    <div>
        <h2>الحلويات</h2>
        <ul>
            <li>كنافة</li>
            <li>بقلاوة</li>
            <li>مهلبية</li>
            
        </ul>
    </div>

    <div>
        <h2>المشروبات</h2>
        <ul>
            <li>عصير ليمون بالنعناع</li>
            <li>شاي بالنعناع</li>
            <li>قهوة عربية</li>
            <li>عصير تفاح</li>
           
        </ul>
    </div>

    <div>
        <h2>المأكولات البحرية</h2>
        <ul>
            <li>سمك مشوي</li>
            <li>سمك بالفرن</li>
        </ul>
    </div>

    <div>
        <h2>الأطباق النباتية</h2>
        <ul>
            <li>مجدرة</li>
            <li>فاصوليا خضراء</li>
            <li>خضار مشوية</li>
        </ul>
    </div>
</div>
<div class="pic col-4">
<img src="./assets/pix/pic1.jfif"alt="taboon "class="pi">
<img src="./assets/pix/place3.jfif "alt="taboon "class="pi">     
<img src="./assets/pix/baitaltaboon.jpeg "alt="taboon "class="pi">
</div>
</div>
</div>
<?php require 'footer.php';?>

</body>
</html>
