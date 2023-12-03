
<?php if(($results)) : ?>
<?php foreach($results as $row): ?>
<div style="display:flex; justify-content:center;">
<div class="whatever" style="display:flex; margin-bottom:1rem; margin-top:1rem; max-width:960px; border:2px solid #007bff; padding:1rem;">
<div>
<?php
        $file = base_url() . "uploads/thumbnails/" . $row->filename;
        if (strpos($row->filename, ".jpg") !== false): // just a way to make sure that this is a JPG image
          echo "<img src=\"$file\" style=\"margin:10px; max-width:200px;\">";
        endif;
        ?>
</div>
<div>
<h4><?php echo $row->title ?></h4>
<p style="height: 3em; overflow: hidden;"><?php echo $row->description  ?></p>
<a href="<?php echo base_url('articles/detail/'.$row->article_id) ?>"><button type="button" class="btn btn-primary" >Read More</button></a>
</div>
</div>
</div>
<?php endforeach;?>
<?php endif; ?>