<form action="{{ route('hotel.search') }}" method="GET" class="search-form">
    @csrf
    <div class="row g-3">
        <div class="col-md-4">
            <div class="form-group">
                <label for="destination" class="form-label">Destination</label>
                <input type="text" 
                       class="form-control" 
                       id="destination" 
                       name="destination" 
                       placeholder="Où allez-vous ?" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="check_in" class="form-label">Date d'arrivée</label>
                <input type="date" 
                       class="form-control" 
                       id="check_in" 
                       name="check_in" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="check_out" class="form-label">Date de départ</label>
                <input type="date" 
                       class="form-control" 
                       id="check_out" 
                       name="check_out" 
                       required
                       aria-required="true">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="guests" class="form-label">Voyageurs</label>
                <select class="form-select" id="guests" name="guests" aria-label="Nombre de voyageurs">
                    <option value="1">1 Adulte</option>
                    <option value="2">2 Adultes</option>
                    <option value="3">3 Adultes</option>
                    <option value="4">4 Adultes</option>
                </select>
            </div>
        </div>
        <div class="col-12 text-center mt-3">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-search me-2" aria-hidden="true"></i>Rechercher un hôtel
            </button>
        </div>
    </div>
</form>
