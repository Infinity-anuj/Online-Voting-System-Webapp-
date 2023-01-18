<!DOCTYPE html>

<head>
    <title>Online Voting System </title>
    <link href="registerstyle.css" rel="stylesheet">

</head>

<body>
    <center>
        <h1> Online Voting System </h1>
    </center>
    <div class="login-box">
        <h2>REGISTRATION</h2>
        <form action="../api/register.php" method="post" enctype="multipart/form-data">
            <div class="user-box">
                <input type="text" name="name" required="">
                <label>Name</label>
            </div>
            <div class="user-box">
                <input type="number" name="mob" required="" maxlength="10">
                <label>Mobile-Number</label>
            </div>

            <div class="user-box">
                <input type="password" name="pass" maxlength="15" required="">
                <label>Password</label>
            </div>

            <div class="user-box">
                <input type="password" name="cpass" maxlength="15" required="">
                <label>Confirm Password</label>
            </div>

            <div class="user-box">
                <input type="text" name="add" required><label>Address</label>
            </div>

            <div class="user-box">
                <Br>
                <input type="file" id="profile" name="image" required><label>Upload Image </label>
            </div>

            <div class="user-box">
                <label> Select Your Role </label>
                <br>
                <select name="role">
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select>
            </div>

            <center>
                <button id="loginbtn" type="submit" name="registerbtn">
                    Register
                </button>
            </center>

            <div id="user">
                <br>
                Already User ?
                <a href="../">
                    <span></span>
                    Login Here
                </a>
            </div>

        </form>
    </div>

</body>

</html>