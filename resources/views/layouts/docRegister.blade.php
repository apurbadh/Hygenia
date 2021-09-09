<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Document</title>

</head>
<body>

    <form enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Certificate</label>
          <input name="doctor_certificate" type="file" class="form-control" id="profile" placeholder="Your Doctor's Certificate">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Qualification</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>MBBS</option></option>
            <option>Master Of Medicine</option>
            <option>Master Of Surgery</option>
            <option> MD-phd</option>
            <option>MD(Ayurveda)</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Sector</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>Physician</option>
            <option>neurologist</option>
            <option>Orthopedic</option>
            <option>Opthalmologist</option>
            <option>surgeon</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell something about yourself"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" value="">Submit</button>
      </form>

</body>
</html>