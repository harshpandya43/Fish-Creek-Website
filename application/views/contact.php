<?php $nameErr="";?>
<section style="float:right; width:80%">
    <h2 class="heading-color2">Contact Fish Creek</h2>

    <FORM METHOD="post" ACTION="http://localhost/pandya_assignment5/index.php/Welcome/insertcontact">
        <?php $this->load->library('form_validation');?>

        <?php echo form_open('form');?>
        <TABLE>
            <TR>
                <TD><label for="firstname">*Name: </label></TD>
                <TD>
                    <input type="text" name="firstname"> <span class="error"><?php echo form_error('firstname');?></span>
                </TD>
            </TR>
            <TR>
                <td><label for="email" style="width:150px;">*Email:</label></td>
                <TD><input type="text" name="email" ><span class="error"><?php echo form_error('email')?></span></TD>
            </TR>
            <TR>
                <td><label style="width:150px;">*Comments: </label></td>
                <TD><textarea row="2" cols="20" name ="comment" ></textarea><span class="error"><?php echo form_error('comment');?></span><br></TD>
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