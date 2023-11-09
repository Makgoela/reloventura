<!DOCTYPE html>
<html>
<head>
    <title>Booking and Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h1 {
            background-color: #0e7f39;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .booking-box {
            border: 2px solid #0e7f39;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .cart-box {
            border: 2px solid #e74c3c;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            overflow: hidden;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .left-box {
            flex: 1;
            padding: 20px;
        }

        .right-box {
            flex: 1;
            padding: 20px;
        }

        .left-box {
            margin-right: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="number"] {
            width: 60px;
        }

        input[type="date"] {
            width: 180px;
        }

        input[type="submit"] {
            background-color: #0e7f39;
            color: #fff;
            border: none;
            padding: 10px;
            text-align: center;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Booking and Cart</h1>
    <div class="container">
        <?php
        $bookings = array(
            array("$act_name", 10.00, 0, 0)
            //array("Activity 2", 15.00, 0, 0)
            // Add more activities as needed
        );

        $total = 0;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($bookings as $key => $booking) {
                $quantity = isset($_POST["booking{$key}_quantity"]) ? (int)$_POST["booking{$key}_quantity"] : 0;
                $date = isset($_POST["booking{$key}_date"]) ? htmlspecialchars($_POST["booking{$key}_date"]) : '';
                $subtotal = $quantity * $booking[1];
                $bookings[$key][2] = $quantity;
                $bookings[$key][3] = $subtotal;
                $total += $subtotal;
            }
        }
        ?>

        <div class="booking-box">
            <div class="left-box">
                <h2>Bookings</h2>
                <form method="post" action="">
                    <table>
                        <tr>
                            <th>Activity</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Number of Peoples</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php foreach ($bookings as $key => $booking): ?>
                            <tr>
                                <td><?php echo $booking[0]; ?></td>
                                <td>R<?php echo number_format($booking[1], 2); ?></td>
                                <td><input type="date" name="booking<?php echo $key; ?>_date" value="<?php echo isset($booking[2]) ? $booking[2] : ''; ?>"></td>
                                <td><input type="number" name="booking<?php echo $key; ?>_quantity" value="<?php echo isset($booking[3]) ? $booking[3] : 0; ?>" min="0"></td>
                                <td>R<?php echo number_format($booking[3], 2); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <input type="submit" name="update_cart" value="Update Cart">
                </form>
            </div>
        </div>

        <div class="cart-box">
            <div class="right-box">
                <h2>Cart Summary</h2>
                <form method="post" action="">
                    <table>
                        <tr>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Number of Peoples</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php foreach ($bookings as $key => $booking): ?>
                            <?php if ($booking[2] > 0): ?>
                                <tr>
                                    <td><?php echo $booking[0]; ?></td>
                                    <td><?php echo htmlspecialchars($_POST["booking{$key}_date"]); ?></td>
                                    <td><?php echo $booking[2]; ?></td>
                                    <td>R<?php echo number_format($booking[3], 2); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <tr>
                            <th>Total Amount</th>
                            <th></th>
                            <th></th>
                            <th>R<?php echo number_format($total, 2); ?></th>
                        </tr>
                    </table>
                    <input type="submit" name="checkout" value="Checkout">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
