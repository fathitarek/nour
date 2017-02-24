<form action="<?php echo base_url()?>examples/run_test" method="post">
    <input type="text" name="tester" />
    <input type="submit" value="submit" name="submit" />
    <?php echo validation_errors();?>
</form>