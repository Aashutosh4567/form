<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg.jpg" alt="वसुदेव">

    <div class="main">
        <h2>Event Registration Form</h2>
        <p>Enter your details and submit this form to confirm your registration.</p>
        
        <form action="form.php" method="post">
            <div class="field">
                <div class="left-div">
                    <label for="fullName">Full Name</label>
                </div>
                <div>
                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                </div>
            </div>

            <div class="field">
                <div class="left-div">
                    <label for="email">Email</label>
                </div>
                <div>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>

            <div class="field">
                <div class="left-div">
                    <label for="address">Address</label>
                </div>
                <div>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </div>

            <div class="field">
                <div class="left-div">
                    <label for="phone">Phone Number</label>
                </div>
                <div>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
            </div>

            <div class="field">
                <div class="left-div">
                    <label for="eventSelection">Event Selection</label>
                </div>
                <div>
                    <select class="form-control" id="eventSelection" name="eventSelection" required> <option value="">Select an event</option>
                    <option value="Event 1">Event 1</option>
                    <option value="Event 2">Event 2</option>
                    <option value="Event 3">Event 3</option></select>
                </div>
            </div>

            <div class="field">
                <div class="left-div" >
                    <label for="comments">Additional Comments</label>
                </div>
                <div>
                    <textarea class="form-control" id="comments" name="comments" rows="3"></textarea>
                </div>
            </div>

            <div class="field">
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
