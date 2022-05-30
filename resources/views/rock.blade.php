<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>User Details form</h2>
  <form action="{{('store')}}" method="POST">
@csrf
    <div class="form-group">
        <label for="fname">first name:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter name" name="fname">
      </div>

      <div class="form-group">

      <label for="lname">last name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter lname" name="lname">
    </div>

       <div class="form-group">
 <label for="mobile">Mobile No.</label>
    <input type="number" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
  </div>
  <div class="form-group">
  <label for="add">address:</label>
  <input type="textarea" class="form-control" id="lname" placeholder="Enter address" name="add">
</div>


    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
