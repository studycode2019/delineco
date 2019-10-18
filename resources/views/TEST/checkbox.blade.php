<form action="postCheckBox" method="post">
    @csrf
    <input type="checkbox" name="checkBox" value="nam"> Nam
    <input type="checkbox" name="checkBox" value="nu"> Nu
    <input type="submit" value="Gửi">
</form>