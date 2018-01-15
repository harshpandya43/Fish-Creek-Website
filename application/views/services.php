
<section style="float:right; width:80%">

    <ul>

<!--        --><?php ///*
//        // 3. Use returned data (if any)
//
//        while($services = mysqli_fetch_assoc($result)){
//            //output data from each row
//            */?>
            <?php foreach ($type->result() as $row){?>
            <li class="heading-color"><strong><?php echo $row->servicename ;?></strong></li>
            <?php echo $row->description; ?>


        <?php  }  ?>
    </ul>

    <br/><br/>

    <?php
    // 4. Release returned data
   // mysqli_free_result($result);
    ?>

    <footer>
        <em>Copyright&copy;2016 Fish Creek Animal Hospital<br>
            <a href="mailto:harsh@pandya.com">harsh@pandya.com</a></em>
    </footer>

</section>
</body>
</html>
