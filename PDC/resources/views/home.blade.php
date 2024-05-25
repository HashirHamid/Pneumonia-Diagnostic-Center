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
          <!-- <li class="nav-item ms-auto">
            <a class="nav-link" href="/signup"></a>
          </li> -->
            </ul>
            </div>
            </div>
        </nav>
    </div>
</header>
<body onload="changeImage()">

<div class="container" style="width: 70%;">
  <div class="mb-5">
    <img width=100% height='450px' id='myimage1' src='assets/img1.jpg'/>
    <img width=100% height='450px' id='myimage2' style='display:none' src='assets/img6.jpg'/>
    <img width=100% height='450px' id='myimage3' style='display:none' src='assets/img3.jpg'/>
    <img width=100% height='450px' id='myimage4' style='display:none' src='assets/img4.jpg'/>
    <img width=100% height='450px' id='myimage5' style='display:none' src='assets/img5.jpg'/>
  </div>
    <div class="row" id="password">

      <h2>The Need for PDC</h2>
        <p>Only within the first year of the pandemic, more than 100 million people worldwide have been diagnosed with Covid-19 that is caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) and proximate 2% death rate has been observed. In addition, fast-spreading SARS-CoV-2 variants have been identified worldwide. Although the majority of Covid-19 patients have mild symptoms and do not need specific treatment, approximately 15% of the patients end up developing severe pneumonia that potentially progresses to acute respiratory distress syndrome (ARDS), which requires immediate intensive care to save lives. <br> Pneumonia is often caused by viruses (including Covid-19) and bacteria and treatment options vary with the causes. Development of ARDS is a major cause of death in Covid-19 patients because of severe damage to the lungs. A correct clinical diagnosis of Covid-19 pneumonia guides appropriate treatment, especially with anti-SARS-CoV-2 immunotherapy. The SARS-CoV-2 virus can be detected by an RNA test, but this test does not reflect clinical features and severity of Covid-19; in addition, false negative and false positive cases have also been observed with RNA testing for SARS-CoV-2 virus detection. In addition, pneumonia in Covid-19-positive patients could be caused by non-Covid-19 viruses or bacteria, especially in a flu season, and needs to be distinguished from pneumonia caused by non-Covid-19 organisms. Thus, a correct clinical diagnosis of Covid-19 provides a solid base for initiating Covid-19-specific therapies and patient isolation. <br> Chest X-ray and CT images are frequently taken for determining the presence of Covid-19 pneumonia by radiologists, but high diagnostic accuracy is difficult to achieve. On the other hand, the CT examination is often limited to larger hospitals. By contrast, chest X-ray is widely available, economical, and less time-consuming. Furthermore, chest X-ray helps to assess the severity and therapy-response to Covid-19 (Cohen et al., 2020; Hussain et al., 2020; Kikkisetti et al., 2020; Shen et al., 2021; Wong et al., 2021; Zhu et al., 2020). However, the current challenge in evaluating chest X-ray images in Covid-19 patients is to achieve high diagnostic accuracy.</p>
    </div>
    <div class="row">
      <div class="col-8" style="display:block;">
        <h2>How we diagnose</h2>
        <p>Deep learning is a type of machine learning in which a model learns to perform classification tasks directly from images. Deep learning is usually implemented using neural network architecture. Transfer learning is an approach that applies knowledge of one type of problem to a different but related problem. Using a pretrained network with transfer learning is typically much faster and easier than training a network from scratch. Medical image analysis and computer-assisted intervention problems have been increasingly addressed with deep-learning-based solutions. 
          <br>
          Deep learning helps to generate computational models consisting of multiple processing layers to learn representations of data with multiple levels of abstraction. Compared to machine learning that learns to conduct classification tasks directly from data, deep learning learns and abstracts the relevant information automatically while the data are being processed. Within the deep learning networks, the processing layers are interconnected via nodes (neurons), and each hidden layer receives information from the previous layer. Of all deep learning networks, convolutional neural networks (CNNs) are most commonly used, because CNNs can transform a multidimensional input image into a desired output. In general, a CNN is composed of an input layer and an output layer with several hidden layers in between and the most common layers are convolution, activation or ReLU (rectified linear activation function unit), and pooling. Each layer learns to detect different features in the input data. Deep learning networks have been widely used in the artificial intelligence (AI) field for signal data classification and we believe that they could be powerful tools for analyzing X-ray images.
          <br><br>
          Using deep learning, here we generate AI models to only read chest X-ray images of patients to reach nearly 100% diagnostic accuracy for Covid-19. </p>  
      </div>
      <div class="col-4">
        <img src="assets/img8.jpg" class="mt-5" style="width: 100%;height: 350px; display: block; float:right;" alt="image">
      </div>
      </div>
    <button class="btn btn1" style="width: 30%; margin: 0; position: absolute; left: 50%; -ms-transform: translateX(-50%); transform: translateX(-50%);">Let's Diagnose!</button>

    <div class="row mt-5 justify-content-center">
        <h2 id="aboutus">About us</h2>
        <div class="col-sm-auto card card1">
          <img src="assets/120910903_2622827378030448_8816173333346406303_n.jpg" alt="" class="img-aboutus">
          <h3>Hashir Hamid</h3>
          <span>Web Developer</span>
          <ul class="socials">
            <li class="socials1"> 
              <a href="#" class="social"><i class="fa-brands fa-facebook fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-instagram fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-twitter fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-linkedin fa-lg"></i></a>
            </li>
          </ul>
          
          
        </div>
        <div class="col-sm-auto card card1">
          <img src="assets/WhatsApp Image 2022-05-22 at 10.40.00 PM.jpeg" alt="" class="img-aboutus">
          <h3>Ehtisham Ejaz</h3>
          <span>Web Developer</span>
          <ul class="socials">
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-facebook fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-instagram fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-twitter fa-lg"></i></a>
            </li>
            <li class="socials1">
              <a href="#" class="social"><i class="fa-brands fa-linkedin fa-lg"></i></a>
            </li>
          </ul>
        </div>
    </div>
    <form>
    <div class="row">
      <h2 id="help">Help and support</h2>
        <div class="col-md-6">
          <label for="Name" class="form-label fw-bold">First Name <span style="color: red;">*</span></label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="Name" class="form-label fw-bold">Last Name <span style="color: red;">*</span></label>
          <input type="text" class="form-control" required>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="email" class="form-label fw-bold">Email <span style="color: red;">*</span></label>
        <input type="email" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="number" class="form-label fw-bold">Contact <span style="color: red;">*</span></label>
        <input type="tel" class="form-control mb-5" required>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="Comments" class="form-label fw-bold">How we may help you? <span style="color: red;">*</span></label>
        <textarea name="Comments" id="comments" rows="10" cols="20" style="resize: NONE;"  class="form-control" required></textarea>
      </div>
    </div>
    <button type="submit" class="btn btn1 mb-5" style="width: 30%; margin: 0; position: relative; left: 50%; -ms-transform: translateX(-50%); transform: translateX(-50%);">Submit</button>
    <div class=" row mt-5">
        <div id=" col map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.2059054581214!2d73.15440461502517!3d33.651826280716634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfea4aee5bdf8f%3A0xe6b55e05d462beb1!2sCOMSATS%20University%20Islamabad!5e0!3m2!1sen!2s!4v1656057124045!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>
</div>
</form>
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
