// Gestion du loader de chargement
function initLoader() {
    const loaderWrapper = document.getElementById('loader-wrapper');
    let isLoaderHidden = false;
    
    if (!loaderWrapper) {
        console.error('Élément #loader-wrapper introuvable');
        return;
    }

    // Fonction pour masquer le loader
    function hideLoader() {
        // Éviter les appels multiples
        if (isLoaderHidden) return;
        isLoaderHidden = true;
        
        if (!loaderWrapper) return;
        
        // Arrêter toutes les animations CSS
        const loader = document.querySelector('.loader-line');
        if (loader) {
            // Forcer l'arrêt des animations
            loader.style.animation = 'none';
            loader.style.webkitAnimation = 'none';
            
            // Réinitialiser la transformation
            loader.style.transform = 'none';
            loader.style.webkitTransform = 'none';
            
            // Supprimer les classes d'animation
            loader.classList.remove('loading');
        }
        
        // Ajouter la classe de transition
        loaderWrapper.classList.add('fade-out');
        
        // Masquer complètement après la transition
        setTimeout(() => {
            if (loaderWrapper) {
                // Ajouter la classe hidden pour cacher définitivement
                loaderWrapper.classList.add('hidden');
                
                // Supprimer la classe de chargement du body
                document.body.classList.remove('loading');
                
                // Réactiver le défilement
                document.documentElement.style.overflow = '';
                document.body.style.overflow = '';
                
                // Nettoyage final
                setTimeout(() => {
                    if (loaderWrapper) {
                        // Supprimer complètement le loader du DOM
                        loaderWrapper.remove();
                    }
                }, 1000);
            }
        }, 500);
    }

    // Fonction pour forcer le masquage du loader
    function forceHideLoader() {
        if (!isLoaderHidden) {
            hideLoader();
        }
    }

    // Initialisation
    try {
        // Ajouter la classe de chargement
        loaderWrapper.classList.add('loading');
        document.body.classList.add('loading');
        
        // Désactiver le défilement pendant le chargement
        document.documentElement.style.overflow = 'hidden';
        document.body.style.overflow = 'hidden';
        
        // Vérifier si la page est déjà chargée
        if (document.readyState === 'complete' || document.readyState === 'interactive') {
            setTimeout(hideLoader, 100);
        } else {
            // Écouter l'événement de chargement de la page
            
            // Écouter également l'événement DOMContentLoaded au cas où
            document.addEventListener('DOMContentLoaded', hideLoader);
        }
    } catch (e) {
        console.error(`Erreur d'initialisation du loader: ${e}`);
        forceHideLoader();
    }
    
    // Timeout de secours (5 secondes)
    const fallbackTimeout = setTimeout(forceHideLoader, 5000);
    // Nettoyer le timeout si le loader est masqué manuellement
    window.addEventListener('beforeunload', () => {
        clearTimeout(fallbackTimeout);
    });
}

// Initialisation du loader quand le DOM est chargé
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLoader);
} else {
    // DOMContentLoaded a déjà été déclenché
    setTimeout(initLoader, 0);
}

export default initLoader;
