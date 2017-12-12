<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="person">Person</label><input type="input" name="person"/><br/>
<label for="day">Day</label><input type="input" name="day"/><br/>
<label for="month">Month</label><input type="input" name="month"/><br/>
<label for="year">Year</label><input type="input" name="year"/><br/>
<input type="submit" name="submit" value="Create news item"/>

</form>