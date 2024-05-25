<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f10cd542d4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
    <title>Patient Details</title>
</head>
<header>
  <div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <img src="{{asset('assets/9.png')}}" alt="" style="max-width: 3%;">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
            <a class="nav-link"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/diagnosis">Diagnosis</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/#aboutus">About us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/#footer">Contact us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/#help">Help</a>
          </li>
          </ul>
          <ul class="navbar-nav ms-auto">
          <li class="nav-item ms-auto">
            <a class="nav-link" href="/login">Login</a>
          </li>
          <li class="nav-item ms-auto">
            <a class="nav-link" href="/signup">Signup</a>
          </li>
            </ul>
            </div>
            </div>
        </nav>
    </div>
</header>
<body >
<form  method="post" action="/app/update/{{ $patient[0] -> userId }}">

      @csrf

      <div class="container container2 card" onkeyup="disableSubmit1()" onchange="disableSubmit1()" onload="disbleSubmit1()">
        <div class="row">
          <div class="form1" >
            <h2 class="text-center font-weight-normal">Patient Data</h2>
            <div class="row mt-5 mb-5">
              <div class="col">
                <label for="name" class="form-label fw-bold"> Name</label>
                <input type="text" value="{{$patient[0]->name}}" name="name" id="valid" class="form-control" required onkeyup="validateText(this)">
              </div> 
              
              <div class="col">
                <label for="age" class="form-label fw-bold"> Age</label>
                <input type="number" value="{{ $patient[0]->age }}" name="age" id="valid" class="form-control" required onkeyup="validateAge(this)">
              </div>
            </div>
            
          
            <div class="row">
              <div class="col mb-3">
                <label for="gen" class="form-label fw-bold">Gender</label><br>

                <input type="radio" id="valid" name="gender" value="Male" onclick="validateRadio()" 
                <?php
                if( $patient[0]->gender == 'Male'){
                  echo "checked";
                }
                ?>
                >
                <label for="male">Male</label>

                <input type="radio" id="valid" name="gender" value="Female" onclick="validateRadio()" 
                <?php
                if( $patient[0]->gender == 'Female'){
                  echo "checked";
                }
                ?>
                >
                <label for="female">Female</label>

                <input type="radio" id="valid" name="gender" value="Other" onclick="validateRadio()" 
                <?php
                if( $patient[0]->gender == 'Other'){
                  echo "checked";
                }
                ?>> 
                <label for="other">Other</label>
              </div>

              <div class="col">
                <label for="vac" class="form-label fw-bold">Vaccination</label><br>

                <input type="radio" id="valid" name="vaccination" value="Vaccinated" onclick="validateVacc()" 
                <?php
                if( $patient[0]->vaccination == 'Vaccinated'){
                  echo "checked";
                }
                ?>
                >
                <label for="done">Vaccinated</label>

                <input type="radio" id="valid" name="vaccination" value="Not Vaccinated" onclick="validateVacc()"
                <?php
                if( $patient[0]->vaccination == 'Not Vaccinated'){
                  echo "checked";
                }
                ?>
                >
                <label for="not">Not Vaccinated</label>
              </div>
              <div class="col">
                <label for="cov" class="form-label fw-bold">Ever Victim of Covid 19?</label><br>

                <input type="radio" id="valid" name="covid" value="Yes" onclick="validateCov()" 
                
                <?php
                if( $patient[0]->covid == 'Yes'){
                  echo "checked";
                }
                ?>
                >
                <label for="done">Yes</label>

                <input type="radio" id="valid" name="covid" value="No" onclick="validateCov()" 
                <?php
                if( $patient[0]->covid == 'No'){
                  echo "checked";
                }
                ?>>
                <label for="no">No</label>
              </div>
            </div>

            
            <div class="row">
              <div class="col">
                <label for="Symptoms" class="form-label fw-bold "> Symptoms</label>
                <textarea type="text"  name="symptoms" id="valid" class="form-control mb-3" required onkeyup="validateText(this)">{{ $patient[0]->symptoms }}</textarea>
              </div>
              <div class="col">
                <label for="breath" class="form-label fw-bold">Breathing Possiblities</label><br>
                <select id="valid" selectedValue="{{ $patient[0]->breath }}" name="breath" class="form-select" onchange="validateSelect(this)">
                    <option selected value="Chose Following">Chose Following</option>
                    <option value="Difficulty catching your breath"
                    <?php
                    if( $patient[0]->breath == 'Difficulty catching your breath'){
                    echo "selected";
                    }
                    ?>
                    >Difficulty catching your breath</option>
                    <option value="Noisy breathing"
                    <?php
                    if( $patient[0]->breath == 'Noisy breathing'){
                    echo "selected";
                    }
                    ?>
                    >Noisy breathing</option>
                    <option value="Very fast, shallow breaths"
                    <?php
                    if( $patient[0]->breath == 'Very fast, shallow breaths'){
                    echo "selected";
                    }
                    ?>
                    >Very fast, shallow breaths</option>
                    <option value="Wheezing"
                    <?php
                    if( $patient[0]->breath == 'Wheezing'){
                    echo "selected";
                    }
                    ?>
                    >Wheezing</option>s
                    <option value="Chest pain"
                    <?php
                    if( $patient[0]->breath == 'Chest pain'){
                    echo "selected";
                    }
                    ?>
                    >Chest pain</option>
                    <option value="Normal"
                    <?php
                    if( $patient[0]->breath == 'Normal'){
                    echo "selected";
                    }
                    ?>
                    >Normal</option>
                    <option value="Other"
                    <?php
                    if( $patient[0]->breath == 'Other'){
                    echo "selected";
                    }
                    ?>
                    >Other</option>
                </select>
              </div>
            </div>
            
            <label for="comment" class="form-label fw-bold ">Comments</label><br>
            <textarea id="valid" name="comments" rows="5" cols="50" class="form-control" onkeyup="validateText(this)">{{$patient[0]->comments}}</textarea>
            <button type="submit" id="button" class="btn btn1 mt-5">Next</button>

          </div>
        </div>
    </div>
</form>
</body>
</html>