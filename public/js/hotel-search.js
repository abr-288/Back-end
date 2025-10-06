// Gestionnaire d'événements pour le chargement du document
document.addEventListener('DOMContentLoaded', function() {
    // Initialisation des composants
    initHotelSearch();
    
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

// Fonction d'initialisation de la recherche d'hôtels
function initHotelSearch() {
    // Initialisation des sélecteurs de date
    initDatePickers();
    
    // Initialisation des compteurs de voyageurs
    initPassengerCounters();
    
    // Gestion du clic sur le bouton de recherche
    const searchForm = document.querySelector('.hotel-search-form');
    if (searchForm) {
        searchForm.addEventListener('submit', validateForm);
    }
}

// Initialisation des sélecteurs de date
function initDatePickers() {
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    
    const formatDate = (date) => {
        return date.toISOString().split('T')[0];
    };
    
    const checkInInput = document.querySelector('input[name="check_in"]');
    const checkOutInput = document.querySelector('input[name="check_out"]');
    
    if (checkInInput) {
        checkInInput.setAttribute('min', formatDate(today));
        if (!checkInInput.value) {
            checkInInput.value = formatDate(today);
        }
        
        checkInInput.addEventListener('change', function() {
            if (checkOutInput) {
                checkOutInput.setAttribute('min', this.value);
                if (checkOutInput.value && checkOutInput.value < this.value) {
                    checkOutInput.value = this.value;
                }
            }
        });
    }
    
    if (checkOutInput) {
        checkOutInput.setAttribute('min', formatDate(tomorrow));
        if (!checkOutInput.value) {
            checkOutInput.value = formatDate(tomorrow);
        }
    }
}

// Initialisation des compteurs de voyageurs
function initPassengerCounters() {
    const roomCounter = document.getElementById('roomCount');
    const adultCounter = document.getElementById('adultCount');
    const childCounter = document.getElementById('childCount');
    
    // Gestion des boutons d'incrémentation/décrémentation
    document.querySelectorAll('.counter-btn').forEach(button => {
        button.addEventListener('click', function() {
            const target = this.dataset.target;
            const action = this.dataset.action;
            updateCounter(target, action);
            updatePassengerSummary();
        });
    });
    
    // Mise à jour initiale du résumé
    updatePassengerSummary();
}

// Mise à jour d'un compteur
function updateCounter(target, action) {
    const input = document.getElementById(target);
    if (!input) return;
    
    let value = parseInt(input.value) || 0;
    const min = parseInt(input.getAttribute('min')) || 0;
    const max = parseInt(input.getAttribute('max')) || 20;
    
    if (action === 'increment' && value < max) {
        value++;
    } else if (action === 'decrement' && value > min) {
        value--;
    }
    
    input.value = value;
    
    // Validation supplémentaire pour le nombre d'adultes (au moins 1 par chambre)
    if (target === 'roomCount') {
        const adults = parseInt(document.getElementById('adultCount').value) || 0;
        if (value > adults) {
            document.getElementById('adultCount').value = value;
        }
    } else if (target === 'adultCount') {
        const rooms = parseInt(document.getElementById('roomCount').value) || 1;
        if (value < rooms) {
            value = rooms;
            input.value = value;
        }
    }
}

// Mise à jour du résumé des voyageurs
function updatePassengerSummary() {
    const rooms = parseInt(document.getElementById('roomCount').value) || 1;
    const adults = parseInt(document.getElementById('adultCount').value) || 1;
    const children = parseInt(document.getElementById('childCount').value) || 0;
    
    let summary = [];
    
    summary.push(`${rooms} ${rooms > 1 ? 'Chambres' : 'Chambre'}`);
    summary.push(`${adults} ${adults > 1 ? 'Adultes' : 'Adulte'}`);
    
    if (children > 0) {
        summary.push(`${children} ${children > 1 ? 'Enfants' : 'Enfant'}`);
    }
    
    const passengerSummary = document.getElementById('passengerSummary');
    if (passengerSummary) {
        passengerSummary.textContent = summary.join(' • ');
    }
}

// Validation du formulaire
function validateForm(e) {
    e.preventDefault();
    
    const checkInInput = document.querySelector('input[name="check_in"]');
    const checkOutInput = document.querySelector('input[name="check_out"]');
    
    // Vérification des dates
    if (checkInInput && checkOutInput) {
        const checkIn = new Date(checkInInput.value);
        const checkOut = new Date(checkOutInput.value);
        
        if (checkOut <= checkIn) {
            showAlert('La date de sortie doit être postérieure à la date d\'arrivée.');
            return false;
        }
    }
    
    // Si tout est valide, on peut soumettre le formulaire
    console.log('Formulaire soumis avec succès');
    // this.submit(); // Décommentez cette ligne pour activer la soumission du formulaire
    return true;
}

// Affichage des messages d'alerte
function showAlert(message, type = 'error') {
    // Supprimer les alertes existantes
    const existingAlerts = document.querySelectorAll('.alert-message');
    existingAlerts.forEach(alert => alert.remove());
    
    // Créer une nouvelle alerte
    const alertDiv = document.createElement('div');
    alertDiv.className = `alert alert-${type} alert-message position-fixed top-20 end-0 m-3`;
    alertDiv.style.zIndex = '1050';
    alertDiv.style.maxWidth = '400px';
    alertDiv.role = 'alert';
    
    alertDiv.innerHTML = `
        <div class="d-flex align-items-center">
            <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : 'check-circle'} me-2"></i>
            <div>${message}</div>
            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;
    
    // Ajouter l'alerte au document
    document.body.appendChild(alertDiv);
    
    // Supprimer l'alerte après 5 secondes
    setTimeout(() => {
        alertDiv.classList.add('fade');
        setTimeout(() => alertDiv.remove(), 150);
    }, 5000);
}
