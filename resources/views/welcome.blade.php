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
                <div class="m-3 p-3 card col-md-3  col-xs-12 ">
                    <p class="text-start">
                        TEXT DEMO
                    </p>
                </div>

                <div class=" m-3 p-3 card col-md-4  col-xs-12 ">
                    <p class="text-start">
                        TEXT DEMO
                    </p>
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


    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
</body>

</html>
