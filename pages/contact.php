<?php require '../components/header.php'
?>
</div>

<div class="contact__container">
    <h1 class="big__title">Contactez-nous</h1>
    <div class="body contacts">
        <form action="">
            <div class="input__conatner">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input__conatner">
                <label for="fullname">Nom complet</label>
                <input type="text" name="fullname" id="fullname" required>
            </div>
            <div class="input__conatner">
                <label for="object">Objet</label>
                <input type="text" name="object" id="object" required>
            </div>
            <div class="input__conatner">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>
            <button>Envoyer</button>
        </form>
        <div class="coords__container">
            <h2 class="small__title">Nos Coordonnees</h2>
            <div class="coords">
                <div class="coord">
                    <span class='coord__title'>Butembo</span>
                    <div class="coord__content">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Av. Walikale, N° 25 et 27, Commune Kimemi, Ville de Butembo, Nord-Kivu, RDC</span>
                    </div>
                    <div class="coord__content">
                        <i class="fa-solid fa-phone"></i>
                        <span>+243 999 111 333</span>
                    </div>
                    <div class="coord__content">
                        <i class="fa-solid fa-envelope"></i>
                        <span>farp.2023@email.fp</span>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>

<?php require '../components/footer.php' ?>