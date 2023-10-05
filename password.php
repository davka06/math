// Récupérez le mot de passe soumis par le formulaire
$motDePasseSaisi = $_POST["Davka"];

// Vérifiez si le mot de passe est correct
if ($motDePasseSaisi == $motDePasseAttendu) {
    // Mot de passe correct, redirigez vers la page protégée
    header("Location: page_protegee.html");
    exit;
} else {
    // Mot de passe incorrect, affichez un message d'erreur
    echo "Mot de passe incorrect. Veuillez réessayer.";
}
?>
