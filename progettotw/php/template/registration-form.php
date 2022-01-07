<form id="registrazioneForm" action="#">
    <h1 class="h3 mb-3 fw-normal text-center">Registrazione</h1>

    <div class="form-floating">
        <input type="text" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="nome" placeholder="Lorenzo" required>
        <label for="nome"><i class="bi bi-person me-2"></i>Nome*</label>
        <div class="invalid-feedback mb-1">
            <p>Il campo nome non può essere vuoto</p>
        </div>
    </div>
    <div class="form-floating">
        <input type="text" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="cognome" placeholder="Rossi" required>
        <label for="cognome"><i class="bi bi-person me-2"></i>Cognome*</label>
        <div class="invalid-feedback mb-1">
            <p>Il campo cognome non può essere vuoto</p>
        </div>
    </div>
    <div class="form-floating">
        <input type="text" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="cf" placeholder="Codice Fiscale">
        <label for="cf"><i class="bi bi-card-text me-2"></i></i>Codice Fiscale</label>
        <div class="invalid-feedback mb-1">
            <p>Il codice fiscale inserito non è valido</p>
        </div>
    </div>
    <div class="form-floating">
        <input type="tel" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="telefono" placeholder="info@esempiomail.com">
        <label for="telefono"><i class="bi bi-phone me-2"></i></i>Telefono / Cellulare</label>
        <div class="invalid-feedback mb-1">
            <p>Il numero di telefono non è valido</p>
        </div>
    </div>
    <div class="form-floating">
        <input type="email" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-2 shadow-none" id="email" placeholder="lorenzo.rossi@esempio.com">
        <label for="email"><i class="bi bi-at me-2"></i>Email*</label>
        <div class="invalid-feedback mb-1">
            <p>L'email inserita non è valida</p>
        </div>
    </div>
    <div class="form-floating">
        <input type="password" class="rounded-0 form-control border-top-0 border-start-0 border-end-0 mb-3 shadow-none" id="password" placeholder="password" required>
        <label for="password"><i class="bi bi-lock me-2"></i>Password*</label>
        <div class="invalid-feedback mb-1">
            <p>Password non valida</p>
            <p>Deve essere composta da : </p>
            <ul>
                <li><p>Almeno 8 caratteri</p></li>
                <li><p>Un carattere maiuscolo</p></li>
                <li><p>Un numero</p></li>
                <li><p>Un carattere speciale</p></li>
            </ul>
        </div>
    </div>

    <div class="allertNotification ">

    </div>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Ricordami
        </label>
    </div>

    <button class="w-100 btn btn-lg buttLog" type="submit" id="registrati" onClick="funtion.js">Registrati</button>
    <div class="supporto">
        <a href="index.php">Torna alla Homepage</a>
    </div>
</form>