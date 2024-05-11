
<table class="navbar" id="navbar">
    <tr>
        <td>
            <!-- fahim: Home Icon -->
            <img src="" alt="">

            <!-- ratul: search -->
            <input type="text" name="search" placeholder="Search Here........">

            <!-- fahim: oije navbar er oida bucchos e to naam mone nai -->
            <!-- ratul: information fetch kor logout redirect kor -->
            <?=$_SESSION['user']['username'] ?> 
            <select name="profile" onchange="location = this.value">
                <option disabled selected hidden>:</option>
                <option value="profile.php">Profile</option>
                <option value="">Log Out</option>
            </select>
        </td>
    </tr>
</table>