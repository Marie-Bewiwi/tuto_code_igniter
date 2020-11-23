<div class="col-md-4">
  <?=heading(htmlentities($title), 2);?>
  <p>
    <small>
      <?=date_format($date, 'd/m/Y');?>
      -
      <?=$author?>
      <?php if ($this->auth_user->is_connected): ?>
        -
        <?=$this->article_status->label[$status];?>
      <?php endif;?>
    </small>
  </p>
  <p><?=nl2br(htmlentities($content));?>...<?=anchor($article_url, "Lire la suite");?></p>
</div>