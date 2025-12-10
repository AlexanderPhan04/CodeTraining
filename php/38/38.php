<!-- code form html -->
<form action="" method="get" name="form">
    <label for="">user-name</label>
    <input type="text" name="user_name">
    <br>
    <label for="">password</label>
    <input type="password" name="password">
    <br>
    <label for="">birth</label>
    <input type="date">
    <br>
    <label for="">gender</label>
    <input type="radio" value="man" name="gender">
    <input type="radio" value="women" name="gender">
    <br>
    <label for="">yes or no</label>
    <input type="checkbox" value="yes" name="check">
    <br>
    <label for="">nationality</label>
    <select name="nationality" id="">
        <option value="VN">Việt Nam</option>
        <option value="US">Mỹ</option>
        <option value="JP">Nhật Bản</option>
    </select>
    <br>
    <label for="">comment</label>
    <textarea name="comment" id="">comment content</textarea>
    <br>
    <input type="submit" name="btn" value="send">
</form>
<?php

?>