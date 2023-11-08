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
                    <form action="#" method="post" class="d-flex flex-column">
                        @csrf
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jeune_inscription"
                                id="jeune_inscription">
                            <label class="form-check-label" for="jeune_inscription">
                                Jeune
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="entreprise_inscription"
                                id="entreprise_inscription" checked>
                            <label class="form-check-label" for="entreprise_inscription">
                                Entreprise
                            </label>
                        </div>

                        <div id="formulaire_jeune">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" required>
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" required>
                            <label for="usermail">Email</label>
                            <input type="email" name="usermail" id="usermail" class="form-control"
                                placeholder="utilisateur@example.com" value="utilisateur@example.com">
                            <label for="age">Age</label>
                            <input type="number" name="age" id="age" class="form-control" required>
                            <label for="from">From:</label>
                            <input type="email" name="from" id="from" class="form-control"
                                placeholder="missionlocale@example.com" value="missionlocale@example.com"
                                style="inputfield.enabled = false;" readonly>
                            <label for="to">To:</label>
                            <input type="email" name="to" id="to" class="form-control"
                                placeholder="utilisateur@example.com" value="utilisateur@example.com"
                                style="inputfield.enabled = false;" readonly>
                            <label for="sujet">Sujet</label>
                            <input type="text" name="sujet" id="sujet" class="form-control" required
                                placeholder="Inscription" value="Inscription Jeune" style="inputfield.enabled = false;"
                                readonly>
                            <label for="body">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>

                            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                        </div>

                        <div id="formulaire_entreprise">
                            <label for="nom">Nom de l'entreprise</label>
                            <input type="text" name="nom" id="nom" class="form-control" required>
                            <label for="usermail">Email</label>
                            <input type="email" name="usermail" id="usermail" class="form-control"
                                placeholder="entreprise@example.com" value="entreprise@example.com">

                            <label for="from">From:</label>
                            <input type="email" name="from" id="from" class="form-control"
                                placeholder="missionlocale@example.com" value="missionlocale@example.com"
                                style="inputfield.enabled = false;" readonly>
                            <label for="siret">Siret</label>
                            <input type="text" name="siret" id="siret" class="form-control" required>
                            <label for="to">To:</label>
                            <input type="email" name="to" id="to" class="form-control"
                                placeholder="entreprise@example.com" value="entreprise@example.com"
                                style="inputfield.enabled = false;" readonly>
                            <label for="sujet">Sujet</label>
                            <input type="text" name="sujet" id="sujet" class="form-control" required
                                placeholder="Inscription" value="Inscription Jeune"
                                style="inputfield.enabled = false;" readonly>
                            <label for="body">Body</label>
                            <textarea name="body" id="body" cols="30" rows="10" class="form-control" required></textarea>
                            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                        </div>
                    </form>

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
