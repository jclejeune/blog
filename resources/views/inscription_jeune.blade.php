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
            <div class="col-md-9 d-flex align-items-start justify-content-around">
                <span class="col"><a href="{{ url('/') }}">Home</a></span>
                <span class="col"><a href="{{ url('/inscription_jeune') }}">Inscription Jeunes</a></span>
                <span class="col"><a href="{{ url('/inscription_entreprise') }}">Inscription Entreprises</a></span>
                <span class="col"><a href="{{ url('/formulaire') }}">test_mail</a></span>
                <span class="col"><a href="{{ url('/posts') }}">Admin</a></span>
            </div>
        </div>
        <nav id="banner" class="d-flex align-items-start align-self-center justify-content-around"></nav>
        <div class="d-flex flex-column">
            <section class="row d-flex justify-content-around" style="background-color: rgba(255, 255, 255, 0.509)">
                <h2 class="mx-4 p-4">
                    Inscription Jeunes
                </h2>
                <div class="form-group mx-4 p-4">
                    <div x-data="{ formulaireJeune: {}}" x-init="initForm" id="formulaire_jeune">

                        <form @submit.prevent="envoyerFormulaire" class="d-flex flex-column h-50">
                            @csrf
                            <label for="prenom_j">Prénom</label>
                            <input type="text" x-model="formulaireJeune.prenom" id="prenom_j" class="form-control" required>
    
                            <label for="nom_j">Nom</label>
                            <input type="text" x-model="formulaireJeune.nom" name="nom_j" id="nom_j" class="form-control" required>
    
                            <label for="age_j">Age</label>
                            <input type="number" x-model="formulaireJeune.age" name="age_j" id="age_j" class="form-control" required>
    
                            <label for="to_j">Email</label>
                            <input type="email" x-model="formulaireJeune.to" name="to_j" id="to_j" class="form-control" placeholder="utilisateur@example.com" required>
                    
                            <label for="body_j">Message</label>
                            <textarea name="body_j" x-model="formulaireJeune.body" id="body_j" cols="30" rows="10" class="form-control"></textarea>                
                            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
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

    <script>
        function initForm() {
            // Initialisez les champs du formulaire avec des valeurs par défaut si nécessaire
            this.formulaireJeune = {
                prenom: '',
                nom: '',
                age: '',
                from: 'missionlocale@example.com',
                to: '',
                sujet: 'Inscription Jeune',
                body: '',
            };
        }
    
        function envoyerFormulaire() {
            // Imprimez les données du formulaire dans la console
            console.log(JSON.stringify(this.$data.formulaireJeune, null, 2));
            this.$data.formulaireJeune = {
                prenom: '',
                nom: '',
                age: '',
                from: 'missionlocale@example.com',
                to: '',
                sujet: 'Inscription Jeune',
                body: '',
            };
        }
    </script>
</body>

</html>