<?php use_helper('I18N') ?>





<form class="form-signin" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <?php if ($form['username']->hasError()): ?>

    <div class="alert alert-block alert-danger fade in">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="fa fa-times"></i>
        </button>
         <?php foreach ($form['username']->getError() as $error): ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
    <h2 class="form-signin-heading">sign in now</h2>
    <div class="login-wrap">
        <div class="user-login-info">
            <?php echo $form['username']->render(array('id' => 'username', 'placeholder' => 'Nom d\'utilisateur', 'class' => 'form-control', "autofocus" => "")) ?>
            <?php echo $form['password']->render(array('id' => 'password', 'placeholder' => 'Mot de passe', 'class' => 'form-control')) ?>
            <?php echo $form->renderHiddenFields(FALSE) ?>
        </div>
        <label class="checkbox">
            <?php echo $form['remember'] ?> Remember me

        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

        <div class="registration">
            Powered by
            <a class="" href="http://app4mob.mobi">
                APP4MOB
            </a>
        </div>

    </div>

</form>
