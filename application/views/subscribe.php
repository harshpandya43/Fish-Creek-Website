
<section style="float:right; width:80%">
    <h2 class="heading-color2">Subscribe Fish Creek</h2>
    <p>Required fields are marked with asterisk(*).</p>

    <FORM METHOD="post" ACTION="http://localhost/pandya_assignment5/index.php/Welcome/insertclient">
        <?php $this->load->library('form_validation');?>

        <?php echo form_open('form');?>
        <TABLE>
            <TR>
                <TD><label style="width:150px;">*Client Full Name: </label></TD>
                <TD> <input type="text" name="clientname"><span class="error"><?php echo form_error('clientname');?></span></TD>
            </TR>
            <TR>
                <td><label>*Address: </label></td>
                <TD><input type="text" name="address"><span class="error"><?php echo form_error('address');?></span></TD>
            </TR>
            <TR>
                <td><label>*Email: </label></td>
                <td><input type="email" name="clientemail"></input><span class="error"><?php echo form_error('clientemail');?></span></TD>
            </TR>

            <TR>
                <td><label>*Phone: </label></td>
                <td><input type="text" name="phone"><span class="error"><?php echo form_error('phone');?></span></input></TD>
            </TR>

            <TR>
                <td><label>*Password: </label></td>
                <td><input type="password" name="password"></input><span class="error"><?php echo form_error('password');?></span></TD>
            </TR>

            <tr>
                <td><label>*Type of Service: </label></td>
                <?php /*
                $service_query = "SELECT *";
                $service_query .= " FROM service";
                $service_result = mysqli_query($connection,$service_query);
                confirm_query($service_result);
*/
                ?>


                <td><select name="services">


                        <?php foreach ($servicename->result() as $row) { ?>


                            <option value="<?php echo $row->serviceid; ?>"><?php echo $row->servicename; ?></option>
                            <?php

                        } ?>

                    </select></td>
            </tr>


            <tr>
                <td><label>*Pet: </label></td>
                <?php /*
                $pet_query = "SELECT *";
                $pet_query .= " FROM pet";
                $pet_result = mysqli_query($connection,$pet_query);
                confirm_query($pet_result);
*/
                ?>

                <td><select name="pet">

                        <?php foreach ($petname->result() as $pets) { ?>
                            <option value="<?php echo $pets->petid;?>"><?php echo $pets->petname;?></option>


                            <?php
                            } ?>
                    </select></td>
            </tr>
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