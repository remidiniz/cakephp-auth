<div class="container">
	<?= $this->Form->create(null, [ 'id' => 'sa-sign-up-form' ]) ?>
		<fieldset>
			<legend><?= __('Please sign up') ?></legend>
				<?= $this->Form->input('username', ['class' => 'form-control', 'type' => 'email', 'label' => false, 'placeholder' => 'Username'  ]) ?>
				<?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'label' => false, 'placeholder' => 'Password'  ]) ?>
				<?= $this->Form->input('contact.first_name', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'First Name'  ]) ?>
             	<?= $this->Form->input('contact.last_name', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'Last Name'  ]) ?>
               	<?= $this->Form->select('roles', [], ['id' => 'sa-sign-up-role-input', 'class' => 'form-control', 'type' => 'select', 'label' => 'Role', 'placeholder' => 'Role', 'multiple' => true  ]) ?>
               	<?= $this->Form->select('referrer.id', [], ['id' => 'sa-sign-up-referrer-input', 'class' => 'form-control', 'type' => 'select', 'label' => 'Referrer', 'placeholder' => 'Referrer'  ]) ?>
                               
             	<?= $this->Form->checkbox('is_active') ?>     
     	</fieldset>
      	
      	<?= $this->Form->button(__('Sign up'), ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit', 'id' => 'sa-sign-up-form-submit' ]); ?>
      	<?= $this->Form->end() ?>
</div>