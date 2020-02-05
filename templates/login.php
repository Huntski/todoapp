<form class="form" method="post" action="./">
    <div <?php if (!$error) { echo "style='display: none'"; } ?> class="form__error"><?php if ($error) echo $error ?></div>

    <h1 class="form__title">Hello there!</h1>
    <h3 class="form__desc">Please login to access patients.</h3>

    <input type="text" class="form__input <?php if (count($_POST) && $_POST['usern'] == '') echo "error" ?>" placeholder="Username" name="usern" value="<?php if (isset($_POST['usern'])) echo $_POST['usern'] ?>" autofocus>
    <input type="password" class="form__input <?php if (count($_POST) && $_POST['passw'] == '') echo "error" ?>" placeholder="Password" name="passw">

    <input type="checkbox" class="form__cbx" id="remeber__checkbox" name="remember">
    <label for="remeber__checkbox" class="form__cbx-label">
        <div class="label__cbx">
            <img class="label__cbx__img" src="vink.svg" alt="check mark">
        </div>
        <h2>Remember me.</h2>
    </label>

    <button class="form__submit" type="submit">login</button>

    <a href="./forgot" class="form__link">
        <h2 class="link__txt">Forgot password?</h2>
    </a>
</form>