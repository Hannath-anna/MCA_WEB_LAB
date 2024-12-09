<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">List of Indian Cricket Players</h2>

    <?php
 
    $players = [
        "Virat Kohli",
        "Rohit Sharma",
        "MS Dhoni",
        "Sachin Tendulkar",
        "KL Rahul",
        "Hardik Pandya",
        "Jasprit Bumrah",
        "Ravindra Jadeja",
        "Shubman Gill",
        "Cheteshwar Pujara"
    ];

    
    echo "<table>";
    echo "<tr><th>Player Name</th></tr>"; 

    foreach ($players as $player) {
        echo "<tr><td>" . $player . "</td></tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
