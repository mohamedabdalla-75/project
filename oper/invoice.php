<?php
include_once(__DIR__ . '/../Codes.php');
$co = new Codes();

// Hubi bar_no
if(!isset($_GET['bar_no'])){
    die("No bar_no provided");
}
$bar_no = $_GET['bar_no'];

// 1. Ka soo qaad xogta borrow + person + book
$sql = "SELECT b.bar_no, b.fine, b.promise_date, b.status, 
               p.name AS person_name, bk.book_name
        FROM barrow_book b
        JOIN people p ON b.p_no = p.p_no
        JOIN books bk ON b.book_no = bk.book_no
        WHERE b.bar_no = '$bar_no'";

$data = $co->getRow($sql);

if(!$data){
    die("No record found for bar_no = $bar_no");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Invoice #<?php echo $data['bar_no']; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .invoice-box { border:1px solid #eee; padding:20px; }
        h2 { text-align:center; }
        table { width:100%; border-collapse: collapse; }
        td, th { padding:8px; border:1px solid #ddd; }
        .total { font-weight:bold; }
    </style>
</head>
<body>
<div class="invoice-box">
    <h2>Library Fine Invoice</h2>
    <p><strong>Borrow No:</strong> <?php echo $data['bar_no']; ?></p>
    <p><strong>Name:</strong> <?php echo $data['person_name']; ?></p>
    <p><strong>Book:</strong> <?php echo $data['book_name']; ?></p>
    <p><strong>Status:</strong> <?php echo ucfirst($data['status']); ?></p>
    <p><strong>Promise Date:</strong> <?php echo $data['promise_date']; ?></p>

    <?php if($data['fine'] > 0): ?>
    <table>
        <tr>
            <th>Description</th>
            <th>Amount (USD)</th>
        </tr>
        <tr>
            <td>Late return fine</td>
            <td>$<?php echo number_format($data['fine'],2); ?></td>
        </tr>
        <tr>
            <td class="total">Total</td>
            <td class="total">$<?php echo number_format($data['fine'],2); ?></td>
        </tr>
    </table>
    <?php else: ?>
        <p>No fine. Return was on time.</p>
    <?php endif; ?>
</div>
</body>
</html>
