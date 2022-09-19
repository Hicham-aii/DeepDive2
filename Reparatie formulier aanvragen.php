<!doctype html>
<html>
    <head>
        <title>Freezers</title>
        <link rel="stylesheet" href="style.css">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="lijst.php">Koelkasten</a></li>
        <li><a href="about.php">Over Bob Vance</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="reparatie formulier aanvragen.php">Aanvraag reparatie formulier</a></li>
        </ul>
    </head>
    <body>
    <div class="header">
            <h1>Contact</h1>
    </div>

            <div class="container">
                <form action="action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="country">Country</label>
                    <select id="country" name="country">
                    <option value="The Netherlands">Nederland</option>
                    <option value="Belgie">Belgie</option>
                    <option value="Germany">Duitsland</option>
                    <option value="France">Frankrijk</option>
                    </select>

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>
    </body>
</html>
