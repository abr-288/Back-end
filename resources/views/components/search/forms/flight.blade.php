<form action="{{ route('flight.search') }}" method="GET" class="search-form">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <div class="form-group">
                <label for="from" class="form-label">Ville de départ</label>
                <input type="text" 
                       class="form-control" 
                       id="from" 
                       name="from" 
                       placeholder="D'où partez-vous ?" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="to" class="form-label">Destination</label>
                <input type="text" 
                       class="form-control" 
                       id="to" 
                       name="to" 
                       placeholder="Où allez-vous ?" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="departure_date" class="form-label">Date de départ</label>
                <input type="date" 
                       class="form-control" 
                       id="departure_date" 
                       name="departure_date" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="passengers" class="form-label">Passagers</label>
                <select class="form-select" id="passengers" name="passengers" aria-label="Nombre de passagers">
                    <option value="1">1 Voyageur</option>
                    <option value="2">2 Voyageurs</option>
                    <option value="3">3 Voyageurs</option>
                    <option value="4">4 Voyageurs</option>
                    <option value="5">5 Voyageurs</option>
                </select>
            </div>
        </div>
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-search me-2" aria-hidden="true"></i>Rechercher
            </button>
        </div>
    </div>
</form>
