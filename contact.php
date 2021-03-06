

<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
<style type="text/css">
      :root{
    --font-color:#555;
    --font-hover-color:orange;
}
body{
 
  
}

.container{
    
  display:flex;
    justify-content:center;
    align-items:center;
    
    font-family:"Raleway", sans-serif
}
.form-group{
    margin-bottom:1.5em;
    transition:all .3s;
}
.form-label{
    font-size:.75em;
    color:var(--font-color);
    display:block;
    opacity:0;
    transition: all .3s;
    transform:translateX(-50px);
}
.form-control{
    box-shadow:none;
    border-radius:0;
    border-color:#ccc;
    border-style:none none solid none;
    width:100%;
    font-size:1.25em;
    transition:all .6s;
}
.form-control::placeholder{
    color:#aaa;
}
.form-control:focus{
    box-shadow:none;
    border-color:var(--font-hover-color);
    outline:none;
}
.form-group:focus-within{
    transform:scale(1.1,1.1);
}

.form-control:invalid:focus{
    border-color:red;
}
.form-control:valid:focus{
    border-color:green;
}

.btn{
    background: 0 0 #fff;
    border:1px solid #aaa;
    border-radius:3px;
    color:var(--font-color);
    font-size:1em;
    padding:10 50px;
    text-transform:uppercase;
}
.btn:hover{
    border-color:var(--font-hover-color);
    color:var(--font-hover-color);
}
textarea{
    resize:none;
}



.focused > .form-label{
    opacity:1;
    transform:translateX(0px);

}
.Row {
    display: table;
    width: 100%; 
    table-layout: fixed; 
    border-spacing: 10px; 
}
.Column {
    display: table-cell;
    background-color: red; 
}
</style>
<link rel="stylesheet" href="sipho's.css" type="text/css">
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>My Portfolio</title>
</head>
<body>


  
<nav class="navbar">
    <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fa fa-navicon" style="font-size:36px"></i>
    </span>
    <a href="index.html" class="logo">Sipho Tywele</a>
    <ul class="main-nav" id="js-menu">
        <li>
            <a href="index.html" class="nav-links">Home</a>
        </li>
        <li>
            <a href="project.html" class="nav-links">Projects</a>
        </li>
        <li>
            <a href="about.html" class="nav-links">About</a>
        </li>
        <li>
            <a href="contact.php" class="nav-links">Contact</a>
        </li>
       
    </ul>
</nav>
<section id="contact" class="contact">
<div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <h1>Contact Me</h1><br><br>
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control"><br><br>
                <input id="email" placeholder="Email" class="form-control"><br><br>
                <input id="subject" placeholder="Subject" class="form-control"><br><br>
                
                <textarea class="form-control" id="body" placeholder="Email Body"></textarea><br><br>
                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LcdDvEZAAAAANRXdE6fv8i1FnkS9OBJLb5dxXRv"></div><br><br> 
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
            </div>
        </div>
    </div>
</section>
<section id="Contact">
    <div class="contact container">
    
      <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>
      <div class="contact-items">
        <div class="contact-item">
            <br><br><br><br>
            <div class="row">
          <div class="icon"class="column"><img src="https://img.icons8.com/bubbles/100/000000/phone.png"/></div>
          <div class="contact-info">
              <br><br>
            <h1>Phone</h1>
            <h2>0727973801</h2>

          </div>
        </div>

        <div class="contact-item">
          <div class="icon" class="column"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>Tywelesipho78@gmail.com</h2>

          </div>
        </div>
        <div class="contact-item">
          <div class="icon" class="column"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>litha,khayelitsha,Cape town</h2>
          </div>
        </div>
      </div>
    </div>
</div>
  </section>
  </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert(' Something Went Wrong Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

    </script>


<script src="https://www.google.com/recaptcha/api.js"></script>


<script src="script.js"></script>
</body>
</html>
