<?php
if($results){
foreach($results as $row){
$title = $row->title;
$description = $row->description;
$id = $row->article_id;
echo form_open_multipart("articles/edit/$id");
}
}?>


<div class=" d-flex justify-content-center mt-2">
<div class="form-container w-50 ">
<div>
<h1>Edit Article</h1>
<?php echo form_open_multipart("articles/edit/$id"); ?>
<div class="form-group">
<label for="title">Title</label>
<input type="text" name="title" class="form-control form-width" value="<?php echo
set_value('title',$title); ?>" >
<?php echo form_error('title'); ?>
</div>
<div class="form-group">
<label for="description">Description</label>
<textarea name="description" class="form-control form-width textarea-height"><?php echo
set_value('description',$description); ?></textarea>
<?php echo form_error('description'); ?>
</div>
<div class="form-group"><input type="submit" value="Update" class="btn btn-primary" /></div>
</form>
</div>
</div>
