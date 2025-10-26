 @extends('layouts.public')

@section('title', 'Devenir bénévole - Fondation GITHA LIDJA')

@section('content')
<!-- Page Header -->
<section class="bg-success text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Devenir Bénévole</h1>
                <p class="lead">Rejoignez notre équipe et contribuez directement à nos projets</p>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Opportunities -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Opportunités de bénévolat</h2>
            <p class="lead text-muted">Trouvez le rôle qui correspond à vos compétences et à votre disponibilité</p>
        </div>

        <div class="row">
            <!-- Field Work -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-success mx-auto mb-3">
                            <i class="fas fa-users fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Travail de Terrain</h4>
                        <p class="card-text">Participez directement à nos projets sur le terrain : distribution de kits scolaires, campagnes médicales, formations agricoles.</p>
                        <div class="mb-3">
                            <span class="badge bg-success me-2">Sur place</span>
                            <span class="badge bg-warning">Court terme</span>
                        </div>
                        <button class="btn btn-success w-100" onclick="selectVolunteerType('field')">Postuler</button>
                    </div>
                </div>
            </div>

            <!-- Remote Work -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-primary mx-auto mb-3">
                            <i class="fas fa-laptop fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Travail à Distance</h4>
                        <p class="card-text">Contribuez depuis chez vous : gestion de contenu, traduction, analyse de données, support administratif.</p>
                        <div class="mb-3">
                            <span class="badge bg-primary me-2">À distance</span>
                            <span class="badge bg-info">Flexible</span>
                        </div>
                        <button class="btn btn-primary w-100" onclick="selectVolunteerType('remote')">Postuler</button>
                    </div>
                </div>
            </div>

            <!-- Expertise -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-info mx-auto mb-3">
                            <i class="fas fa-user-tie fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Expertise Spécialisée</h4>
                        <p class="card-text">Mettez vos compétences professionnelles au service de la cause : médecins, enseignants, agronomes, développeurs.</p>
                        <div class="mb-3">
                            <span class="badge bg-info me-2">Expertise</span>
                            <span class="badge bg-secondary">Ponctuel</span>
                        </div>
                        <button class="btn btn-info w-100" onclick="selectVolunteerType('expertise')">Postuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Volunteer Application Modal -->
<div class="modal fade" id="volunteerModal" tabindex="-1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Postuler comme bénévole</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="volunteerForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="volunteerFirstName" class="form-label">Prénom *</label>
                            <input type="text" class="form-control" id="volunteerFirstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="volunteerLastName" class="form-label">Nom *</label>
                            <input type="text" class="form-control" id="volunteerLastName" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="volunteerEmail" class="form-label">Adresse email *</label>
                            <input type="email" class="form-control" id="volunteerEmail" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="volunteerPhone" class="form-label">Téléphone *</label>
                            <input type="tel" class="form-control" id="volunteerPhone" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="volunteerAge" class="form-label">Âge</label>
                            <input type="number" class="form-control" id="volunteerAge" min="18">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="volunteerLocation" class="form-label">Localisation</label>
                            <input type="text" class="form-control" id="volunteerLocation" placeholder="Ville, Pays">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="volunteerType" class="form-label">Type de bénévolat souhaité *</label>
                        <select class="form-select" id="volunteerType" required>
                            <option value="">Choisir un type</option>
                            <option value="field">Travail de terrain</option>
                            <option value="remote">Travail à distance</option>
                            <option value="expertise">Expertise spécialisée</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="volunteerSkills" class="form-label">Compétences et expérience</label>
                        <textarea class="form-control" id="volunteerSkills" rows="3" placeholder="Décrivez vos compétences, expérience professionnelle, langues parlées..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="volunteerAvailability" class="form-label">Disponibilité *</label>
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select" id="availabilityType" required>
                                    <option value="">Type de disponibilité</option>
                                    <option value="full-time">Temps plein</option>
                                    <option value="part-time">Temps partiel</option>
                                    <option value="weekends">Week-ends uniquement</option>
                                    <option value="missions">Missions ponctuelles</option>
                                    <option value="remote">À distance flexible</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="availabilityDetails" placeholder="Précisez vos disponibilités">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="volunteerMotivation" class="form-label">Motivation *</label>
                        <textarea class="form-control" id="volunteerMotivation" rows="4" required placeholder="Pourquoi souhaitez-vous devenir bénévole chez nous ? Qu'espérez-vous apporter et retirer de cette expérience ?"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="volunteerExperience" class="form-label">Expérience bénévole précédente</label>
                        <textarea class="form-control" id="volunteerExperience" rows="3" placeholder="Décrivez vos expériences bénévoles passées (organisations, durée, missions...)"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Comment avez-vous entendu parler de nous ?</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-web" value="web">
                                    <label class="form-check-label" for="referral-web">Site web</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-social" value="social">
                                    <label class="form-check-label" for="referral-social">Réseaux sociaux</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-friends" value="friends">
                                    <label class="form-check-label" for="referral-friends">Bouche à oreille</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-media" value="media">
                                    <label class="form-check-label" for="referral-media">Médias</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-event" value="event">
                                    <label class="form-check-label" for="referral-event">Événement</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="referral" id="referral-other" value="other">
                                    <label class="form-check-label" for="referral-other">Autre</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="volunteerNewsletter" value="1" checked>
                            <label class="form-check-label" for="volunteerNewsletter">
                                Je souhaite recevoir des informations sur les activités de la fondation
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="volunteerTerms" value="1" required>
                            <label class="form-check-label" for="volunteerTerms">
                                J'accepte les <a href="#" target="_blank">conditions générales de bénévolat</a> *
                            </label>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success btn-lg px-5">
                            <i class="fas fa-paper-plane me-2"></i>Envoyer ma candidature
                        </button>
                        <p class="text-muted small mt-2">
                            Nous vous contacterons dans les 7 jours suivant réception de votre candidature
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Current Volunteers -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Nos Bénévoles en Action</h2>
            <p class="lead text-muted">Découvrez le quotidien de nos bénévoles</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('assets/images/volunteer-1.jpg') }}" class="card-img-top" alt="Bénévole">
                    <div class="card-body">
                        <h5 class="card-title">Marie, Enseignante</h5>
                        <p class="text-primary small">Bénévole terrain - 6 mois</p>
                        <p class="card-text">"Participer aux programmes éducatifs m'a rappelé pourquoi j'ai choisi ce métier. Voir les sourires des enfants est la plus belle récompense."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('assets/images/volunteer-2.jpg') }}" class="card-img-top" alt="Bénévole">
                    <div class="card-body">
                        <h5 class="card-title">Jean-Pierre, Médecin</h5>
                        <p class="text-success small">Mission ponctuelle - 2 semaines</p>
                        <p class="card-text">"Mes compétences médicales ont pu soulager des centaines de patients. Une expérience humaine extraordinaire."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow">
                    <img src="{{ asset('assets/images/volunteer-3.jpg') }}" class="card-img-top" alt="Bénévole">
                    <div class="card-body">
                        <h5 class="card-title">Sophie, Designer</h5>
                        <p class="text-info small">Bénévole à distance - 1 an</p>
                        <p class="card-text">"Depuis Paris, je contribue à la communication de la fondation. C'est gratifiant de voir son travail avoir un impact direct."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Avantages du bénévolat</h2>
            <p class="lead text-muted">Ce que vous gagnez en nous rejoignant</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-lg avatar-primary mx-auto mb-3">
                        <i class="fas fa-heart fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Impact Direct</h5>
                    <p class="text-muted">Voyez immédiatement les résultats de votre engagement</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-lg avatar-success mx-auto mb-3">
                        <i class="fas fa-users fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Communauté</h5>
                    <p class="text-muted">Rejoignez une équipe passionnée et solidaire</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-lg avatar-info mx-auto mb-3">
                        <i class="fas fa-graduation-cap fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Développement</h5>
                    <p class="text-muted">Développez de nouvelles compétences et expériences</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-lg avatar-warning mx-auto mb-3">
                        <i class="fas fa-certificate fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Reconnaissance</h5>
                    <p class="text-muted">Recevez un certificat de bénévolat officiel</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Questions Fréquentes</h2>
            <p class="lead text-muted">Tout savoir sur le bénévolat chez nous</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="volunteerFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#vfaq1">
                                Faut-il avoir de l'expérience pour devenir bénévole ?
                            </button>
                        </h2>
                        <div id="vfaq1" class="accordion-collapse collapse show" data-bs-parent="#volunteerFAQ">
                            <div class="accordion-body">
                                Non, nous accueillons tous les bénévoles motivés ! Que vous ayez une expertise spécifique ou simplement l'envie d'aider, nous saurons vous trouver une mission adaptée à vos compétences et disponibilités.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vfaq2">
                                Quelles sont les conditions pour partir en mission sur le terrain ?
                            </button>
                        </h2>
                        <div id="vfaq2" class="accordion-collapse collapse" data-bs-parent="#volunteerFAQ">
                            <div class="accordion-body">
                                Pour les missions sur le terrain, nous demandons un engagement minimum de 2 semaines. Les frais de voyage et d'hébergement sont pris en charge par la fondation ou le bénévole selon les cas.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vfaq3">
                                Puis-je être bénévole à temps partiel ?
                            </button>
                        </h2>
                        <div id="vfaq3" class="accordion-collapse collapse" data-bs-parent="#volunteerFAQ">
                            <div class="accordion-body">
                                Absolument ! Nous proposons des missions flexibles : quelques heures par semaine, week-ends, ou missions ponctuelles. Le bénévolat à distance permet une grande souplesse.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#vfaq4">
                                Quelles formations recevrai-je ?
                            </button>
                        </h2>
                        <div id="vfaq4" class="accordion-collapse collapse" data-bs-parent="#volunteerFAQ">
                            <div class="accordion-body">
                                Tous nos bénévoles reçoivent une formation initiale sur nos programmes, la culture locale, et les protocoles de sécurité. Des formations spécifiques sont proposées selon les missions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-success text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Prêt à nous rejoindre ?</h2>
        <p class="lead mb-4">Chaque bénévole compte. Votre engagement peut changer des vies.</p>
        <button class="btn btn-light btn-lg" onclick="selectVolunteerType('general')">
            <i class="fas fa-handshake me-2"></i>Devenir bénévole
        </button>
    </div>
</section>

@section('scripts')
<script>
let selectedVolunteerType = '';

function selectVolunteerType(type) {
    selectedVolunteerType = type;

    // Pre-select the volunteer type in the form
    const typeSelect = document.getElementById('volunteerType');
    if (typeSelect) {
        if (type === 'field') {
            typeSelect.value = 'field';
        } else if (type === 'remote') {
            typeSelect.value = 'remote';
        } else if (type === 'expertise') {
            typeSelect.value = 'expertise';
        }
    }

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('volunteerModal'));
    modal.show();
}

// Form submission
document.getElementById('volunteerForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Here you would typically send the data to your backend
    // For now, we'll just show a success message
    alert('Merci pour votre candidature ! Nous examinerons votre profil et vous contacterons dans les plus brefs délais.');

    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('volunteerModal'));
    modal.hide();

    // Reset form
    this.reset();
});
</script>
@endsection
