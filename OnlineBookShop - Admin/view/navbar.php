
<table class="navbar" id="navbar">
    <tr>
        <td>
            <!-- fahim: logo -->
            <img src="" alt="">

            <!-- ratul: search -->
            <input type="text" name="search">

            <!-- fahim: settings icon --> <a href="settings.php">Settings</a>

            <!-- fahim: oije navbar er oida bucchos e to naam mone nai -->
            <!-- ratul: information fetch kor logout redirect kor -->
            <select name="profile" onchange="location = this.value">
                <option disabled selected hidden> <?=$_SESSION['user']['username'] ?></option>
                <option disabled> <?=$_SESSION['user']['full_name'] ?> </option>
                <option disabled> Admin </option>
                <option value="profile.php">Profile Settings</option>
                <option value="">Log Out</option>
            </select>
        </td>
    </tr>
</table>