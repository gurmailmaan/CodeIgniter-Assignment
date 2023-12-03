<?php foreach($results as $row): ?>
  <?php if ($row->article_id): ?>
    <div style="display:flex; justify-content:center;">
      <div class="well" style="margin-bottom:2rem; max-width:960px;">
        <h3 style="text-align:center; margin-bottom:1rem;"><?php echo $row->title ?></h3>
        <?php
        $file = base_url() . "uploads/" . $row->filename;
        if (strpos($row->filename, ".jpg") !== false): // just a way to make sure that this is a JPG image
          echo "<img src=\"$file\" style=\"margin:10px;max-width:940px\">";
        endif;
        ?>
        <p><?php echo $this->typography->nl2br_except_pre($row->description); ?></p>
        
        <a href="<?php echo base_url() ."articles/edit/" .$row->article_id;?>" class="btn btn-primary btn-sm"> <i
          class="material-icons">edit</i>Edit</a>
        <a href="<?php echo base_url() ."articles/delete/" .$row->article_id;?>" class="btn btn-danger btn-sm"> <i
          class="material-icons">delete</i>Delete</a>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach;?>
