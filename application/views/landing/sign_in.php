<form id="sign_in" action="sign_in" method="post" accept-charset="utf-8" style="width: 500px;">
  <input type="text" placeholder="Email Address"
    name="user[user_email]"
    required autofocus>
  <input type="password" placeholder="Password"
    name="user[user_pass]" required>
  <input type="checkbox" id="remember_me">
  <label for="remember_me" style="margin: 0; padding: 0;"><span> Remember me?</span></label>
  <button type="submit" class="right button"style="margin-bottom: 10px;">
    Sign in
  </button>
</form>