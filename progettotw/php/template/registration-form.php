<form class="" action="registration.php" method="post">
    <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
    <script type="text/javascript">
      $(document).ready(function(){
        $("div.admin").hide();
        $("input#floatingCompanyName, input#floatingPIVA").hide();

        $("input#adm").click(function(){
          $("div.admin").show();
          $("div.user").hide();
          $("input#adm, label#adm").hide();
        });

        $("input#pf").click(function(){
          $("input#floatingName, input#floatingSurname, input#floatingCF").show();
          $("input#floatingCompanyName, input#floatingPIVA").hide();
        });
        $("input#pg").click(function(){
            $("input#floatingName, input#floatingSurname, input#floatingCF").hide();
            $("input#floatingCompanyName, input#floatingPIVA").show();
          });
        });
    </script>
    <div class=" mb-3">
        <label id="adm">
            <input type="radio" id="adm" name ="signup" value="Administrator"> Administrator
        </label>
    </div>
<div class="admin">
  <div class=" mb-3">
      <label>
          <input type="radio" id="pf" name ="persona" value="persona-fisica"> Persona Fisica
      </label>
      <label>
          <input type="radio" id="pg" name ="persona" value="persona-giuridica"> Persona Giuridica
      </label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingName" placeholder="mario">
    <label for="floatingName">Name</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingSurname" placeholder="rossi" >
    <label for="floatingSurname">Surname</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingCompanyName" placeholder="myCompany" >
    <label for="floatingSurname">Company Name</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingCF" placeholder="your CF">
    <label for="floatingCF">CF</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingPIVA" placeholder="your P.IVA">
    <label for="floatingCF">P.IVA</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingEmail" placeholder="info@mail.com" >
    <label for="floatingEmail">Email</label>
  </div>

  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="password" >
    <label for="floatingPassword">Password</label>
  </div>

  <div class="form-floating">
    <input type="tel" class="form-control" id="floatingPhone" placeholder="your phone">
    <label for="floatingPhone">Phone</label>
  </div>

  <div class="checkbox mb-3">
      <label>
          <input type="checkbox" value="remember-me"> Remember me
      </label>
  </div>

  <button class="w-100 btn btn-lg buttLog" type="submit">Sign Up</button>
  <div class="supporto">
      <a href="registration.php">Sign Up as a User</a><br/>
      <a href="index.php">Go to Homepage</a>
  </div>
</div>

<div class="user">
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingName" placeholder="mario" >
    <label for="floatingName">Name</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="floatingSurname" placeholder="rossi" >
    <label for="floatingSurname">Surname</label>
  </div>

  <div class="form-floating">
    <input type="text" class="form-control" id="floatingCF" placeholder="your CF">
    <label for="floatingCF">CF</label>
  </div>

  <div class="form-floating">
    <input type="text" class="form-control" id="floatingEmail" placeholder="info@mail.com" >
    <label for="floatingEmail">Email</label>
  </div>

  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="password" >
    <label for="floatingPassword">Password</label>
  </div>

  <div class="form-floating">
    <input type="tel" class="form-control" id="floatingPhone" placeholder="your phone">
    <label for="floatingPhone">Phone</label>
  </div>

  <div class="checkbox mb-3">
      <label>
          <input type="checkbox" value="remember-me"> Remember me
      </label>
  </div>

  <button class="w-100 btn btn-lg buttLog" type="submit">Sign Up</button>
  <div class="supporto">
      <a href="index.php">Go to Homepage</a>
  </div>
</div>
</form>
