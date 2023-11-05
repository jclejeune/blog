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
    <nav class="nav navbar row text-light" style="background-color: rgba(87, 87, 87, 0.5)">
        <div class="row w-25 m-0 p-0" x-data="{
                date: '',
                updateDateTime() {
                    moment.locale();
                    setInterval(() => {
                        this.date = moment().format('HH:mm');
                    }, 1000);
                }
            }" x-init="updateDateTime()">
            <h1 class="text-center" x-text="date"></h1>
        </div>
        <div class="row w-75 m-0 p-0">
            <a href="{{ url('/posts') }}">
                <h1 class="text-center" value="Voir mon blog" style="color: white;text-decoration: none;">Mon Blog</h1>
            </a>
        </div>
    </nav>
    <main class="row m-0 p-0" style="background-color: rgba(255, 255, 255, 0.5)">
        <div class="row col-md-3 col-xs-12 m-0 p-0">
            <div class="p-4">
                <ul>
                    <li><a href="{{ url('/posts') }}">Mon Blog</a></li>
                    <li><a href="{{ route('posts.index') }}">Retour</a></li>
                    <li>Menu 3</li>
                    <li>Menu 4</li>
                </ul>
            </div>
        </div>

        <div class="row col-md-9 col-xs-12 m-0 p-0">
            <div class="p-4">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni veniam, maiores saepe eveniet accusamus dicta corporis quae quas. Sit, unde optio. Aperiam facilis voluptas similique nihil temporibus! Libero, similique minima!</div>
       </div>
        

    </main>
    <footer class="fixed-bottom" style="margin-top:20vh;background-color: rgb(87, 87, 87, 0.5)">
        <p class="card-text text-light">JC at insersite 2023</p>
    </footer>

</body>

</html>