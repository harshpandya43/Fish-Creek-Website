<html>
<head>
    <title>Ask Vet</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/fishcreek.css">
</head>
<body id="wrapper">
<header>
    <h1>Fish Creek Animal Hospital</h1>
</header>
<nav role="navigation" style="float:left; width:20%">

    <a href="index.php" class="nav-links">Home</a> <br>
    <a href="services.php" class="nav-links">Services</a><br/>
    <a href="askvet.php" class="nav-links">Ask the Vet</a><br/>
    <a href="subscribe.php" class="nav-links">Subscribe</a><br/>
    <a href="contact.php" class="nav-links">Contact</a><br/>
</nav>


<section style="float:right; width:80%">
    <h2 class="heading-color2">Contact Fish Creek</h2>

    <FORM METHOD="post" ACTION="http://localhost/pandya_assignment5/index.php/Welcome/insertcontact">
        <TABLE>
            <TR>
                <TD><label for="firstname">*Name: </label></TD>
                <TD>
                    <input type="text" name="firstname"> <span class="error"><?php //echo "$nameErr"; ?></span>
                </TD>
            </TR>
            <TR>
                <td><label for="email" style="width:150px;">*Email:</label></td>
                <TD><input type="text" name="email" ><span class="error"><?php //echo "$emailErr"; ?></span></TD>
            </TR>
            <TR>
                <td><label style="width:150px;">*Comments: </label></td>
                <TD><textarea row="2" cols="20" name ="comment" ></textarea><span class="error"><?php //echo "$commentErr"; ?></span><br></TD>
            </TR>
            <tr>
                <td></td>
                <td><input type="submit" value="Send Now" name="submit"></td>
            </tr>
        </TABLE>

    </FORM>
    <br/><br/>



    <footer>
        <em>Copyright&copy;2016 Fish Creek Animal Hospital<br>
            <a href="mailto:harsh@pandya.com">harsh@pandya.com</a></em>
    </footer>
</section>
</body>
</html>