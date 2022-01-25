<!--Contenuto Centrale -->
<div class="col-lg-12 mb-4 mb-sm-0">
	<div class="card card-body p-4 shadow">

        <p class="content-text pt-4 pb-4">
            Per rintracciare il tuo ordine inserisci l'ID dell'ordine nel campo sottostante e l'email utilizzata
            per la fatturazione.Dopo di che premi il bottone sottostante "Rintraccia Ordine".
            Ti sarà mostrata la ricevuta e l'email di conferma che avresti dovuto ricevere.
        </p>

        <form action="ordineStato.php" method="post" class="row g-3 mt-0">

            <!-- ID Ordine -->
            <div class="row">
                <div class="col bg-light-input">
                    <label for="codice" class="form-label">ID Ordine *</label>
                    <input type="text" class="form-control shadown-none" id="codice" name="codice" placeholder="ID Ordine">
                </div>
            </diV>

            <!-- Email -->
            <div class="row pt-4">
			    <div class="col bg-light-input">
				    <label for="email" class="form-label">Indirizzo Email di Fatturazione *</label>
				    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
			    </div>
            </div>

            <div class="row pt-4 button-tracking">
                <button type="submit" name="getStatus" id="getStatus" class="btn btn-success p-3 mb-0 rounded-pill">Rintraccia Ordine</button>
            </div>

        </form>

    </div>
</div>
