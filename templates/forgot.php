<form class="form" method="post" action="./forgot">

    <h2 class="return"><a href="./">< Return</a></h2>

    <div class="form__error" style="<?php if (!$error) echo "display: none" ?>"><?php if ($error) echo $error ?></div>

    <h1 class="form__title forgot__title">Forgot password?</h1>
    <h3 class="form__desc forgot__desc">Please enter your registered email <br>
        to send you password reset instructions</h3>

    <input type="text" class="form__input forgot__input <?php if (count($_POST) && $_POST['email'] == '') echo "error" ?>" placeholder="Email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>">

    <button class="form__submit" type="submit" name="reset__submit">Reset</button>

</form>
