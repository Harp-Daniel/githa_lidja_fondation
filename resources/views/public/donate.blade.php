@extends('layouts.public')

@section('title', 'Faire un don - Fondation GITHA LIDJA')

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Faire un Don</h1>
                <p class="lead">Votre générosité change des vies et construit un avenir meilleur</p>
            </div>
        </div>
    </div>
</section>

<!-- Donation Options -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Comment souhaitez-vous donner ?</h2>
            <p class="lead text-muted">Choisissez la méthode qui vous convient le mieux</p>
        </div>

        <div class="row">
            <!-- One-time Donation -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body p-4">
                        <div class="avatar avatar-xl avatar-primary mx-auto mb-3">
                            <i class="fas fa-hand-holding-heart fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Don Unique</h4>
                        <p class="card-text">Faites un don ponctuel pour soutenir nos projets en cours.</p>
                        <div class="mb-3">
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="amount" id="amount-25" value="25">
                                <label class="btn btn-outline-primary" for="amount-25">$25</label>

                                <input type="radio" class="btn-check" name="amount" id="amount-50" value="50">
                                <label class="btn btn-outline-primary" for="amount-50">$50</label>

                                <input type="radio" class="btn-check" name="amount" id="amount-100" value="100" checked>
                                <label class="btn btn-outline-primary" for="amount-100">$100</label>

                                <input type="radio" class="btn-check" name="amount" id="amount-other" value="other">
                                <label class="btn btn-outline-primary" for="amount-other">Autre</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" onclick="selectDonationType('one-time')">Faire un don unique</button>
                    </div>
                </div>
            </div>

            <!-- Monthly Donation -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body p-4">
                        <div class="avatar avatar-xl avatar-success mx-auto mb-3">
                            <i class="fas fa-calendar-alt fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Don Mensuel</h4>
                        <p class="card-text">Soutenez nos projets de manière régulière avec un don mensuel.</p>
                        <div class="mb-3">
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="monthly-amount" id="monthly-10" value="10">
                                <label class="btn btn-outline-success" for="monthly-10">$10</label>

                                <input type="radio" class="btn-check" name="monthly-amount" id="monthly-25" value="25" checked>
                                <label class="btn btn-outline-success" for="monthly-25">$25</label>

                                <input type="radio" class="btn-check" name="monthly-amount" id="monthly-50" value="50">
                                <label class="btn btn-outline-success" for="monthly-50">$50</label>

                                <input type="radio" class="btn-check" name="monthly-amount" id="monthly-other" value="other">
                                <label class="btn btn-outline-success" for="monthly-other">Autre</label>
                            </div>
                        </div>
                        <button class="btn btn-success w-100" onclick="selectDonationType('monthly')">Devenir donateur mensuel</button>
                    </div>
                </div>
            </div>

            <!-- Project Specific -->
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow h-100 text-center">
                    <div class="card-body p-4">
                        <div class="avatar avatar-xl avatar-info mx-auto mb-3">
                            <i class="fas fa-project-diagram fs-1"></i>
                        </div>
                        <h4 class="card-title fw-bold">Projet Spécifique</h4>
                        <p class="card-text">Soutenez directement un projet qui vous tient à cœur.</p>
                        <div class="mb-3">
                            <select class="form-select" id="project-select">
                                <option value="">Choisir un projet</option>
                                <option value="education">Programme Éducation Pour Tous</option>
                                <option value="health">Centres Médicaux Mobiles</option>
                                <option value="agriculture">Développement Agricole Durable</option>
                                <option value="community">Programme d'Empowerment Féminin</option>
                            </select>
                        </div>
                        <button class="btn btn-info w-100" onclick="selectDonationType('project')">Soutenir un projet</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donation Form Modal -->
<div class="modal fade" id="donationModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Finaliser votre don</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="donationForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">Prénom *</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Nom *</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email *</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>

                    <div class="mb-3" id="amountSection">
                        <label for="customAmount" class="form-label">Montant du don ($)</label>
                        <input type="number" class="form-control" id="customAmount" min="1" step="0.01">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message (optionnel)</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Un message d'encouragement ou une dédicace..."></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="anonymous" value="1">
                            <label class="form-check-label" for="anonymous">
                                Je souhaite rester anonyme
                            </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newsletter" value="1" checked>
                            <label class="form-check-label" for="newsletter">
                                Je souhaite recevoir la newsletter
                            </label>
                        </div>
                    </div>

                    <!-- Payment Section -->
                    <div class="border-top pt-3">
                        <h6 class="mb-3">Informations de paiement</h6>

                        <div class="mb-3">
                            <label class="form-label">Méthode de paiement</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="card" value="card" checked>
                                        <label class="form-check-label" for="card">
                                            <i class="fas fa-credit-card me-2"></i>Carte bancaire
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal">
                                        <label class="form-check-label" for="paypal">
                                            <i class="fab fa-paypal me-2"></i>PayPal
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Payment Form -->
                        <div id="cardForm">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="cardNumber" class="form-label">Numéro de carte</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="1234 5678 9012 3456" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="expiryDate" class="form-label">Date d'expiration</label>
                                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/AA" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cvv" placeholder="123" required>
                                </div>
                            </div>
                        </div>

                        <!-- PayPal Button Placeholder -->
                        <div id="paypalForm" style="display: none;">
                            <div class="text-center">
                                <button type="button" class="btn btn-primary" id="paypalButton">
                                    <i class="fab fa-paypal me-2"></i>Payer avec PayPal
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            <i class="fas fa-lock me-2"></i>Finaliser le don sécurisé
                        </button>
                        <p class="text-muted small mt-2">
                            <i class="fas fa-shield-alt me-1"></i>Paiement 100% sécurisé
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Impact Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">L'Impact de votre Don</h2>
            <p class="lead text-muted">Découvrez comment vos contributions transforment des vies</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4 h-100">
                    <div class="avatar avatar-lg avatar-primary mx-auto mb-3">
                        <i class="fas fa-graduation-cap fs-1"></i>
                    </div>
                    <h4 class="fw-bold">$50</h4>
                    <p class="text-muted">Fournit un kit scolaire complet pour un enfant</p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4 h-100">
                    <div class="avatar avatar-lg avatar-success mx-auto mb-3">
                        <i class="fas fa-user-md fs-1"></i>
                    </div>
                    <h4 class="fw-bold">$25</h4>
                    <p class="text-muted">Couvre les frais médicaux pour une consultation</p>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4 h-100">
                    <div class="avatar avatar-lg avatar-warning mx-auto mb-3">
                        <i class="fas fa-seedling fs-1"></i>
                    </div>
                    <h4 class="fw-bold">$100</h4>
                    <p class="text-muted">Équipe un agriculteur avec des semences et outils</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Témoignages de Donateurs</h2>
            <p class="lead text-muted">Ce que disent nos généreux contributeurs</p>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-primary fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"Mon don mensuel me permet de contribuer concrètement à l'éducation des enfants en RDC. Voir les résultats est très gratifiant."</p>
                        <div class="avatar avatar-md avatar-primary mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">M</span>
                        </div>
                        <h6 class="fw-bold">Marie Dubois</h6>
                        <small class="text-muted">Donatrice mensuelle depuis 2 ans</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-success fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"J'ai choisi de soutenir le programme agricole parce que je crois en l'importance de l'autosuffisance alimentaire."</p>
                        <div class="avatar avatar-md avatar-success mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">P</span>
                        </div>
                        <h6 class="fw-bold">Pierre Martin</h6>
                        <small class="text-muted">Donateur ponctuel</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow text-center p-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-quote-left text-info fs-1"></i>
                        </div>
                        <p class="card-text mb-3">"La transparence de la fondation m'a convaincu. Je sais exactement où va mon argent et quel impact il a."</p>
                        <div class="avatar avatar-md avatar-info mx-auto mb-2">
                            <span class="avatar-initial rounded-circle">S</span>
                        </div>
                        <h6 class="fw-bold">Sophie Laurent</h6>
                        <small class="text-muted">Donatrice mensuelle depuis 1 an</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Questions Fréquentes</h2>
            <p class="lead text-muted">Tout ce que vous devez savoir sur vos dons</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="donationFAQ">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Mes dons sont-ils déductibles fiscalement ?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#donationFAQ">
                            <div class="accordion-body">
                                Oui, la Fondation GITHA LIDJA est reconnue d'utilité publique. Vous recevrez un reçu fiscal pour vos dons, vous permettant de bénéficier d'avantages fiscaux selon la législation en vigueur.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Comment puis-je modifier ou annuler mon don mensuel ?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#donationFAQ">
                            <div class="accordion-body">
                                Vous pouvez modifier ou annuler votre don mensuel à tout moment en nous contactant par email à dons@githalidja.org ou par téléphone. Les modifications prendront effet dès le mois suivant.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Puis-je choisir à quoi sert mon don ?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#donationFAQ">
                            <div class="accordion-body">
                                Absolument ! Vous pouvez désigner votre don pour un projet spécifique (éducation, santé, agriculture, etc.) ou laisser la fondation allouer les fonds là où ils sont le plus nécessaires.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                Mes informations de paiement sont-elles sécurisées ?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#donationFAQ">
                            <div class="accordion-body">
                                Oui, nous utilisons des systèmes de paiement sécurisés conformes aux normes PCI DSS. Vos informations bancaires ne sont jamais stockées sur nos serveurs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@section('scripts')
<script>
let selectedDonationType = '';
let selectedAmount = 0;

function selectDonationType(type) {
    selectedDonationType = type;

    // Get selected amount
    let amount = 0;
    if (type === 'one-time') {
        const selectedRadio = document.querySelector('input[name="amount"]:checked');
        if (selectedRadio && selectedRadio.value !== 'other') {
            amount = parseFloat(selectedRadio.value);
        } else {
            amount = parseFloat(document.getElementById('customAmount').value) || 0;
        }
    } else if (type === 'monthly') {
        const selectedRadio = document.querySelector('input[name="monthly-amount"]:checked');
        if (selectedRadio && selectedRadio.value !== 'other') {
            amount = parseFloat(selectedRadio.value);
        }
    }

    selectedAmount = amount;

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('donationModal'));
    modal.show();

    // Update modal title based on type
    const modalTitle = document.querySelector('#donationModal .modal-title');
    if (type === 'monthly') {
        modalTitle.textContent = 'Devenir donateur mensuel';
    } else if (type === 'project') {
        modalTitle.textContent = 'Soutenir un projet spécifique';
    } else {
        modalTitle.textContent = 'Finaliser votre don';
    }
}

// Payment method switching
document.querySelectorAll('input[name="paymentMethod"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const cardForm = document.getElementById('cardForm');
        const paypalForm = document.getElementById('paypalForm');

        if (this.value === 'card') {
            cardForm.style.display = 'block';
            paypalForm.style.display = 'none';
        } else {
            cardForm.style.display = 'none';
            paypalForm.style.display = 'block';
        }
    });
});

// Form submission
document.getElementById('donationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Here you would typically send the data to your backend
    // For now, we'll just show a success message
    alert('Merci pour votre don ! Nous vous contacterons bientôt pour confirmer la transaction.');

    // Close modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('donationModal'));
    modal.hide();

    // Reset form
    this.reset();
});

// Custom amount input toggle
document.querySelectorAll('input[name="amount"], input[name="monthly-amount"]').forEach(radio => {
    radio.addEventListener('change', function() {
        const customAmountSection = document.getElementById('amountSection');
        if (this.value === 'other') {
            customAmountSection.style.display = 'block';
        } else {
            customAmountSection.style.display = 'none';
        }
    });
});
</script>
@endsection
@endsection
