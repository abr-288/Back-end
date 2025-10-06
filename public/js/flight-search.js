// Gestionnaire d'événements pour le chargement du document
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des composants
    initFlightSearch();
    
    // Initialisation de Select2 pour les menus déroulants
    if (typeof $ !== 'undefined' && $.fn.select2) {
        $('select').select2({
            theme: 'bootstrap-5',
            width: '100%',
            dropdownAutoWidth: true,
            minimumResultsForSearch: 3
        });
    }
});

// Fonction d'initialisation de la recherche de vols
function initFlightSearch() {
    // Éléments du DOM
    const oneWayRadio = document.getElementById('oneway');
    const roundTripRadio = document.getElementById('roundtrip');
    const returnDateContainer = document.getElementById('returnDateContainer');
    const swapBtn = document.getElementById('swapCity');
    const searchForm = document.querySelector('form');
    
    // Initialisation de l'état du formulaire
    updateTripType(oneWayRadio.checked ? 'oneway' : 'roundtrip');
    
    // Écouteurs d'événements
    oneWayRadio.addEventListener('change', () => updateTripType('oneway'));
    roundTripRadio.addEventListener('change', () => updateTripType('roundtrip'));
    
    if (swapBtn) {
        swapBtn.addEventListener('click', swapCities);
    }
    
    // Initialisation des gestionnaires de compteurs de passagers
    initPassengerCounters();
    
    // Initialisation de la date minimale (aujourd'hui)
    initDatePickers();
    
    // Validation du formulaire
    if (searchForm) {
        searchForm.addEventListener('submit', validateForm);
    }
}

// Gestion du type de voyage (aller simple/aller-retour)
function updateTripType(type) {
    const returnDateContainer = document.getElementById('returnDateContainer');
    const returnDateInput = document.querySelector('input[name="return_date"]');
    
    if (type === 'oneway') {
        returnDateContainer.style.display = 'none';
        returnDateInput.removeAttribute('required');
    } else {
        returnDateContainer.style.display = 'block';
        returnDateInput.setAttribute('required', 'required');
    }
    
    // Mise à jour des classes actives
    document.querySelectorAll('.trip-type-tab').forEach(tab => {
        tab.classList.toggle('active', tab.dataset.type === type);
    });
}

// Échange des villes de départ et d'arrivée
function swapCities() {
    const fromSelect = document.querySelector('select[name="from"]');
    const toSelect = document.querySelector('select[name="to"]');
    
    if (fromSelect && toSelect) {
        const tempValue = fromSelect.value;
        fromSelect.value = toSelect.value;
        toSelect.value = tempValue;
        
        // Mise à jour de Select2 si présent
        if (typeof $ !== 'undefined' && $.fn.select2) {
            $(fromSelect).trigger('change');
            $(toSelect).trigger('change');
        }
        
        // Animation du bouton
        this.classList.add('swap-animation');
        setTimeout(() => this.classList.remove('swap-animation'), 500);
    }
}

// Initialisation des compteurs de passagers
function initPassengerCounters() {
    const passengerTypes = ['adult', 'children', 'infant'];
    
    passengerTypes.forEach(type => {
        const capitalize = str => str.charAt(0).toUpperCase() + str.slice(1);
        const incrementBtn = document.getElementById(`increment${capitalize(type)}s`);
        const decrementBtn = document.getElementById(`decrement${capitalize(type)}s`);
        const countInput = document.getElementById(`${type}Count`);
        
        if (incrementBtn && decrementBtn && countInput) {
            incrementBtn.addEventListener('click', () => updatePassengerCount(type, 1));
            decrementBtn.addEventListener('click', () => updatePassengerCount(type, -1));
        }
    });
    
    // Mise à jour initiale du résumé
    updatePassengerSummary();
    
    // Mise à jour du résumé lors du changement de classe
    const cabinClassSelect = document.querySelector('select[name="cabin_class"]');
    if (cabinClassSelect) {
        cabinClassSelect.addEventListener('change', updatePassengerSummary);
    }
}

// Mise à jour du compteur de passagers
function updatePassengerCount(type, delta) {
    const input = document.getElementById(`${type}Count`);
    const currentValue = parseInt(input.value);
    const min = parseInt(input.getAttribute('min')) || 0;
    const max = parseInt(input.getAttribute('max')) || 9;
    
    // Validation spéciale pour les adultes (au moins 1)
    if (type === 'adult' && currentValue + delta < 1) {
        return;
    }
    
    // Validation du nombre total de passagers
    const totalPassengers = calculateTotalPassengers();
    if (delta > 0 && totalPassengers >= 9) {
        showAlert('Le nombre maximum de passagers est de 9.');
        return;
    }
    
    // Validation pour les bébés (ne peuvent pas dépasser le nombre d'adultes)
    if (type === 'infant') {
        const adults = parseInt(document.getElementById('adultCount').value);
        if (delta > 0 && currentValue >= adults) {
            showAlert('Le nombre de bébés ne peut pas dépasser le nombre d\'adultes.');
            return;
        }
    }
    
    // Mise à jour de la valeur
    const newValue = currentValue + delta;
    if (newValue >= min && newValue <= max) {
        input.value = newValue;
        updatePassengerSummary();
    }
}

// Calcul du nombre total de passagers
function calculateTotalPassengers() {
    return ['adult', 'children', 'infant'].reduce((total, type) => {
        const input = document.getElementById(`${type}Count`);
        return total + (input ? parseInt(input.value) : 0);
    }, 0);
}

// Mise à jour du résumé des passagers
function updatePassengerSummary() {
    const adults = parseInt(document.getElementById('adultCount').value);
    const children = parseInt(document.getElementById('childrenCount').value);
    const infants = parseInt(document.getElementById('infantCount').value);
    const cabinClass = document.querySelector('select[name="cabin_class"]');
    const cabinClassText = cabinClass ? cabinClass.options[cabinClass.selectedIndex].text : 'Économique';
    
    const summary = [];
    
    if (adults > 0) {
        summary.push(`${adults} Adulte${adults > 1 ? 's' : ''}`);
    }
    
    if (children > 0) {
        summary.push(`${children} Enfant${children > 1 ? 's' : ''}`);
    }
    
    if (infants > 0) {
        summary.push(`${infants} Bébé${infants > 1 ? 's' : ''}`);
    }
    
    const passengerSummary = document.getElementById('passengerSummary');
    if (passengerSummary) {
        passengerSummary.textContent = `${summary.join(', ')}, ${cabinClassText}`;
    }
}

// Initialisation des sélecteurs de date
function initDatePickers() {
    const today = new Date().toISOString().split('T')[0];
    const departureInput = document.querySelector('input[name="departure_date"]');
    const returnInput = document.querySelector('input[name="return_date"]');
    
    if (departureInput) {
        departureInput.setAttribute('min', today);
        
        // Si la date de départ est antérieure à aujourd'hui, on la met à jour
        if (departureInput.value && departureInput.value < today) {
            departureInput.value = today;
        } else if (!departureInput.value) {
            departureInput.value = today;
        }
        
        // Mise à jour de la date de retour minimale lors du changement de date de départ
        departureInput.addEventListener('change', function() {
            if (returnInput) {
                returnInput.setAttribute('min', this.value);
                if (returnInput.value && returnInput.value < this.value) {
                    returnInput.value = this.value;
                }
            }
        });
    }
    
    if (returnInput) {
        // Si la date de retour est antérieure à aujourd'hui, on la met à jour
        if (returnInput.value && returnInput.value < today) {
            returnInput.value = today;
        }
    }
}

// Validation du formulaire
function validateForm(e) {
    const tripType = document.querySelector('input[name="trip_type"]:checked').value;
    const departureDate = document.querySelector('input[name="departure_date"]');
    const returnDate = document.querySelector('input[name="return_date"]');
    const adults = parseInt(document.getElementById('adultCount').value);
    const children = parseInt(document.getElementById('childrenCount').value);
    const infants = parseInt(document.getElementById('infantCount').value);
    
    // Validation de la date de retour pour les allers-retours
    if (tripType === 'roundtrip' && returnDate && departureDate) {
        if (new Date(returnDate.value) <= new Date(departureDate.value)) {
            e.preventDefault();
            showAlert('La date de retour doit être postérieure à la date d\'aller.');
            return false;
        }
    }
    
    // Validation du nombre d'adultes
    if (adults < 1) {
        e.preventDefault();
        showAlert('Il doit y avoir au moins un adulte dans la réservation.');
        return false;
    }
    
    // Validation du nombre de bébés par rapport aux adultes
    if (infants > adults) {
        e.preventDefault();
        showAlert('Le nombre de bébés ne peut pas dépasser le nombre d\'adultes.');
        return false;
    }
    
    // Vérification qu'il y a au moins un passager (adulte ou enfant)
    if (adults + children === 0) {
        e.preventDefault();
        showAlert('Vous devez sélectionner au moins un adulte ou un enfant.');
        return false;
    }
    
    // Si tout est valide, le formulaire sera soumis
    // Dans une application réelle, on pourrait ajouter ici une requête AJAX
    // pour récupérer les vols sans recharger la page
    return true;
}

// Affichage des messages d'alerte
function showAlert(message, type = 'error') {
    // Suppression des anciennes alertes
    const existingAlert = document.querySelector('.alert-message');
    if (existingAlert) {
        existingAlert.remove();
    }
    
    // Création de l'alerte
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type === 'error' ? 'danger' : 'success'} alert-dismissible fade show alert-message`;
    alertDiv.role = 'alert';
    alertDiv.style.position = 'fixed';
    alertDiv.style.top = '20px';
    alertDiv.style.right = '20px';
    alertDiv.style.zIndex = '1060';
    alertDiv.style.minWidth = '300px';
    alertDiv.style.maxWidth = '90%';
    alertDiv.style.boxShadow = '0 0.5rem 1rem rgba(0, 0, 0, 0.15)';
    
    alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    `;
    
    // Ajout de l'alerte au DOM
    document.body.appendChild(alertDiv);
    
    // Fermeture automatique après 5 secondes
    setTimeout(() => {
        if (alertDiv.parentNode) {
            const bsAlert = new bootstrap.Alert(alertDiv);
            bsAlert.close();
        }
    }, 5000);
}
