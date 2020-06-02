<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="el_sombrero.css">
    <title></title>
  </head>
  <body>
    <div class="body">
      <div class="left-column">
         <marquee behavior="scroll" scrollamount="30" direction="up" >
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
              <img src="flag.gif" alt="Flag gif">
             </marquee>;
      </div>
      <div class="mid-column">
        <div class="title">
          <h1>El Sombrero Sign Up</h1>
          <div class="account">
            <input type="checkbox" id="nav-toggle">
            <label for="nav-toggle" class="user_icon">
              <i class="fas fa-user-circle"></i>
          </div>
        </div>
        <div class="navbar">
          <p> <a href="index.php">Home</a> </p>

        </div>
        <div class="card">
              <form action="create_account.php" method="post">
                <p>Enter your first name:
                <input required type="text" name="firstname" placeholder="Enter First Name"></p>
                <p>Enter your last name:
                <input required type="text" name="lastname" placeholder="Enter Last Name"></p>
                <p>Enter a username:
                <input required type="text" name="username" placeholder="Enter a Username"></p>
                <p>Enter a password:
                <input required type="password" name="password" placeholder="Enter a password"></p>
                <p>Enter your email:
                <input required type="text" name="email" placeholder="Enter your email"></p>
                <button type="submit" name="button">Go</button>
              </form>
        </div>
      </div>
      <div class="right-column">
        <marquee behavior="scroll" scrollamount="30" direction="up" scrollamount="30">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
          <img src="flag.gif" alt="Flag gif">
        </marquee>
      </div>
    </div>
  </body>
</html>
