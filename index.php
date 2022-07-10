<?php
$a1 = 0;
$b1 = 0;
$a2 = 0;
$b2 = 1;
$a3 = 1;
$b3 = 0;
$a4 = 1;
$b4 = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css" type="text/css"/>
<body>
    <table>
        <thead>
            <tr>
                <th>
                    <strong>A</strong>
                </th>
                <th>
                    <strong>B</strong>
                </th>
                <th>
                    <strong>!A</strong>
                </th>
                <th>
                    <strong>A || B</strong>
                </th>
                <th>
                    <strong>A && B</strong>
                </th>
                <th>
                    <strong>A xor B</strong>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $a1; ?></td>
                <td><?php echo $b1; ?></td>
                <td><?php echo !$a1; ?></td>
                <td><?php echo "$a1 || $b1" ?></td>
                <td><?php echo "$a1 && $b1" ?></td>
                <td><?php echo "$a1 xor $b1" ?></td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <div class="wrapper">
        <table style="table-layout: fixed; width: 900px; margin: auto;">
            <thead>
            <tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
            </thead>
            <tbody>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>true</strong></td>
                <td><?php echo true == true?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>false</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>1</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>0</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>-1</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="background-color: #f5f5f5;"><strong>null</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
                <td style="font-size: 16px; white-space: nowrap;"></td>
            </tr>
            </tbody>
        </table>
    </div>


    <table style="table-layout: fixed; width: 900px; margin: auto;">
        <thead>
        <tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
        </thead>
        <tbody>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>true</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>false</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>1</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>0</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>-1</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="background-color: #f5f5f5;"><strong>null</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
            <td style="font-size: 16px; white-space: nowrap;"></td>
        </tr>
        </tbody>
    </table>

</body>
</html>