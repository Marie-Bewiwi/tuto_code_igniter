<div class="container">
  <div class="row">
    <?=heading($title);?>
  </div>
  <div class="row">
    <?=form_open('contact', ['class' => 'form-horizontal']);?>
    <div class="form-group">
      <?=form_label("Votre nom&nbsp;:", "name", ['class' => "col-md-2 control-label "])?>
        <div class="col-md-10">
      <?=form_input(['name' => "name", 'id' => "name", 'class' => 'form-control'])?>
      </div>
    </div>
    <div class="form-group">
      <?=form_label("Votre e-mail&nbsp;:", "email", ['class' => "col-md-2 control-label "])?>
      <div class="col-md-10">
        <?=form_input(['name' => "email", 'id' => "email", 'type' => 'email', 'class' => 'form-control'])?>
      </div>
    </div>
    <div class="form-group">
      <?=form_label("Titre&nbsp;:", "title", ['class' => "col-md-2 control-label "])?>
      <div class="col-md-10">
        <?=form_input(['name' => "title", 'id' => "title", 'class' => 'form-control'])?>
      </div>
    </div>
    <div class="form-group">
      <?=form_label("Message&nbsp;:", "message", ['class' => "col-md-2 control-label "])?>
      <div class="col-md-10">
        <?=form_textarea(['name' => "message", 'id' => "message", 'class' => 'form-control'])?>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-10">
        <?=form_submit("send", "Envoyer", ['class' => "btn btn-default"]);?>
      </div>
    </div>
    <?=form_close()?>
  </div>
</div>