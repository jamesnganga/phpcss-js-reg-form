<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>


      <link rel="stylesheet" href="style.css">


</head>

<body background-color="green">

  <div class="row">
  <section class="section">
    <header>
      <h3>Bank account management system</h3>
      <h4>Please fill your information in this form honestly</h4>
    </header>
    <main>
      <form action="login.php" method="post">
        <div class="form-item box-item">
          <input type="text" name="name" class="tx1" placeholder="Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item box-item">
          <input type="email" name="email" class="tx1" placeholder="Email" data-email data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label">
              <label class="label">Gender</label>
            </div>
            <div class="form-item">
              <input id="Male" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item">
              <input id="Female" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label">
              <label class="label">Account Type</label>
            </div>
            <div class="form-item">
              <input id="sponsored" type="radio" name="gender2" value="sponsored" data-once>
              <label for="sponsored">savings account</label>
            </div>
            <div class="form-item">
              <input id="paid" type="radio" name="gender2" value="paid" data-once>
              <label for="paid">joint account</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        <div class="form-item box-item">
          <input type="text" name="username1" placeholder="Username" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item-double box-item">

          <div class="form-item">
            <input type="text" name="zCode" placeholder="account number" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div>
        </div>
        <div class="form-item box-item">
          <input type="text" name="phone" placeholder="Phone" data-required data-number data-count="10">
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="true"></i> must be 10 digits</small>
        </div>
        <div class="form-item">
          <span id="submit" class="submit">Submit</span>
        </div>
      </form>
    </main>
    <footer>
      <p>Already have an account? <a href="login.php">Login</a></p>
    </footer>
    <i class="wave"></i>
  </section>
</div>
 



    <script  src="function.js"></script>




</body>

</html>
