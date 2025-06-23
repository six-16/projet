<?php require_once '../fragment/fragmentHeader.html'; ?>

<body>
    <?php require_once '../fragment/fragmentMenu.php'; ?>
    
    <div class="container mt-5">
        <h2>Amélioration de l'architecture MVC</h2>
        
        <div class="card mt-4">
            <div class="card-header">
                <h4>Proposition: Utilisation d'un Router avancé avec dépendances</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Problématique actuelle</h5>
                <p class="card-text">
                    Le routeur actuel nécessite d'inclure manuellement chaque contrôleur et de gérer
                    les dépendances dans chaque fichier. Cela peut devenir difficile à maintenir avec
                    l'ajout de nouvelles fonctionnalités.
                </p>
                
                <h5 class="card-title mt-4">Solution proposée</h5>
                <p class="card-text">
                    Implémenter un système de dépendances automatiques avec :
                </p>
                <ul>
                    <li>Auto-chargement des classes (PSR-4)</li>
                    <li>Injection de dépendances automatique</li>
                    <li>Gestion centralisée des configurations</li>
                    <li>Système de middleware pour les vérifications communes</li>
                </ul>
                
                <h5 class="card-title mt-4">Exemple de code amélioré</h5>
                <pre><code class="language-php">// Nouvelle structure du routeur
$router = new Router();

// Déclaration des routes avec middleware
$router->add('GET', '/projets', 'ProjetController@index', ['auth', 'responsable']);
$router->add('POST', '/projets', 'ProjetController@store', ['auth', 'responsable']);

// Middleware d'authentification
$router->middleware('auth', function($request, $next) {
    if (!isset($_SESSION['user'])) {
        return redirect('/login');
    }
    return $next($request);
});

// Exécution du routeur
$router->dispatch();</code></pre>
                
                <h5 class="card-title mt-4">Avantages</h5>
                <ul>
                    <li>Meilleure organisation du code</li>
                    <li>Réutilisation des vérifications communes (middleware)</li>
                    <li>Plus facile à tester unitairement</li>
                    <li>Évolutivité améliorée</li>
                </ul>
            </div>
        </div>
    </div>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/atom-one-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    
    <?php require_once '../fragment/fragmentFooter.html'; ?>
</body>
</html>