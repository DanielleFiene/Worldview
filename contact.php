<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Danielle Fiene">
        <title>Worldview Investment Management</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link href="style-contact.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    </head>

    <body>
        <nav id="nav">
            <ul role="presentation">
                <li><a href="#what_we_do">What we do</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#documentation">Documentation</a></li>
                <li><a href="#contact">Contact us</a></li>
            </ul>
        </nav>
        <header>
            <div id="banner">
            </div>
        </header>
        <main><br>
            <h1>Contact Us</h1><br>
                <form action="process.php" method="POST">
                  <label for="fname">First Name:</label><br>
                  <input class="input" type="text" id="fname" name="fname" required><br>
                  <label for="lname">Last Name:</label><br>
                  <input class="input" type="text" id="lname" name="lname" required><br>
                  <label for="email">Email:</label><br>
                  <input class="input" type="email" id="email" name="email" required><br>
                  <label for="message">Message:</label><br>
                  <textarea class="input" id="message" name="message" required></textarea><br>
                  <input type="submit" value="Submit">
                </form>
        </main>
        <br><br><br><br><br><br><br><br><br><br>
        <footer>
            <nav id="nav">
                <ul role="presentation">
                    <li><a href="#disclosures">Disclosures</a></li>
                    <li><a href="#investor_relations">Investor Relations</a></li>
                    <li><a href="#corporate_governance">Corporate Governance</a></li>
                </ul>
            </nav>
        </footer>
        <script src="index.js"></script>
    </body>

</html>