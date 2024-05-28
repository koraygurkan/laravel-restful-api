<h1>Yaş Kontrollü Giriş Sayfası</h1>
<hr>
<form action="{{route('ageCheckPost')}}" method="POST">
    @csrf
    Yaşınız:
    <input type="text" name="age">
    <input type="submit" value="Giriş Yap">
</form>