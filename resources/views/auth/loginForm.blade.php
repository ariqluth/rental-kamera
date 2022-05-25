<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
   
</head>
<body>
   <section>
       <div class="imgBx">
              <img src="{{asset('images/sample.png')}}" alt="">
       </div>
       <div class="contentBx">
            <div class="formBx">
                    <h2>Login</h2>
                    <form>
                        <div class="inputBx">
                            <span>Email</span>
                            <input type="text" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" name="email" id="email" placeholder="Enter your email">
                        </div>
                        <div class="remember">
                            <label><input type="checkbox" value="Login" name=""> </label>
                        </div>
                        <div class="inputBx">
                            <input type="submit" value="Login" name="">
                        </div>

                        <div class="inputBx">
                            <input type="submit2" value="Login With Google" name="">
                        </div>

                        <div class="inputBx">
                            <p>Don't have an account ? <a href="#">Sign Up</a> </p>
                        </div>
                    </form>
            </div>
       </div>
   </section>
</body>
</html>