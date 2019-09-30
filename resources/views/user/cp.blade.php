<html>
<form method="post"  action="{{ url('user/cp') }}" enctype="multipart/form-data" >
    @csrf
        <div class="container">
          <h1>Change Your Password</h1>
          
          <hr>
          <label for="Current Password"><b>Current Password</b></label>
          <input type="password" placeholder="Current Password"  name="cp" required>
      
          <label for="New Password"><b>New Password</b></label>
          <input type="password" placeholder="New Password" name="np" required>
      
          <label for="Confirm Password"><b>Confirm Password</b></label>
          <input type="password" placeholder="Confrim New Password" name="cnp" required>
      <hr>         
          <button type="submit" class="registerbtn">Update Password</button>
        </div>
      </form>
      </html>
    <style>
        * {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    </style>