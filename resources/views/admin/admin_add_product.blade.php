<html>
<form method="post"  action="{{ url('admin/admin_add_product') }}" enctype="multipart/form-data" >
   

    @csrf
   
        <div class="container">
          <h1>Add Product</h1>
          
          <hr>
          <label for="cake name"><b>Cake Name</b></label>
          <input type="text" placeholder="Name"  name="cake_name" required>
      
          <label for="Cake Type"><b>Cake Type</b></label>
          <input type="text" placeholder="Type" name="cake_type" required>
      
          <label for="Cake Price"><b>Cake Price</b></label>
          <input type="text" placeholder="Price" name="cake_price" required>

         <input type="file" name="cake_image">
         

          
          <hr>
      
         
          <button type="submit" class="registerbtn">Add</button>
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