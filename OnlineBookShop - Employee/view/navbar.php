
<table class="navbar" id="navbar">
    <tr>
        <td>
            <!-- fahim: Home Icon -->
            <img src="" alt="">

            <input type="text" name="search" placeholder="Search Here........">

            <!-- fahim: oije navbar er oida bucchos e to naam mone nai -->
            <?=$_SESSION['user']['username'] ?> 
            <select name="profile" onchange="location = this.value">
                <option disabled selected hidden>:</option>
                <option value="profile.php">Profile</option>
                <option value="../controller/logout.php">Log Out</option>
            </select>
        </td>
    </tr>
</table>