<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/edit'); ?>

<label for="person">Person</label><input  name="person"/><br/>
<label for="day">Day</label><input type="number" max="31" name="day"/><br/>
<label for="month">Month</label><input type="number" max="12" name="month"/><br/>
<label for="year">Year</label><input type="number" max="4000" name="year"/><br/>
<input type="submit" name="submit" value="Edit news item"/>

</form>