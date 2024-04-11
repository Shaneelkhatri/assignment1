<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Status Page</title>
</head>
<body>
    <h1>Status Post System</h1>
    <form>
        <label for="stcode">Status Code:</label><br>
        <input type="text" name="stcode" id="stcode" required
        required pattern="[S][0-9]{4}" maxlength="5" value=""><br>
        <!-- Add other required form elements here -->
        <br>
        <label for="status">Status:<label><br>
        <input type="text" name = "st"
        required pattern ="[a-zA-Z0-9,!?. ]*[a-zA-Z0-9!?.]+[a-zA-Z0-9,!?. ]* "value="<?php echo isset($_POST['st']) ? htmlspecialchars($_POST['st']) : ''; ?>"><br>
        <br>
        <label for="share">Share:</label>
        <input type="radio" id="share1" name="share" value="University" required>
        <label for="share1">University</label>
        <input type="radio" id="share2" name="share" value="Class">
        <label for="share2">Class</label>
        <input type="radio" id="share3" name="share" value="Private">
        <label for="share3">Private</label>

        <label for ="date">Date:</label>
        <input type ="date" name ="date" required value ="<?php echo date('d-m-y'); ?>"><br>

    </form>
</body>
</html>