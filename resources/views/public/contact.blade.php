@extends('layouts.public')

@section('title', 'Contact - Fondation GITHA LIDJA')

@section('content')
<!-- Page Header -->
<section class="bg-warning text-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Contactez-nous</h1>
                <p class="lead">Nous sommes là pour répondre à vos questions</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Details -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-lg avatar-primary me-3">
                                <i class="fas fa-map-marker-alt fs-2"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Adresse</h5>
                            </div>
                        </div>
                        <p class="card-text mb-0">
                            123 Avenue de l'Indépendance<br>
                            Kinshasa, République Démocratique du Congo<br>
                            BP 12345
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-lg avatar-success me-3">
                                <i class="fas fa-phone fs-2"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Téléphone</h5>
                            </div>
                        </div>
                        <p class="card-text mb-0">
                            +243 123 456 789<br>
                            +243 987 654 321<br>
                            <small class="text-muted">Lundi - Vendredi: 8h00 - 17h00</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar avatar-lg avatar-info me-3">
                                <i class="fas fa-envelope fs-2"></i>
                            </div>
                            <div>
                                <h5 class="card-title mb-0">Email</h5>
                            </div>
                        </div>
                        <p class="card-text mb-0">
                            info@githalidja.org<br>
                            contact@githalidja.org<br>
                            <small class="text-muted">Réponse sous 24-48h</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-8 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Envoyez-nous un message</h3>
                    </div>
                    <div class="card-body p-4">
                        <form id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactFirstName" class="form-label">Prénom *</label>
                                    <input type="text" class="form-control" id="contactFirstName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactLastName" class="form-label">Nom *</label>
                                    <input type="text" class="form-control" id="contactLastName" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactEmail" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="contactEmail" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactPhone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="contactPhone">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="contactSubject" class="form-label">Sujet *</label>
                                <select class="form-select" id="contactSubject" required>
                                    <option value="">Choisir un sujet</option>
                                    <option value="general">Information générale</option>
                                    <option value="donation">Donation</option>
                                    <option value="volunteer">Bénévolat</option>
                                    <option value="partnership">Partenariat</option>
                                    <option value="project">Projet spécifique</option>
                                    <option value="media">Presse/Médias</option>
                                    <option value="complaint">Réclamation</option>
                                    <option value="other">Autre</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="contactMessage" class="form-label">Message *</label>
                                <textarea class="form-control" id="contactMessage" rows="5" required placeholder="Votre message..."></textarea>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="contactNewsletter" value="1">
                                    <label class="form-check-label" for="contactNewsletter">
                                        Je souhaite recevoir la newsletter de la fondation
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Envoyer le message
                                </button>
                                <p class="text-muted small mt-2">
                                    * Champs obligatoires
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Map & Additional Info -->
            <div class="col-lg-4">
                <!-- Map Placeholder -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-body p-0">
                        <div style="height: 300px; background: #e9ecef; display: flex; align-items: center; justify-content: center;">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt fs-1 text-muted mb-3"></i>
                                <p class="text-muted mb-0">Carte interactive</p>
                                <small class="text-muted">Kinshasa, RDC</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact -->
                <div class="card border-0 shadow">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">Contact Rapide</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6>Urgences</h6>
                            <p class="mb-1"><i class="fas fa-phone me-2"></i>+243 999 999 999</p>
                            <small class="text-muted">24h/24 - 7j/7 pour urgences</small>
                        </div>

                        <div class="mb-3">
                            <h6>Presse</h6>
                            <p class="mb-1"><i class="fas fa-envelope me-2"></i>presse@githalidja.org</p>
                            <small class="text-muted">Pour demandes médias</small>
                        </div>

                        <div class="mb-3">
                            <h6>Réseaux Sociaux</h6>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn btn-outline-info btn-sm"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-danger btn-sm"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Questions Fréquentes</h2>
            <p class="lead text-muted">Trouvez rapidement des réponses à vos questions</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="contactFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Comment faire un don à la fondation ?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Vous pouvez faire un don en ligne via notre page "Faire un don", par virement bancaire, ou en nous contactant directement.
                                Tous les dons sont déductibles fiscalement selon la législation en vigueur.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Comment devenir bénévole ?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Rendez-vous sur notre page "Devenir bénévole" pour découvrir les opportunités disponibles et postuler.
                                Nous proposons des missions sur le terrain, à distance, ou ponctuelles selon vos compétences.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Comment suivre l'impact de mes dons ?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Nous publions régulièrement des rapports d'impact sur notre site web et envoyons des mises à jour
                                personnalisées aux donateurs. Vous pouvez également nous contacter pour obtenir des informations spécifiques.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Puis-je visiter vos projets sur place ?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Oui, nous organisons régulièrement des visites de terrain pour nos partenaires et donateurs importants.
                                Contactez-nous pour organiser une visite selon vos disponibilités.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                Comment signaler un problème ou une préoccupation ?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                            <div class="accordion-body">
                                Vous pouvez nous contacter via le formulaire ci-dessus en sélectionnant "Réclamation" comme sujet,
                                ou appeler notre ligne d'urgence au +243 999 999 999. Nous prenons toutes les préoccupations très au sérieux.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Contact -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Notre Équipe</h2>
            <p class="lead text-muted">Les personnes à contacter selon vos besoins</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="card-body p-4">
                        <div class="avatar avatar-lg avatar-primary mx-auto mb-3">
                            <i class="fas fa-user-tie fs-1"></i>
                        </div>
                        <h5 class="card-title">Direction Générale</h5>
                        <p class="text-muted small">Dr. Marie Kabila<br>Directrice Générale</p>
                        <a href="mailto:direction@githalidja.org" class="btn btn-outline-primary btn-sm">Contacter</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="card-body p-4">
                        <div class="avatar avatar-lg avatar-success mx-auto mb-3">
                            <i class="fas fa-hand-holding-heart fs-1"></i>
                        </div>
                        <h5 class="card-title">Dons & Partenariats</h5>
                        <p class="text-muted small">Sophie Laurent<br>Responsable Développement</p>
                        <a href="mailto:dons@githalidja.org" class="btn btn-outline-success btn-sm">Contacter</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="card-body p-4">
                        <div class="avatar avatar-lg avatar-info mx-auto mb-3">
                            <i class="fas fa-users fs-1"></i>
                        </div>
                        <h5 class="card-title">Bénévoles</h5>
                        <p class="text-muted small">Jean-Pierre Mbuyi<br>Responsable RH</p>
                        <a href="mailto:benevoles@githalidja.org" class="btn btn-outline-info btn-sm">Contacter</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card border-0 shadow text-center h-100">
                    <div class="card-body p-4">
                        <div class="avatar avatar-lg avatar-warning mx-auto mb-3">
                            <i class="fas fa-bullhorn fs-1"></i>
                        </div>
                        <h5 class="card-title">Communication</h5>
                        <p class="text-muted small">David Nkosi<br>Responsable Communication</p>
                        <a href="mailto:communication@githalidja.org" class="btn btn-outline-warning btn-sm">Contacter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Besoin d'aide immédiate ?</h2>
        <p class="lead mb-4">Notre équipe est là pour vous accompagner dans vos démarches</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="tel:+243123456789" class="btn btn-light btn-lg">
                <i class="fas fa-phone me-2"></i>Appeler maintenant
            </a>
            <a href="mailto:info@githalidja.org" class="btn btn-outline-light btn-lg">
                <i class="fas fa-envelope me-2"></i>Envoyer un email
            </a>
        </div>
    </div>
</section>

@section('scripts')
<script>
// Form submission
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Here you would typically send the data to your backend
    // For now, we'll just show a success message
    alert('Merci pour votre message ! Nous vous répondrons dans les plus brefs délais.');

    // Reset form
    this.reset();
});

// Dynamic subject field enhancement
document.getElementById('contactSubject').addEventListener('change', function() {
    const subject = this.value;
    const messageField = document.getElementById('contactMessage');

    // Pre-fill message based on subject
    let placeholder = 'Votre message...';
    switch(subject) {
        case 'donation':
            placeholder = 'Je souhaite faire un don. Pouvez-vous me donner plus d\'informations sur les modalités ?';
            break;
        case 'volunteer':
            placeholder = 'Je suis intéressé par le bénévolat. Quelles sont les opportunités disponibles ?';
            break;
        case 'partnership':
            placeholder = 'Notre organisation souhaite établir un partenariat. Comment procéder ?';
            break;
        case 'project':
            placeholder = 'J\'aimerais en savoir plus sur vos projets. Pouvez-vous me donner des détails ?';
            break;
    }

    messageField.placeholder = placeholder;
});
</script>
@endsection
@endsection
