<form action="loginCliente.php" method="post" name="login_form">
    <h1 class="mb-3 text-center">Accedi</h1>

    <div class="form-floating">
      <input type="email" name="email" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="email" placeholder="info@esempiomail.com">
      <label for="email"><i class="bi bi-person me-2"></i>Email o Username</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 shadow-none <?php if(isset($_GET["error"])){ echo "is-invalid";}?>" id="password" placeholder="password">
      <label for="password"><i class="bi bi-lock me-2"></i>Password</label>
      <div class="invalid-feedback mb-1">
          <p>Credenziali Errate, riprovare!</p>
      </div>
    </div>

    <input type="submit" class="w-100 btn btn-success p-3 mb-0 rounded-pill mt-3" value="Accedi" onclick="formhash(this.form, this.form.password)"/>
    <div class="supporto">
        <a class="me-3" href="index.php">Torna alla Homepage</a>
        <a href="registration.php">Registrati</a>
    </div>
</form>
