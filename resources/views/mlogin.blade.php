<h1>Login sayfası</h1>
<hr>
<form action="{{route('mloginCheck')}}" method="POST">
    @csrf
    <input type="text" name="email">
    <input type="text" name="password">
    <input type="checkbox" name="remember"><b>Beni Hatırla</b>
    <input type="submit" value="Giriş Yap">
</form>