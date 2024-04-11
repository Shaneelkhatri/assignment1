<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Status Page</title>
</head>
<body>
    <h1>Post Status Form</h1>
    <form>
        <label for="stcode">Status Code:</label><br>
        <input type="text" name="stcode" id="stcode" required
        pattern="[S][0-9]{4}" maxlength="5" value=""><br>
        <!-- Add other required form elements here -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>