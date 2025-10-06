// Gestionnaire d'images avec fallback
document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour gérer les erreurs de chargement d'image
    function handleImageError(img) {
        // Si l'image a un attribut data-src, on essaie de le charger
        if (img.dataset.src) {
            const fallbackImg = new Image();
            fallbackImg.onload = function() {
                img.src = this.src;
                img.classList.add('loaded');
            };
            fallbackImg.onerror = function() {
                setDefaultImage(img);
            };
            fallbackImg.src = img.dataset.src;
        } else {
            setDefaultImage(img);
        }
    }

    // Fonction pour définir une image par défaut
    function setDefaultImage(img) {
        // Vérifier si l'image est dans une carte de destination
        const isDestinationCard = img.closest('.destination-card');
        
        if (isDestinationCard) {
            // Créer un conteneur pour le texte de remplacement
            const container = document.createElement('div');
            container.className = 'missing-image';
            
            // Ajouter une icône et du texte
            const icon = document.createElement('i');
            icon.className = 'fas fa-image';
            icon.style.fontSize = '2rem';
            icon.style.marginRight = '10px';
            
            const text = document.createTextNode('Image non disponible');
            
            container.appendChild(icon);
            container.appendChild(text);
            
            // Remplacer l'image par le conteneur
            img.parentNode.replaceChild(container, img);
        } else {
            // Pour les autres images, utiliser une image de remplacement générique
            img.src = '/build/img/placeholder.jpg';
            img.alt = 'Image non disponible';
            img.classList.add('error');
        }
    }

    // Observer pour les images qui se chargent
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                
                // Si l'image a un attribut data-src, on le charge
                if (img.dataset.src) {
                    const tempImg = new Image();
                    tempImg.onload = function() {
                        img.src = this.src;
                        img.classList.add('loaded');
                    };
                    tempImg.onerror = function() {
                        handleImageError(img);
                    };
                    tempImg.src = img.dataset.src;
                    img.removeAttribute('data-src');
                }
                
                // Arrêter d'observer cette image
                observer.unobserve(img);
            }
        });
    }, {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    });

    // Observer toutes les images avec data-src
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });

    // Gérer les erreurs de chargement des images
    document.querySelectorAll('img').forEach(img => {
        // Si l'image a déjà une source mais échoue au chargement
        if (img.complete && img.naturalHeight === 0) {
            handleImageError(img);
        } else {
            // Sinon, ajouter un gestionnaire d'erreur
            img.onerror = function() {
                handleImageError(this);
            };
        }
    });
});
