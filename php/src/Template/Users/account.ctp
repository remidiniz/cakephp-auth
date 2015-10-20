	<table style="width:'100%'; border:'0';">
            <tr valign="top">
                <?php if( $user ) { ?>
                    <td  width="50%">

						<?php echo $this->Auth->user() ?>

                    </td>
                    <td  width="50%">
						
                    </td>
                <?php } else { ?>
                    <td  width="50%">
                        <div class="container">

                            <div id="sa-sign-in-form-flash"></div>

                            <?= $this->Form->create(null, [ 'id' => 'sa-sign-in-form' ]) ?>
                            <fieldset>
                                <legend><?= __('Please sign in') ?></legend>
                                <?= $this->Form->input('username', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'Username' ]) ?>
                                <?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'label' => false, 'placeholder' => 'Password'  ]) ?>
                            </fieldset>
                            <?= $this->Form->button(__('Sign in'), ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'button', 'id' => 'sa-sign-in-form-submit' ]); ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </td>
                    <td  width="50%">
                        <div class="container">

                            <div id="sa-sign-up-form-flash"></div>

                            <?= $this->Form->create(null, [ 'id' => 'sa-sign-up-form' ]) ?>
                            <fieldset>
                                <legend><?= __('Please sign up') ?></legend>
                                <?= $this->Form->input('username', ['class' => 'form-control', 'type' => 'email', 'label' => false, 'placeholder' => 'Username'  ]) ?>
                                <?= $this->Form->input('password', ['class' => 'form-control', 'type' => 'password', 'label' => false, 'placeholder' => 'Password'  ]) ?>
                                <?= $this->Form->input('contact.first_name', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'First Name'  ]) ?>
                                <?= $this->Form->input('contact.last_name', ['class' => 'form-control', 'type' => 'text', 'label' => false, 'placeholder' => 'Last Name'  ]) ?>
                                <?= $this->Form->input('roles.0.id', ['id' => 'sa-sign-up-role-input', 'class' => 'form-control', 'type' => 'select', 'label' => 'Role', 'placeholder' => 'Role'  ]) ?>
                                <?php //echo $this->Form->input('referrer.id', ['id' => 'sa-sign-up-referrer-input', 'class' => 'form-control', 'type' => 'select', 'label' => 'Referrer', 'placeholder' => 'Referrer'  ]) ?>
                               
                                <?= $this->Form->checkbox('is_active') ?>
                               
                         
                            </fieldset>
                            <?= $this->Form->button(__('Sign up'), ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'button', 'id' => 'sa-sign-up-form-submit' ]); ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </td>

                <?php } ?>
            </tr>
        </table>