<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/styles/navbar.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
       <a href="" ><img src='./assets/pix/logo.jfif' alt="logo" class="logo"></a>
        <a class="navbar-brand" href="#">بيت الطابون الربفي</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
       
        <li class="nav-item">
        <a class="nav-link" href="http://localhost/onlinestore/requests.php">الطلبات</a>
        </li>
        <li class="nav-item">
      
        </div>
       
       </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const navItems = document.querySelectorAll('.nav-item');
    
    // Mark the current page as active
    const currentUrl = window.location.href;
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        if (link.href === currentUrl) {
            item.classList.add('active');
        }
    });

    // Toggle active class when a nav item is clicked
    navItems.forEach(item => {
        item.addEventListener('click', function () {
            navItems.forEach(navItem => navItem.classList.remove('active'));
          
        });
    });
});
</script>
<script src="./assets/pix/js/index.js"></script>


</body>

</html>