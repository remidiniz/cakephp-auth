<div class="container">
		<?= $this->Form->create(null, [ 'id' => 'sa-sign-in-form' ]) ?>
        	<fieldset>
             	<legend><?= __('Please sign in') ?></legend>
                	<?= $this->Form->input('username', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'Username' ]) ?>
                  	<?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'label' => false, 'placeholder' => 'Password'  ]) ?>
             </fieldset>
              	
              <?= $this->Form->button(__('Sign in'), ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit', 'id' => 'sa-sign-in-form-submit' ]); ?>
             <?= $this->Form->end() ?>
</div>