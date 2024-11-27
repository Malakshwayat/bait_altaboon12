<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/styles/requests.css">
    </head>
    <body>
    <?php require 'nav3.php'; 
            require 'connection.php'; 
            $alltotal = 0 ;
            $sql = "SELECT * FROM cart"; 
            $results = $conn->query($sql);
            $items = [];
            for ($i = 0; $i < $results->num_rows; $i++) {
                $row = $results->fetch_assoc();
                $items[] = $row;}
           
            $invoices = []; 
            for ($i = 0; $i < count($items); $i++) {
                $invoice = $items[$i]['invoice'];
                var_dump($invoice);
                if (!isset($invoices[$invoice])) {
                    $invoices[$invoice] = [];
                }
                $invoices[$invoice][] = $items[$i]; }
        ?>
        <div class="container">
        <div class="row"> 
        <?php foreach ($invoices as $invoiceNumber => $items): ?>    
        <div class="card col-12"> 
        <p class="card-text">فاتورة رقم: <?php echo ($invoiceNumber); ?></p>
     <!--<?php  var_dump($invoiceNumber);?>--> 
        <?php foreach ($items as $item): ?>
       <p  class="card-text"> اسم_المنتج:<br><?php echo ($item['productname']); ?></p>
        
        <p  class="card-text" >الكمية:<br> <?php echo ($item['quantity']); ?></p>
      
        <?php $alltotal += $item['total'] ; ?> 
        <?php endforeach; ?>
        <p class="card-text"> الحساب:<br> <?php echo $alltotal; ?></p>
        <?php $alltotal = 0 ; ?>
        
        </div>
        <form action="accept_request.php" method="POST" class="d-flex">
        <button type="submit" name="accept" value="<?php echo $invoiceNumber; ?>" class="btn btn-warning">قبول</button>
        <button type="submit" name="reject" value="<?php echo $invoiceNumber; ?>" class="btn btn-warning">رفض</button>
        </form>
        <?php endforeach; ?>
        </div>
    
        </body>
        </html>
