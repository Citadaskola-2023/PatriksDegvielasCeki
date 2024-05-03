<!DOCTYPE html>
<html>
<head>
    <title>Fuel Refill Form</title>
</head>
<body>
<h2>Fuel Refill Form</h2>
<form action="process_form.php" method="post">
    <label for="license_plate">License Plate:</label>
    <input type="text" id="license_plate" name="license_plate" required><br><br>

    <label for="date_time">Date and Time:</label>
    <input type="datetime-local" id="date_time" name="date_time" required><br><br>

    <label for="petrol_station">Petrol Station:</label>
    <input type="text" id="petrol_station" name="petrol_station" required><br><br>

    <label for="refuel_liters">Refuel in Liters:</label>
    <input type="number" id="refuel_liters" name="refuel_liters" required><br><br>

    <label for="currency">Currency:</label>
    <select id="currency" name="currency" required>
        <option value="">Select Currency</option>
        <option value="USD">US Dollar (USD)</option>
        <option value="EUR">Euro (EUR)</option>
        <option value="GBP">British Pound (GBP)</option>
        <option value="CAD">Canadian Dollar (CAD)</option>
        <option value="AUD">Australian Dollar (AUD)</option>
        <option value="CHF">Swiss Franc (CHF)</option>
        <option value="SEK">Swedish Krona (SEK)</option>
        <option value="NOK">Norwegian Krone (NOK)</option>
        <option value="DKK">Danish Krone (DKK)</option>
        <option value="JPY">Japanese Yen (JPY)</option>
        <option value="CNY">Chinese Yuan (CNY)</option>
        <option value="HKD">Hong Kong Dollar (HKD)</option>
        <option value="SGD">Singapore Dollar (SGD)</option>
        <option value="NZD">New Zealand Dollar (NZD)</option>
        <option value="THB">Thai Baht (THB)</option>
        <option value="INR">Indian Rupee (INR)</option>
        <option value="KRW">South Korean Won (KRW)</option>
        <option value="MXN">Mexican Peso (MXN)</option>
        <option value="BRL">Brazilian Real (BRL)</option>
        <option value="RUB">Russian Ruble (RUB)</option>
    </select><br><br>

    <label for="fuel_price">Fuel Price:</label>
    <input type="number" id="fuel_price" name="fuel_price" step="0.01" required><br><br>

    <label for="odometer">Odometer:</label>
    <input type="text" id="odometer" name="odometer" required><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>
