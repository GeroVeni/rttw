<!DOCTYPE html>
<html>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>

    <header class="w3-container w3-teal">
      <h1>Test login / register</h1>
    </header>

    <div class="w3-row">
    <!-- Register form -->
      <div class="w3-container w3-half w3-margin-top" style="margin-left: 25%">

        <h2>Register form</h2>
        <form class="w3-container w3-card-4" action="api/register.api.php" method="post">

          <p>
          <input class="w3-input" type="text" name="name" style="width:90%" required>
          <label>Name</label></p>

          <p>
          <input class="w3-input" type="text" name="surname" style="width:90%" required>
          <label>Surname</label></p>

          <p>
          <input class="w3-input" type="email" name="email" style="width:90%" required>
          <label>Email</label></p>

          <p>
          <input class="w3-input" type="password" name="password" style="width:90%" required>
          <label>Password</label></p>

          <p>
          <input class="w3-input" type="password" name="confirm_password" style="width:90%" required>
          <label>Confirm password</label></p>

          <p>
          <input class="w3-input" type="date" name="date_of_birth" required>
          <label>Date of Birth</label></p>

          <p>
          <button class="w3-button w3-section w3-teal w3-ripple"> Register </button>
          <a href="index.php" class="w3-button w3-text-teal w3-ripple"> Already have an account? Login here </a>
          </p>

        </form>

      </div>
</div>
</body>
</html>
