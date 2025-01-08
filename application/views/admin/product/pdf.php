<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDF</title>
        
        
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
        <h1 style="margin-bottom: 16px;font-weight: bold; font-size: 32px;">Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            
            <?php foreach($products as $p): ?>
                <tr>
                    <td><?= $p['name'] ?></td> 
                    <td><?= $p['price'] ?></td>
                    <td><?= $p['category_name'] ?></td>
                </tr>
           
            <?php endforeach; ?>
        </table>
    
    </body>
</html>
