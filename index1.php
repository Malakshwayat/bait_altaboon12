<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index4.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>متجر المنتجات</title>
</head>
<body>

<?php require 'navabar.php'; ?>
<div class="container">
    <div class="row">
        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/altaboon.jpg" alt="taboon" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">خبز الطابون</h3>
                    <h4 class="product-price">2JD</h4>
                    <input type="number" id="quantity3" value="1" min="1" class="water">
                    <label for="quantity3" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart('خبز الطابون', 2, document.getElementById('quantity3').value, 'success-message-3')">أضف إلى العربة</button><br>
                    <div id="success-message-3" class="success-message" style="display:none; color: #f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>
        
        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/meal.jfif" alt="meal" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">وجبة الغذاء</h3>
                    <h4 class="product-price">8JD</h4>
                    <input type="number" id="quantity2" value="1" min="1" class="water">
                    <label for="quantity2" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart('وجبة الغذاء', 8, document.getElementById('quantity2').value, 'success-message-2')">أضف إلى العربة</button><br>
                    <div id="success-message-2" class="success-message" style="display:none; color: #f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>

        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/fg.jpeg" alt="فطائر" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">كنافة</h3>
                    <h4 class="product-price">2JD</h4>
                    <input type="number" id="quantity4" value="1" min="1" class="water">
                    <label for="quantity4" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart(' كنافه', 2, document.getElementById('quantity4').value, 'success-message-4')">أضف إلى العربة</button><br>
                    <div id="success-message-4" class="success-message" style="display:none; color:#f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>
    </div>''

    <div class="row">
        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/lm.jpeg" alt="عصير" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">عصير ليمون ونعنع</h3>
                    <h4 class="product-price">1JD</h4>
                    <input type="number" id="quantity1" value="1" min="1" class="water">
                    <label for="quantity1" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart('عصير ليمون ونعنع', 1, document.getElementById('quantity1').value, 'success-message-1')">أضف إلى العربة</button><br>
                    <div id="success-message-1" class="success-message" style="display:none; color:#f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>

        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/coffee.jfif" alt="قهوه" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">قهوة ساده</h3>
                    <h4 class="product-price">1JD</h4>
                    <input type="number" id="quantity6" value="1" min="1" class="water">
                    <label for="quantity6" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart('قهوة ساده', 1, document.getElementById('quantity6').value, 'success-message-6')">أضف إلى العربة</button><br>
                    <div id="success-message-6" class="success-message" style="display:none; color:#f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>

        <div class="product-grid col-3">
            <div class="product-card">
                <img src="./assets/pix/TEAA.jpeg" alt="معجنات" class="product-image">
                <div class="product-info">
                    <h3 class="product-name">فطيرة زعتر</h3>
                    <h4 class="product-price">1JD</h4>
                    <input type="number" id="quantity9" value="1" min="1" class="water">
                    <label for="quantity9" class="quantity3">:الكمية</label>
                    <button class="add-to-cart" onclick="addToCart('فطيرة زعتر', 1, document.getElementById('quantity9').value, 'success-message-9')">أضف إلى العربة</button><br>
                    <div id="success-message-9" class="success-message" style="display:none; color:#f4f3e6;">✔ تم إضافة المنتج إلى العربة!</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./assets/pix/js/index2.js"></script>
<?php require 'footer.php'; ?>

</body>
</html>
