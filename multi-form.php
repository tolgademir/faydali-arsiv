<?php 

function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
}

$_POST = array_map('form_filtrele', $_POST);

function post($name)
{
    if (isset($_POST[$name]))
    return $_POST[$name];
}

if (post('girisyap')) {

    print_r($_POST);

}

if (post('kayitol')) {

    print_r($_POST);

}

?>

<form action="" method="post">
    <h3>Giriş Yap</h3>

    Kullanıcı Adı: <br>
    <input type="text" name="kadi">
    <br>
    <br>

    Şifre: <br>
    <input type="password" name="sifre">
    <br>
    <br>

    <input type="hidden" name="girisyap" value="1">

    <button type="submit">Giriş Yap</button>
</form>

<form action="" method="post">
    <h3>Kayıt Ol</h3>

    Kullanıcı Adı: <br>
    <input type="text" name="kadi">
    <br>
    <br>

    Şifre: <br>
    <input type="password" name="sifre">
    <br>
    <br>
    
    E - Mail: <br>
    <input type="text" name="email">
    <br>
    <br>

    <input type="hidden" name="kayitol" value="1">

    <button type="submit">Giriş Yap</button>
</form>