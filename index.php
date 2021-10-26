<html>
    <head>
        <title>Login-Form</title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 </head>
 <body>
     <nav>

<header>
    
    <div class="jumbotron">
        <div class="container"></div>
        <h1 class="display-4 text-right">Login-Form</h1>
        </div>
</header>
</body>

<div class="row" style="margin-top: 6%;">
    <div class="col-4 border border-dark m-auto p-3">
            <form action="" method="post" id="login">
                <div class="form-group row">
                    <label for="Email" class="col-form-label ml-4">Email</label>
                    <div class="col">
                        <input type="email" class="form-control" id="Email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-form-label">Password</label>
                  <div class="col">
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                  </div>
                </div>


                <button class="btn btn-primary p-2 mt-3" type="submit">Submit form</button>

        </form>
    </div>
</div>

<script type="text/javascript">

$("#login").on("submit",function(e){
    e.preventDefault();
    var emailid = document.getElementById('Email').value;
    var pass = document.getElementById('Password').value

    if(emailid.length == 0){
        document.getElementById('Email').style.border = "2px solid red";

    }
    if(pass.length ==0){
        document.getElementById('Password').style.border = "2px solid red";
    }

    else{
        $.ajax({
            url : "validate.php" ,
            method:"Post",
            data: $("#login").serialize(),
            success:function(html){
                console.log(html);
            }

        });
    }
});
</script>
</body>

 </html>