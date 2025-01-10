<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transactions</title>
        
        
        <style>
            table{
                width: 100%;
            }
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td{
                padding: 8px;
            }
        </style>
    </head>
    <body>
        <h1 style="margin-bottom: 16px;font-weight: bold; font-size: 32px;">Transactions</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Created at</th>
                    <th>Courier</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            
            <?php foreach($trxs as $t): ?>
                <tr>
                    <td><?= $t['id'] ?></td> 
                    <td><?= $t['created_at'] ?></td>
                    <td><?= $t['courier'] ?></td>
                    <td><?= $t['payment'] ?></td>
                    <td><?= $t['status'] ?></td>
                    <td>Rp. <?= number_format($t['total_price'], 0, ',', '.')  ?></td>
                </tr>
           
            <?php endforeach; ?>
        </table>
    
    </body>
</html>
