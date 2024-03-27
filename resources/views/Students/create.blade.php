<!doctype html>
<html>
    <head>
        <title>nouveau etudiant</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
        * {
          box-sizing: border-box;
          margin: 0;
          padding: 0;
          font-family: 'Poppins', sans-serif;
        }
        body{
          background-color: #131313;
        }
      </style>
     </head>
      
    <body>

        <br><br><br><br><br><br><br>
        <h3 align="center" style="color: #fff;">Add Students Form</h3>
        <br>
        <div class="container p-3 " style="background-color:#ff8177; background-image: linear-gradient(to top, #ff0844 0%, #ffb199 100%); width:450px; border-radius: 15px;">
            <form method= "POST" action={{ route('students.store') }}>
                @csrf
              <div class="mb-3">
                <label for="first_name" class="form-label" style="color: #fff;" >Nom</label>
                <input type="text" name="first_name" class="form-control" >
               </div>
              <div class="mb-3">
                 <label for="last_name" class="form-label" style="color: #fff;">Prenom</label>
                 <input type="text" name="last_name" class="form-control" >
              </div>
              <div class="mb-3">
                 <label for="age" class="form-label" style="color: #fff;">age</label>
                 <input type="number" name="age" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            <form>
        <div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
<html>
