<div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/logo.png" alt="" alt="" width="180" height="120">
    <h2 class="mb-5">Checkout</h2>
    <nav class="nav justify-content-center mb-5" aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-dots mb-0">
			<li class="breadcrumb-item"><a href="index.php">Home</a></li>
			<li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
			<li class="breadcrumb-item"><a href="cart.php">Carrello</a></li>
			<li class="breadcrumb-item active" aria-current="page">Checkout</li>
		</ol>
	</nav>
</div>

<div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="titCarr">Il tuo carrello</span>
            <span class="badge rounded-0 pt-2 numProd">3</span>
        </h4>
        <ul class="list-group mb-3 rounded-0">
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">€ 12,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">Second product</h6>
                    <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">€ 8,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <h6 class="my-0">Third item</h6>
                    <small class="text-muted">Brief description</small>
                </div>
                <span class="text-muted">€ 5,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success fw-bold">
                    <h6 class="my-0 fw-bold">Codice Sconto</h6>
                    <small>EXAMPLECODE</small>
                </div>
                <span class="text-success fw-bold"> - € 5,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span>Totale</span>
                <strong>€ 20,00</strong>
            </li>
        </ul>

        <form class="card p-4 rounded-0">
          <div class="input-group">
            <input type="text" class="form-control rounded-0 shadow-none" placeholder="Codice Sconto">
            <button type="submit" class="btn btn-secondary rounded-0 border-0 buttSconto">Applica</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dati di Fatturazione</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="firstName" placeholder="Lorenzo" value="" required>
              <div class="invalid-feedback">
                <p>Il campo nome è obbligatorio</p>
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Cognome <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="lastName" placeholder="Rossi" value="" required>
              <div class="invalid-feedback">
                <p>Il cognome è obbligatorio</p>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="email" placeholder="esempio@mail.com">
              <div class="invalid-feedback">
                <p>Inserire un indirizzo email valido</p>
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Indirizzo <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="address" placeholder="Via dell'Università, 50" required>
              <div class="invalid-feedback">
                <p>Inserire un indirizzo valido</p>
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Secondo Indirizzo <span class="text-muted">( Opzionale )</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="address2" placeholder="Appartamento o Interno">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Regione <span class="text-danger">*</span></label>
              <select class="form-select shadow-none rounded-0" id="country" required>
                <option value="">Seleziona una regione</option>
                <option>Emilia Romagna</option>
                <option>Lombardia</option>
                <option>Piemonte</option>
                <option>Toscana</option>
                <option>Marche</option>
              </select>
              <div class="invalid-feedback">
                <p>Selezionare una regione valida</p>
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Provincia <span class="text-danger">*</span></label>
              <select class="form-select shadow-none rounded-0" id="state" required>
                <option value="">Seleziona</option>
                <option>Forlì - Cesena</option>
                <option>Roma</option>
                <option>Napoli</option>
                <option>Rimini</option>
                <option>Ravenna</option>
              </select>
              <div class="invalid-feedback">
                <p>Selezionare una provincia valida</p>
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Codice Postale <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="zip" placeholder="47042" required>
              <div class="invalid-feedback">
                <p>Il codice postale non è valido</p>
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input rounded-0" id="same-address" checked>
            <label class="form-check-label" for="same-address">Indirizzo di spedizione ugale all'indirizzo di fatturazione</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input rounded-0" id="save-info">
            <label class="form-check-label" for="save-info">Salva le informazioni per la prossima volta</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Carta di Credito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Carta di Debito / Bancomant</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nome sulla Carta <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-name" placeholder="Lorenzo Rossi" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero Carta <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-number" placeholder="4242 4242 4242 4242" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Scadenza <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-expiration" placeholder="11 / 22" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV <span class="text-danger">*</span></label>
              <input type="text" class="form-control border-top-0 border-start-0 border-end-0 shadow-none rounded-0" id="cc-cvv" placeholder="123" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg buttPag border-0" type="submit">Effettua il Pagamento</button>
        </form>
      </div>
    </div>
</div>