<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>
    <h1>Send Mail</h1>
    <form action="send.php" method="post">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="subject" id="subject" name="subject">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" name="send">Send Email</button>
    </form>
</body>
</html>