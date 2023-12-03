
<div class=" d-flex justify-content-center mt-2">
    <div class="form-container w-50 ">
<h1>New Article</h1>
<?php echo form_open_multipart('articles/write'); ?>
<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control form-width" value="<?php echo
set_value('title'); ?>" />
<?php echo form_error('title'); ?>
</div>
<div class="form-group">
<label for="description">Description</label>
<textarea name="description" class="form-control form-width textarea-height"><?php echo
set_value('description'); ?></textarea>
<?php echo form_error('description'); ?>
</div>
<div class="form-group">
<label for="picture">Picture</label>
<input type="file" name="filename" class="form-control form-width" value="<?php echo
set_value('filename'); ?>">
<?php echo form_error('filename'); ?>
<!-- in CI3, this file input MUST be called userfile by default. Else, you have to refer to it in your controller
code. -->
</div>

<div class="form-group"><input type="submit" value="Submit" class="btn btn-primary" /></div>
</form>
</div>
</div>