<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#password, #confirm_password").on("keyup", function() {
                var password = $("#password").val();
                var confirm_password = $("#confirm_password").val();

                if (password === confirm_password) {
                    $("#message").html("").css("color", "green");
                    $("#submitBtn").prop("disabled", false);
                } else {
                    $("#message").html("Password tidak sama").css("color", "red");
                    $("#submitBtn").prop("disabled", true);
                }
            });

            $("#password").on("keyup", function() {
                var password = $(this).val();

                if (password.length < 8) {
                    $("#password-message").html("Password minimal 8 Karakter").css("color", "red");
                    $("#submitBtn").prop("disabled", true);
                } else {
                    $("#password-message").html("");
                }
            });
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
    body {
      background-image: url('bg4.webp');
      background-size: 130%;

    }
    .card {
      background-color: rgba(255, 255, 255, 0.8);
      border: 20px solid white;
    }
    
    label {
      display: inline-block;
      width: 150px;
      text-align: left;
      margin-right: 897px;
      padding-bottom: -40px;
    }
    input[type="email"],
    input[type="text"],
    input[type="password"] {
      margin-bottom: 30px;
    }
    </style>
</head>
<body style="background-image:url('foto/bglogin.jpg'); background-repeat: no-repeat;background-size: 150%;">
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-1 shadow-lg p-3 mb-5" style="border-radius: 15px;">
              <div class="card-body" style="text-align: center;">
                <h1 style="color:black; font-weight: bold ;">REGISTER</h1>
                <p style="font-size: 15px; color: rgba(0, 0, 0, 0.655)">Masukkan Data dibawah ini:</p>
                <!-- <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"> -->
                <form action="adduser.php" method="post">
                <!-- <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                -->
                </svg>
                    <label for="username">Username</label>
                    <input type="email" name="username" id="username" class="form-control my-4 py-2" style="border-radius: 8px; padding-left: 20px;" placeholder="Username" />
                    <br>
                    <label for="phone">No Handphone</label>
                    <input type="text" name="phone" id="phone" class="form-control my-4 py-2" style="border-radius: 8px; padding-left: 20px;" placeholder="0888-8888-8888" />
                    <br>
                    <label for="password">Password</label>
                    <p><input type="password" name="password" id="password"  required class="form-control my-4 py-2" style="border-radius: 8px; padding-left: 20px;" placeholder="Password" /></p>
                    <span id="password-message"></span>
                    <br>
                    <label for="confirm_password">Konfirmasi Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required class="form-control my-4 py-2" style="border-radius: 8px; padding-left: 20px;" placeholder="Konfirmasi Password" />
                    <div class="text-center mt-3">
                    <span id="message"></span><br><br>
                    <button id="submitBtn" class="btn btn-primary" style="border-radius: 15px; padding-left: 170px; padding-right: 170px; font-weight: bolder; background-color: black;" disabled>Daftar</button>
                    
                    </form>
                  </div> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
