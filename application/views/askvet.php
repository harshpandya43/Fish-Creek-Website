

<section style="float:right; width:80%">
    <p><a href="contact.html">Contact us</a> if you have a question that you would like answered here.</p>
    <dl>

        <?php/*
        // 3. Use returned data (if any)

        while($questions = mysqli_fetch_assoc($result)){
            //output data from each row
            */?>
        <?php foreach ($question->result() as $row){?>
            <dt class="heading-color"><strong><?php echo $row->question;?></strong></p></dt>
            <dd><?php echo $row->answer;?></dd><br/>
        <?php  }  ?>

    </dl>


    <br/><br/>

    <?php
    // 4. Release returned data
    //mysqli_free_result($result);
    ?>



    <footer>
        <em>Copyright&copy;2016 Fish Creek Animal Hospital<br>
            <a href="mailto:harsh@pandya.com">harsh@pandya.com</a></em>
    </footer>
</section>
</body>
</html>