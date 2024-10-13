
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Advantage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom gradient for the hero section */
        .bg-gradient-custom {
            background: linear-gradient(90deg, #6a00f4 0%, #ff6ec7 50%, #00d2ff 100%);
        }

        /* Styling for header text gradient and animations */
        .text-gradient {
            background: linear-gradient(to right, #4a90e2, #9013fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hover-effect:hover {
            transform: translateY(-3px);
            transition: all 0.3s ease-in-out;
        }

        header {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .testimonial-slide {
            display: none;
        }

        .active-slide {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Inclusion du header -->
    <?php include 'header.html'; ?>

    <!-- Section Hero with Parallax -->
    <section class="relative bg-cover bg-center h-screen bg-gradient-custom" style="background-image: url('images/hero.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl sm:text-6xl font-bold mb-6">Explorez le Monde avec Travel Advantage</h1>
                <p class="text-lg sm:text-xl mb-8">Des offres exclusives pour vos voyages à travers le globe.</p>
                <a href="#offres" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition">Voir les offres</a>
            </div>
        </div>
    </section>

    <!-- Logo Banner Section -->
    <section class="bg-gradient-to-r from-blue-600 to-teal-400 py-4">
        <div class="container mx-auto flex justify-around items-center max-w-screen-xl px-4 lg:px-0">
            <!-- Logos -->
            <img src="images/Atout_France.png" alt="Logo 1" class="h-16 md:h-20">
            <img src="images/TIDS.png" alt="Logo 2" class="h-16 md:h-20">
            <img src="images/ETOA.png" alt="Logo 3" class="h-12 md:h-16">
            <img src="images/IATA.png" alt="Logo 4" class="h-12 md:h-16">
        </div>
    </section>
    <!-- Section Vidéo -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-0">
            <h2 class="text-3xl font-bold mb-4">Voyager mieux, moins cher</h2>
            <p class="text-lg text-gray-600 mb-8">
                Le rêve de voyager plus souvent, dans des hôtels magnifiques, tout en payant moins cher ne sera jamais accessible sur les sites tout public qui dominent le marché. Travel Advantage met tout en œuvre pour vous faire toucher ce rêve.
            </p>
            
            <!-- Intégration de la vidéo YouTube avec hauteur ajustée -->
            <div class="relative overflow-hidden rounded-lg shadow-lg">
                <iframe class="w-full" height="500" src="https://www.youtube.com/embed/oj7x4584gWs" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!-- Travel Services Section -->
    <section class="travel-services-section py-8 md:py-12 mx-auto max-w-screen-xl">
        <h2 class="text-center text-3xl md:text-4xl font-bold">Votre site de voyages exclusif</h2>
        <p class="text-center text-gray-600 mb-8 text-lg">Une adhésion pour tous vos besoins de voyages</p>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 md:gap-8 container mx-auto px-4 lg:px-0">
            <div class="service-item">
                <img src="images/hotels.jpg" alt="Hôtels" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">HÔTELS</h3>
            </div>
            <div class="service-item">
                <img src="images/resorts.jpg" alt="Resorts" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">RESORTS</h3>
            </div>
            <div class="service-item">
                <img src="images/flights.jpg" alt="Vols" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">VOLS</h3>
            </div>
            <div class="service-item">
                <img src="images/LOCATIONS DE VOITURES.jpg" alt="Locations de Voitures" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">LOCATIONS DE VOITURES</h3>
            </div>
            <div class="service-item">
                <img src="images/transfers.jpg" alt="Transferts" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">TRANSFERTS</h3>
            </div>
            <div class="service-item">
                <img src="images/ACTIVITÉS.jpg" alt="Activités" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">ACTIVITÉS</h3>
            </div>
            <div class="service-item">
                <img src="images/MALL.jpg" alt="Lifestyle Mall" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">LIFESTYLE MALL</h3>
            </div>
            <div class="service-item">
                <img src="images/life experiences.jpg" alt="Life Experiences" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">LIFE EXPERIENCES</h3>
            </div>
            <div class="service-item">
                <img src="images/TRANSPORT TERRESTRE.jpg" alt="Transports Terrestres" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">TRANSPORTS TERRESTRES</h3>
            </div>
            <div class="service-item">
                <img src="images/CROISIÈRES.jpg" alt="Croisières" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">CROISIÈRES</h3>
            </div>
            <div class="service-item">
                <img src="images/Séjours.jpg" alt="Séjours" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">SÉJOURS</h3>
            </div>
            <div class="service-item">
                <img src="images/Tikets.jpg" alt="Billets" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">BILLETS</h3>
            </div>
            <div class="service-item">
                <img src="images/flash sals.jpg" alt="Offres Flash" class="rounded-lg">
                <h3 class="text-center mt-2 font-semibold">OFFRES FLASH</h3>
            </div>
        </div>

    </section>

    <!-- Member Benefits Section -->
    <section class="py-16">
        <div class="container mx-auto text-center max-w-screen-xl">
            <p class="text-blue-400 text-lg mb-4">Profitez du style de vie de vos rêves</p>
            <h2 class="text-4xl font-bold mb-8">Découvrez vos avantages en tant que Membre !</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 lg:px-0">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 1.jpg" alt="Icon économies membres" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Importantes économies Membres</h3>
                    <p class="text-gray-600 mb-4">Débloquez des offres négociées sur des hôtels de grande marque dans vos destinations préférées.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 2.jpg" alt="Icon Lifestyle Mall" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Lifestyle Mall</h3>
                    <p class="text-gray-600 mb-4">Des économies considérables sur un large choix de grandes marques!</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 3.jpg" alt="Icon Life Experiences" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Life Experiences®</h3>
                    <p class="text-gray-600 mb-4">Créez des souvenirs impérissables grâce à nos Life Experiences®!</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 4.jpg" alt="Icon Points Fidélité" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Points fidélité</h3>
                    <p class="text-gray-600 mb-4">Gagnez chaque mois des points fidélité et utilisez-les pour vos prochains voyages ou pour vos achats dans le Lifestyle Mall!</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 5.jpg" alt="Icon Crédits Voyage" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Crédits Voyage!</h3>
                    <p class="text-gray-600 mb-4">Cumulez des Crédits voyages et appliquez-les sur vos futures réservations.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 6.jpg" alt="Icon Guest Pass" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Guest Pass</h3>
                    <p class="text-gray-600 mb-4">Invitez d'autres personnes à utiliser la plateforme et gagnez des récompenses.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 6.jpg" alt="Icon Guest Pass" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">150 % Garantie Meilleur Prix</h3>
                    <p class="text-gray-600 mb-4">Assurez-vous de toujours payer le meilleur prix pour vos réservations.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/icone 6.jpg" alt="Icon Guest Pass" class="h-16 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">Réservation en Ligne 24/7</h3>
                    <p class="text-gray-600 mb-4">Réservez vos séjours ou activités en ligne, à tout moment, 24/7.</p></p>
                    <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">En savoir plus</a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Membership Plans Section -->
    <section class="py-16">
        <div class="container mx-auto text-center max-w-screen-xl">
            <p class="text-blue-400 text-lg mb-4">Commencez à profiter du style de vie de vos rêves dès aujourd'hui</p>
            <h2 class="text-4xl font-bold mb-8">Choisissez une formule d'adhésion et commencez à faire des économies !</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4 lg:px-0">
                <!-- Card 1: Guest -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/GUEST.png" alt="Guest Card" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">GUEST</h3>
                    <p class="text-3xl font-bold mb-2">GRATUIT !</p>
                    <p class="text-sm text-gray-500 mb-4">Activation 0 $</p>
                    <ul class="text-left mb-6">
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Accès aux hôtels</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Support 24/7</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Gagnez des Crédits voyages</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Recommandez de nouveaux Membres</li>
                    </ul>
                    <div class="text-center mb-4">
                        <span class="block font-bold text-lg">GUEST PASS</span>
                        <span class="text-blue-500">10 immédiatement</span>
                    </div>
                    <a href="#" class="block bg-teal-500 hover:bg-teal-700 text-white py-3 px-6 rounded-lg">Inscription Guest</a>
                </div>

                <!-- Card 2: VIP -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/VIP.jpg" alt="VIP Card" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">VIP</h3>
                    <p class="text-3xl font-bold mb-2">19,97 $/mois</p>
                    <p class="text-sm text-gray-500 mb-4">+ Activation 20 $</p>
                    <ul class="text-left mb-6">
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Accès étendu à la plateforme</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Réductions importantes sur les hôtels</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Garantie meilleur prix 150 %</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> 1 voyageur additionnel</li>
                    </ul>
                    <div class="text-center mb-4">
                        <span class="block font-bold text-lg">GUEST PASS</span>
                        <span class="text-blue-500">15 immédiatement + 3 par mois</span>
                    </div>
                    <a href="#" class="block bg-teal-500 hover:bg-teal-700 text-white py-3 px-6 rounded-lg">Inscription VIP</a>
                </div>

                <!-- Card 3: Plus -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/PLUS.png" alt="Plus Card" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">PLUS</h3>
                    <p class="text-3xl font-bold mb-2">59,97 $/mois</p>
                    <p class="text-sm text-gray-500 mb-4">+ Activation 60 $</p>
                    <ul class="text-left mb-6">
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Toute l'offre VIP</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Davantage de Guest Pass</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Accès aux Life Experiences®</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Accès au Lifestyle Mall</li>
                        <li><br></li>
                    </ul>
                    <div class="text-center mb-4">
                        <span class="block font-bold text-lg">GUEST PASS</span>
                        <span class="text-blue-500">25 immédiatement + 10 par mois</span>
                    </div>
                    <a href="#" class="block bg-teal-500 hover:bg-teal-700 text-white py-3 px-6 rounded-lg">Inscription Plus</a>
                </div>

                <!-- Card 4: Elite -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="images/ELITE.png" alt="Elite Card" class="h-24 mx-auto mb-4">
                    <h3 class="text-xl font-semibold mb-2">ELITE</h3>
                    <p class="text-3xl font-bold mb-2">119,97 $/mois</p>
                    <p class="text-sm text-gray-500 mb-4">+ Activation 120 $</p>
                    <ul class="text-left mb-6">
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Toute l'offre PLUS</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> Offres exclusives Elite</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> 4 voyageurs additionnels</li>
                        <li class="flex items-center mb-2"><span class="text-blue-500 mr-2">✔</span> 120 Points fidélité</li>
                        <li><br></li>
                    </ul>
                    <div class="text-center mb-4">
                        <span class="block font-bold text-lg">GUEST PASS</span>
                        <span class="text-blue-500">50 immédiatement + 20 par mois</span>
                    </div>
                    <a href="#" class="block bg-teal-500 hover:bg-teal-700 text-white py-3 px-6 rounded-lg">Inscription Elite</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="py-16">
        <div class="container mx-auto max-w-screen-xl">
            <p class="text-blue-400 text-lg mb-4 text-center">Nos témoignages</p>
            <h2 class="text-4xl font-bold mb-8 text-center">Quelques mots de nos Membres</h2>

            <!-- Testimonial Slides -->
            <div class="testimonial-slide active-slide">
                <div class="md:flex items-center">
                    <!-- Testimonial Text -->
                    <div class="md:w-2/3 text-left">
                        <div class="flex items-center mb-4">
                            <span class="text-yellow-500 mr-2">★★★★★</span>
                        </div>
                        <p class="text-lg text-gray-600 italic mb-6">
                            “Merci à Travel Advantage de m'avoir permis de vivre un grand rêve, celui de voyager avec des partenaires tous aussi géniaux les uns que les autres ! Cela fait 2 ans que j'utilise la plateforme, et la Life Experience à Malaga a changé ma vie.”
                        </p>
                        <div class="flex items-center">
                            <img src="images/temoi 1.jpg" alt="Loïc C." class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">Loïc C.</p>
                                <p class="text-gray-500 text-sm">Membre</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Photo -->
                    <div class="md:w-1/3 flex justify-center items-center">
                        <img src="images/temoi 1.jpg" alt="Loïc C." class="rounded-lg w-48 h-48 object-cover">
                    </div>
                </div>
            </div>

            <div class="testimonial-slide">
                <div class="md:flex items-center">
                    <!-- Testimonial Text -->
                    <div class="md:w-2/3 text-left">
                        <div class="flex items-center mb-4">
                            <span class="text-yellow-500 mr-2">★★★★★</span>
                        </div>
                        <p class="text-lg text-gray-600 italic mb-6">
                            “Cette plateforme m'a ouvert les portes des meilleures expériences que je n'aurais jamais pu imaginer. Merci à Travel Advantage pour toutes ces opportunités !”
                        </p>
                        <div class="flex items-center">
                            <img src="images/temoi 2.jpg" alt="Sara B." class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <p class="font-bold">Sara B.</p>
                                <p class="text-gray-500 text-sm">Membre</p>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Photo -->
                    <div class="md:w-1/3 flex justify-center items-center">
                        <img src="images/temoi 2.jpg" alt="Sara B." class="rounded-lg w-48 h-48 object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="bg-gradient-to-r from-blue-600 to-teal-400 py-12">
        <div class="container mx-auto flex justify-between items-center max-w-screen-xl">
            <div class="text-white text-4xl font-bold">
                DÉCOUVREZ LE MONDE AVEC STYLE.<br>
                DEVENEZ MEMBRE DÈS AUJOURD'HUI !
            </div>
            <a href="#" class="bg-white text-blue-600 hover:bg-gray-100 font-semibold py-3 px-6 rounded-lg shadow-lg">
                Rejoignez-nous maintenant →
            </a>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="relative">
            <img src="images/city-6833167_1920.jpg" alt="Video Thumbnail" class="video-thumbnail" id="openModal">
            <button class="play-button">&#9658;</button>
        </div>
    </section>
    
    <!-- Footer -->
    
    <!-- Include Footer -->

    <script>
        // Modal script
        const modal = document.getElementById("videoModal");
        const openModal = document.getElementById("openModal");
        const closeModal = document.getElementById("closeModal");

        openModal.addEventListener("click", function () {
            modal.style.display = "block";
        });

        closeModal.addEventListener("click", function () {
            modal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });

        // Testimonial
        let currentSlide = 0;
        const slides = document.querySelectorAll('.testimonial-slide');
        const totalSlides = slides.length;

        document.getElementById('nextBtn').addEventListener('click', () => {
            slides[currentSlide].classList.remove('active-slide');
            currentSlide = (currentSlide + 1) % totalSlides;
            slides[currentSlide].classList.add('active-slide');
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            slides[currentSlide].classList.remove('active-slide');
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            slides[currentSlide].classList.add('active-slide');
        });
    </script>
</body>

</html>
