@extends('layouts.public')

@section('title', 'Partenaires - Fondation GITHA LIDJA')

@section('content')
<!-- Page Header -->
<section class="bg-info text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Nos Partenaires</h1>
                <p class="lead">Ensemble pour un impact durable</p>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Types -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Types de Partenariats</h2>
            <p class="lead text-muted">Découvrez comment collaborer avec nous</p>
        </div>

        <div class="row">
            <!-- Institutional Partners -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-primary mx-auto mb-3">
                            <i class="fas fa-university fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Partenaires Institutionnels</h4>
                        <p class="card-text">Organisations internationales, gouvernements, agences de développement travaillant pour le développement durable.</p>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Financement de projets</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Expertise technique</li>
                            <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>Coopération internationale</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Corporate Partners -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-success mx-auto mb-3">
                            <i class="fas fa-building fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Partenaires Corporatifs</h4>
                        <p class="card-text">Entreprises engagées dans la responsabilité sociale, souhaitant investir dans des projets à impact social.</p>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Mécénat d'entreprise</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Partenariats stratégiques</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Engagement employé</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- NGO Partners -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body p-4 text-center">
                        <div class="avatar avatar-xl avatar-info mx-auto mb-3">
                            <i class="fas fa-handshake fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">ONG et Associations</h4>
                        <p class="card-text">Organisations de la société civile partageant nos valeurs et travaillant sur des thématiques complémentaires.</p>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Collaboration terrain</li>
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Échange d'expertises</li>
                            <li class="mb-2"><i class="fas fa-check text-info me-2"></i>Projets conjoints</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Current Partners -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Nos Partenaires Actuels</h2>
            <p class="lead text-muted">Ils nous font confiance et nous accompagnent</p>
        </div>

        <!-- Institutional Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4 text-primary">Partenaires Institutionnels</h3>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/unicef.png') }}" alt="UNICEF" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">UNICEF</h6>
                        <small class="text-muted">Programme Éducation</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/who.png') }}" alt="OMS" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">OMS</h6>
                        <small class="text-muted">Programme Santé</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/un.png') }}" alt="Nations Unies" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Nations Unies</h6>
                        <small class="text-muted">Développement Durable</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/eu.png') }}" alt="Union Européenne" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Union Européenne</h6>
                        <small class="text-muted">Coopération</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/worldbank.png') }}" alt="Banque Mondiale" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Banque Mondiale</h6>
                        <small class="text-muted">Financement</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/afd.png') }}" alt="AFD" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">AFD</h6>
                        <small class="text-muted">Développement</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Corporate Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4 text-success">Partenaires Corporatifs</h3>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/total.png') }}" alt="Total" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Total</h6>
                        <small class="text-muted">Énergie & Développement</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/orange.png') }}" alt="Orange" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Orange</h6>
                        <small class="text-muted">Télécommunications</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/societegenerale.png') }}" alt="Société Générale" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Société Générale</h6>
                        <small class="text-muted">Services Financiers</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/airfrance.png') }}" alt="Air France" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Air France</h6>
                        <small class="text-muted">Transport</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- NGO Partners -->
        <div class="mb-5">
            <h3 class="text-center mb-4 text-info">ONG Partenaires</h3>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/msf.png') }}" alt="MSF" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">MSF</h6>
                        <small class="text-muted">Santé d'Urgence</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/amnesty.png') }}" alt="Amnesty International" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Amnesty</h6>
                        <small class="text-muted">Droits Humains</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/wwf.png') }}" alt="WWF" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">WWF</h6>
                        <small class="text-muted">Environnement</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/oxfam.png') }}" alt="Oxfam" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Oxfam</h6>
                        <small class="text-muted">Développement</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/savechildren.png') }}" alt="Save the Children" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Save Children</h6>
                        <small class="text-muted">Enfance</small>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="card border-0 shadow-sm text-center p-3 h-100">
                        <img src="{{ asset('assets/images/partners/rotary.png') }}" alt="Rotary International" class="img-fluid mb-2" style="max-height: 60px;">
                        <h6 class="card-title mb-0">Rotary</h6>
                        <small class="text-muted">Service Communautaire</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Benefits -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Avantages du Partenariat</h2>
            <p class="lead text-muted">Ce que nous apportons à nos partenaires</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="avatar avatar-lg avatar-primary mx-auto mb-3">
                            <i class="fas fa-chart-line fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Impact Mesurable</h5>
                        <p class="card-text">Rapports détaillés sur l'impact de vos contributions avec indicateurs de performance clairs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="avatar avatar-lg avatar-success mx-auto mb-3">
                            <i class="fas fa-bullhorn fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Visibilité</h5>
                        <p class="card-text">Communication régulière sur vos actions, mentions dans nos rapports et événements, présence sur notre site.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100">
                    <div class="card-body text-center p-4">
                        <div class="avatar avatar-lg avatar-info mx-auto mb-3">
                            <i class="fas fa-handshake fs-1"></i>
                        </div>
                        <h5 class="card-title fw-bold">Collaboration</h5>
                        <p class="card-text">Participation aux décisions stratégiques, implication dans la conception et le suivi des projets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Process -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Devenir Partenaire</h2>
            <p class="lead text-muted">Le processus pour nous rejoindre</p>
        </div>

        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-xl avatar-primary mx-auto mb-3">
                        <span class="avatar-initial rounded-circle fs-2">1</span>
                    </div>
                    <h5 class="fw-bold">Contact Initial</h5>
                    <p class="text-muted">Prenez contact avec notre équipe partenariats pour exprimer votre intérêt.</p>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-xl avatar-success mx-auto mb-3">
                        <span class="avatar-initial rounded-circle fs-2">2</span>
                    </div>
                    <h5 class="fw-bold">Échange</h5>
                    <p class="text-muted">Discussion sur vos objectifs, nos programmes et les modalités de collaboration.</p>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-xl avatar-info mx-auto mb-3">
                        <span class="avatar-initial rounded-circle fs-2">3</span>
                    </div>
                    <h5 class="fw-bold">Accord</h5>
                    <p class="text-muted">Signature d'un protocole d'accord définissant les termes du partenariat.</p>
                </div>
            </div>

            <div class="col-lg-3 mb-4">
                <div class="text-center">
                    <div class="avatar avatar-xl avatar-warning mx-auto mb-3">
                        <span class="avatar-initial rounded-circle fs-2">4</span>
                    </div>
                    <h5 class="fw-bold">Collaboration</h5>
                    <p class="text-muted">Mise en œuvre conjointe des projets et suivi régulier des avancées.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Form -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h3 class="card-title mb-0">Intéressé par un partenariat ?</h3>
                        <p class="mb-0">Contactez-nous pour discuter des opportunités de collaboration</p>
                    </div>
                    <div class="card-body p-4">
                        <form id="partnershipForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="partnerName" class="form-label">Nom de l'organisation *</label>
                                    <input type="text" class="form-control" id="partnerName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="partnerType" class="form-label">Type d'organisation *</label>
                                    <select class="form-select" id="partnerType" required>
                                        <option value="">Choisir un type</option>
                                        <option value="institutional">Institutionnel</option>
                                        <option value="corporate">Entreprise</option>
                                        <option value="ngo">ONG/Association</option>
                                        <option value="other">Autre</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="contactName" class="form-label">Nom du contact *</label>
                                    <input type="text" class="form-control" id="contactName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="contactPosition" class="form-label">Fonction</label>
                                    <input type="text" class="form-control" id="contactPosition">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="partnerEmail" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="partnerEmail" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="partnerPhone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="partnerPhone">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="partnerInterest" class="form-label">Domaines d'intérêt *</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="interest-education" value="education">
                                            <label class="form-check-label" for="interest-education">Éducation</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="interest-health" value="health">
                                            <label class="form-check-label" for="interest-health">Santé</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="interest-agriculture" value="agriculture">
                                            <label class="form-check-label" for="interest-agriculture">Agriculture</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="interest-community" value="community">
                                            <label class="form-check-label" for="interest-community">Développement communautaire</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="interest-general" value="general">
                                            <label class="form-check-label" for="interest-general">Soutien général</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="partnerMessage" class="form-label">Message *</label>
                                <textarea class="form-control" id="partnerMessage" rows="4" required placeholder="Décrivez brièvement votre organisation, vos motivations et le type de partenariat envisagé..."></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    <i class="fas fa-paper-plane me-2"></i>Envoyer ma demande
                                </button>
                                <p class="text-muted small mt-2">
                                    Nous vous contacterons dans les 48 heures
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Témoignages de Partenaires</h2>
            <p class="lead text-muted">Ce qu'ils disent de notre collaboration</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"La Fondation GITHA LIDJA est un partenaire fiable et transparent. Leur impact sur le terrain est remarquable."</p>
                        <div class="avatar avatar-md avatar-primary mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">UN</span>
                        </div>
                        <h6 class="fw-bold">Nations Unies</h6>
                        <small class="text-muted">Agence de Développement</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-success fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"Notre partenariat nous permet d'allier notre expertise technique à leur connaissance du terrain."</p>
                        <div class="avatar avatar-md avatar-success mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">AFD</span>
                        </div>
                        <h6 class="fw-bold">Agence Française de Développement</h6>
                        <small class="text-muted">Institution Financière</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-info fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"Travailler avec GITHA LIDJA nous permet d'avoir un impact concret et mesurable dans les communautés."</p>
                        <div class="avatar avatar-md avatar-info mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">MSF</span>
                        </div>
                        <h6 class="fw-bold">Médecins Sans Frontières</h6>
                        <small class="text-muted">ONG Médicale</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
// Form submission
document.getElementById('partnershipForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Here you would typically send the data to your backend
    // For now, we'll just show a success message
    alert('Merci pour votre intérêt ! Notre équipe partenariats vous contactera dans les plus brefs délais pour discuter des opportunités de collaboration.');

    // Reset form
    this.reset();
});
</script>
@endsection
@endsection
