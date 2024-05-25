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
    <script type="text/javascript" src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/validation.js')}}"></script>
    <title>Home</title>
</head>
<header>
  <div class="container">
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <img src="assets/9.png" alt="" style="max-width: 3%;">
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
<body>
    <div class="container" style="margin-top: 100px; margin-bottom: 139px;">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Patient Report</h2>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Vaccination</th>
							<th>Covid</th>
							<th>Symptoms</th>
							<th>Breath</th>
							<th>Comments</th>
							<th>Result</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pat as $Patient)<tr>
							<td>{{$Patient->name}}</td>
							<td>{{$Patient->age}}</td>
							<td>{{$Patient->gender}}</td>
							<td>{{$Patient->vaccination}}</td>
							<td>{{$Patient->covid}}</td>
							<td>{{$Patient->symptoms}}</td>
							<td>{{$Patient->breath}}</td>
							<td>{{$Patient->comments}}</td>
							<td>
                @if($Patient->result == 'NULL')

                @endif
								@if($Patient->result == 0)
									Normal
								@endif
								@if($Patient->result == 1)
									Pneumonia
								@endif
								</td>
						</tr>@endforeach
					</tbody>
				</table>
		  </div>        
    </div>
  </div>
</body>
</html>
</body>
<footer class="footer" id="footer">
  <div class="row m-0">
    <span class="contact"> <strong>Office Address:</strong> <br>Xyzsdadawe </span>
    <span class="contact"> <strong>Contact no:</strong> <br>23456678</span>
    <span class="contact"> <strong>Email:</strong> <br>Example@gmail.com</span>
    <span class="text-center">All rights reserved. This app is made by Hashir and Ehtisham.</span>
  </div>
</footer>
</html>