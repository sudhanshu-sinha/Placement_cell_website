

<div id="loginPopup" class="popup">
    <div class="form-wrapper">
        <span class="close" id="closeButton">&times;</span>
        <h2>Sign In</h2>
        <form action="Authentication.php" method="post">
            <div class="form-control">
                <input type="text" name="uid" required>
                <label>UID</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="form-help">
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</div>
