<html>
<head>
<title>Enquiry Page</title>
<link rel="icon" href="LOGO.jpg">
<link rel="stylesheet" href="enquiry-content.css">

</head>
<body>
<div class="enquiry">
    <br><br>
    <form method="post" action="connect.php">
        <label>Enter your Name</label>
        <input style="margin: 0 0 0 225px;" type="text" name="name"  placeholder="Name" required><br>
        <label>Enter your E-mail id</label>
        <input style="margin: 0 0 0 180px;" type="email" name="email"  placeholder="E-Mail id" required><br>
        <label>Enter your Phone No (Optional)</label>
        <input type="number" name="phone"  placeholder="Phone No" ><br>
        <label>Enter Your Query Here :-</label><br>
        <textarea style="margin: -30 0 0 705px; font-size: 22px;" rows="7" cols="25" name="query"></textarea><br>

        <button>Submit</button>

        <h2>We Will Contact You on E-mail or Phone Within 24Hours of Enquiry</h2>



    </form>

</div>
</body>
</html>