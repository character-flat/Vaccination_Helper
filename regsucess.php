
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #9f9da7;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    .loginbutton {
        background: #2C3E50;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 15px 0;
        font-size: 20px;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
        width: 200px;
        }
    </style>
    <body>
     <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">&#10003;</i>
      </div>
        <h1>Success</h1> 
        <p>You Have Successfully Registered.<br/> Now you can login.</p>
        <button class="loginbutton" onclick="window.location.href='login.php';">Login</button>
      </div>
    </body>
</html>