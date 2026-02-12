<?php
session_start();
if(!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    echo "<script>alert('Cart is empty!'); window.location.href='product.php';</script>";
    exit();
}



// User Details (If logged in)
$customer_name = isset($_SESSION['username']) ? $_SESSION['username'] : "Guest Customer";
$date = date("d-m-Y");
$invoice_id = rand(1000, 9999);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Invoice | Farming Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body { background: #eee; padding: 20px; }
        .invoice-box { 
            max-width: 800px; 
            margin: auto; 
            padding: 30px; 
            border: 1px solid #eee; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); 
            background: white; 
        }
        .invoice-title { font-size: 30px; font-weight: bold; color: #2e7d32; }
        .invoice-details { text-align: right; }
        .table-header { background: #2e7d32; color: white; }
        .total-row { font-size: 18px; font-weight: bold; background: #f9f9f9; }
        
        /* Print Button Style (Hidden when printing) */
        @media print {
            .no-print { display: none; }
        }
    </style>
</head>
<body>

    <div class="invoice-box">
        <div class="row mb-4">
            <div class="col-6">
                <div class="invoice-title">FARM<span style="color:#333">SHOP</span></div>
                <div>123 Agriculture Road</div>
                <div>Rajkot, Gujarat</div>
                <div>Email: support@farmshop.com</div>
            </div>
            <div class="col-6 invoice-details">
                <h4>INVOICE</h4>
                <div><strong>Bill No:</strong> #<?php echo $invoice_id; ?></div>
                <div><strong>Date:</strong> <?php echo $date; ?></div>
                <div><strong>Customer:</strong> <?php echo $customer_name; ?></div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="table-header">
                <tr>
                    <th>Item</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Qty</th>
                    <th class="text-right">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $grand_total = 0;
                foreach($_SESSION['cart'] as $item) {

                    $total_price = $item['price'] * $item['qty


