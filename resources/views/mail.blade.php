<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <div class="container" id="menu">
        <div class="d-flex flex-row w-100">
            <div class="col-md-3" x-data="{
                date: '',
                updateDateTime() {
                    moment.locale();
                    setInterval(() => {
                        this.date = moment().format('HH:mm');
                    }, 1000);
                }
            }" x-init="updateDateTime()">
                <span x-text="date"></span>
            </div>
            <div class="col-md-6 d-flex align-items-start justify-content-around">
                <span class="col"><a href="{{ url('/') }}">Home</a></span>
                <span class="col"><a href="{{ url('/mail') }}">Inscription</a></span>
            </div>
            <div class="col-md-3">
                <a href="{{ url('/posts') }}">
                    <span class="fw-bold fs-4 text-center">Admin</span>
                </a>
            </div>
        </div>
        <nav id="banner" class="d-flex align-items-start align-self-center justify-content-around"></nav>
        <div class="d-flex flex-column">
            <section class="row d-flex justify-content-around" style="background-color: rgba(255, 255, 255, 0.509)">
                <h2 class="mx-4 p-4">
                    Pour vous inscrire..
                </h2>



                <div class="form-group mx-4 p-4">
                    <div x-data="{ user: 'Selectionner une catégorie' }">
                        <form action="">
                            <select x-model="user" class="form-control my-1">
                                <option value="Selectionner une catégorie">Selectionner une catégorie</option>
                                <option value="jeune">Public jeune</option>
                                <option value="entreprise">Entreprises</option>
                            </select>
                            <div id="formulaire_jeune" x-show="user === 'jeune'">
                                <form action="/mail" method="get" class="d-flex flex-column h-50">
                                    @csrf
                                    <label for="prenom_j">Prénom</label>
                                    <input type="text" name="prenom_j" id="prenom_j" class="form-control" required>
                                    <label for="nom_j">Nom</label>
                                    <input type="text" name="nom_j" id="nom_j" class="form-control" required>
                                    <label for="age_j">Age</label>
                                    <input type="number" name="age_j" id="age_j" class="form-control" required>
                                    <label for="from_j">From:</label>
                                    <input type="email" name="from_j" id="from_j" class="form-control"
                                        placeholder="missionlocale@example.com" value="missionlocale@example.com" readonly>
                                    <label for="to_j">To:</label>
                                    <input type="email" name="to_j" id="to_j" class="form-control"
                                        placeholder="utilisateur@example.com">
                                    <label for="sujet_j">Sujet</label>
                                    <input type="text" name="sujet_j" id="sujet_j" class="form-control" required
                                        placeholder="Inscription" value="Inscription Jeune" readonly>
                                    <label for="body_j">Message</label>
                                    <textarea name="body_j" id="body_j" cols="30" rows="10" class="form-control"></textarea>
                                    <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                                </form>
                            </div>
                            <div id="formulaire_entreprise" x-show="user === 'entreprise'">
                                <form action="/mail" method="get" class="d-flex flex-column h-50">
                                    @csrf
                                    <label for="nom_e">Nom de l'entreprise</label>
                                    <input type="text" name="nom_e" id="nom_e" class="form-control" required>
                                    <label for="siret_e">Siret</label>
                                    <input type="number" name="siret_e" id="siret_e" class="form-control" required>
                                    <label for="from_e">From:</label>
                                    <input type="email" name="from_e" id="from_e" class="form-control"
                                        placeholder="missionlocale@example.com" value="missionlocale@example.com" readonly>
                                    <label for="to_e">To:</label>
                                    <input type="email" name="to_e" id="to_e" class="form-control"
                                        placeholder="entreprise@example.com">
                                    <label for="sujet_e">Sujet</label>
                                    <input type="text" name="sujet_e" id="sujet_e" class="form-control" required
                                        placeholder="Inscription" value="Inscription entreprise" readonly>
                                    <label for="body_e">Message</label>
                                    <textarea name="body_e" id="body_e" cols="30" rows="10" class="form-control" required></textarea>
                                    <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

        </div>
        <footer class="py-4 mt-4">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6 span-md-3 col-xs-12" style="color: rgb(255, 255, 255)">
                    <h1 class="text-center">Insersite</h1>
                    <p>53 Av Paul Raoult</p>
                    <p>78130 Les Mureaux</p>
                </div>
            </div>
            <div id="map"></div>
            <div>
                <p style="color: rgb(255, 255, 255)">JC @ insersite 2023</p>
            </div>

        </footer>
    </div>

    <script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>
