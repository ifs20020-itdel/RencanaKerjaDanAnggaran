<!DOCTYPE html>
<html lang="en">
<head>
    <title>RKA IT-DEL</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style>
 @import url("https://fonts.googleapis.com/css?family=Fira+Sans");
 html, body {
	 position: relative;
	 min-height: 100vh;
	 background-color: silver;
	 display: flex;
	 align-items: center;
	 justify-content: center;
	 font-family: "Fira Sans", Helvetica, Arial, sans-serif;
	 -webkit-font-smoothing: antialiased;
	 -moz-osx-font-smoothing: grayscale;
}
 .form-structor {
	 background-color: #222;
	 border-radius: 15px;
	 height: 550px;
	 width: 350px;
	 position: relative;
	 overflow: hidden;
}
 .form-structor::after {
	 content: '';
	 opacity: 0.5;
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 background-repeat: no-repeat;
	 background-position: center;
	 background-size: 840px;
	 background-image: url('../pictures/del2.jpeg');
}
 .form-structor .signup {
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 -webkit-transform: translate(-50%, -50%);
	 width: 65%;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup.slide-up {
	 top: 5%;
	 -webkit-transform: translate(-50%, 0%);
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup.slide-up .form-holder, .form-structor .signup.slide-up .submit-btn {
	 opacity: 0;
	 visibility: hidden;
}
 .form-structor .signup.slide-up .form-title {
	 font-size: 1em;
	 cursor: pointer;
}
 .form-structor .signup.slide-up .form-title span {
	 margin-right: 5px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-title {
	 color: #fff;
	 font-size: 1.7em;
	 text-align: center;
}
 .form-structor .signup .form-title span {
	 color: rgba(0, 0, 0, 0.4);
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-holder {
	 border-radius: 15px;
	 background-color: #fff;
	 overflow: hidden;
	 margin-top: 50px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .form-holder .input {
	 border: 0;
	 outline: none;
	 box-shadow: none;
	 display: block;
	 height: 30px;
	 line-height: 30px;
	 padding: 8px 15px;
	 border-bottom: 1px solid #eee;
	 width: 100%;
	 font-size: 12px;
}
 .form-structor .signup .form-holder .input:last-child {
	 border-bottom: 0;
}
 .form-structor .signup .form-holder .input::-webkit-input-placeholder {
	 color: rgba(0, 0, 0, 0.4);
}
 .form-structor .signup .submit-btn {
	 background-color: rgba(0, 0, 0, 0.4);
	 color: rgba(256, 256, 256, 0.7);
	 border: 0;
	 border-radius: 15px;
	 display: block;
	 margin: 15px auto;
	 padding: 15px 45px;
	 width: 100%;
	 font-size: 13px;
	 font-weight: bold;
	 cursor: pointer;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .signup .submit-btn:hover {
	 transition: all 0.3s ease;
	 background-color: rgba(0, 0, 0, 0.8);
}
 .form-structor .login {
	 position: absolute;
	 top: 20%;
	 left: 0;
	 right: 0;
	 bottom: 0;
	 background-color: #fff;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login::before {
	 content: '';
	 position: absolute;
	 left: 50%;
	 top: -20px;
	 -webkit-transform: translate(-50%, 0);
	 background-color: #fff;
	 width: 200%;
	 height: 250px;
	 border-radius: 50%;
	 z-index: 4;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center {
	 position: absolute;
	 top: calc(50% - 10%);
	 left: 50%;
	 -webkit-transform: translate(-50%, -50%);
	 width: 65%;
	 z-index: 5;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-title {
	 color: #000;
	 font-size: 1.7em;
	 text-align: center;
}
 .form-structor .login .center .form-title span {
	 color: rgba(0, 0, 0, 0.4);
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-holder {
	 border-radius: 15px;
	 background-color: #fff;
	 border: 1px solid #eee;
	 overflow: hidden;
	 margin-top: 50px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .form-holder .input {
	 border: 0;
	 outline: none;
	 box-shadow: none;
	 display: block;
	 height: 30px;
	 line-height: 30px;
	 padding: 8px 15px;
	 border-bottom: 1px solid #eee;
	 width: 100%;
	 font-size: 12px;
}
 .form-structor .login .center .form-holder .input:last-child {
	 border-bottom: 0;
}
 .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
	 color: rgba(0, 0, 0, 0.4);
}
 .form-structor .login .center .submit-btn {
	 background-color: #6b92a4;
	 color: rgba(256, 256, 256, 0.7);
	 border: 0;
	 border-radius: 15px;
	 display: block;
	 margin: 15px auto;
	 padding: 15px 45px;
	 width: 100%;
	 font-size: 13px;
	 font-weight: bold;
	 cursor: pointer;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login .center .submit-btn:hover {
	 transition: all 0.3s ease;
	 background-color: rgba(0, 0, 0, 0.8);
}
 .form-structor .login.slide-up {
	 top: 90%;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .center {
	 top: 10%;
	 -webkit-transform: translate(-50%, 0%);
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-holder, .form-structor .login.slide-up .submit-btn {
	 opacity: 0;
	 visibility: hidden;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-title {
	 font-size: 1em;
	 margin: 0;
	 padding: 0;
	 cursor: pointer;
	 -webkit-transition: all 0.3s ease;
}
 .form-structor .login.slide-up .form-title span {
	 margin-right: 5px;
	 opacity: 1;
	 visibility: visible;
	 -webkit-transition: all 0.3s ease;
}
 
    </style>
</head>
<body>
<div class="form-structor">
  <div class="signup">
    <h2 class="form-title" id="signup">RKA DEL</h2>
  </div>
  <div class="login slide-up">
    <div class="center">
      <h2 class="form-title" id="login">SIGN IN</h2>
      <form action="/login/auth" method="POST">
        @csrf
      <div class="form-holder">
        <input type="text" id="username" name="usernasmeLogin" class="input" placeholder="Username" />
        <input type="password" id="password" name="passwordLogin" class="input" placeholder="Password" />
      </div>
      <button class="submit-btn">Log in</button>
    </div>
  </div>
</div>
</body>

<script>
console.clear();

const loginBtn = document.getElementById('login');
const signupBtn = document.getElementById('signup');

loginBtn.addEventListener('click', (e) => {
  let parent = e.target.parentNode.parentNode;
  Array.from(e.target.parentNode.parentNode.classList).find((element) => {
    if(element !== "slide-up") {
      parent.classList.add('slide-up')
    }else{
      signupBtn.parentNode.classList.add('slide-up')
      parent.classList.remove('slide-up')
    }
  });
});

signupBtn.addEventListener('click', (e) => {
  let parent = e.target.parentNode;
  Array.from(e.target.parentNode.classList).find((element) => {
    if(element !== "slide-up") {
      parent.classList.add('slide-up')
    }else{
      loginBtn.parentNode.parentNode.classList.add('slide-up')
      parent.classList.remove('slide-up')
    }
  });
});
    </script>
</html>
