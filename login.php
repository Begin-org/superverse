<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superverse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container-login">
        <img src="imgs/logo-superverse.png" class="logo-superverse-login">
        <p class="text-superverse-login">
            O Superverse é um simples jogo de batalhas de habilidades entre mais de 700 heróis e vilões, de diversos
            universos.
        </p>
        <button class="button-login-google" id="login-google">
            <img class="logo-google-button" src="imgs/google-logo.svg">
            <p>login com o google</p>
        </button>
        <p class="mt-3">
            Ou <a href="home.php"><span>jogue sem logar<span></a>
        </p>
        <h3>
            Alguns personagens presentes no Superverse
        </h3>
        <div class="tab-content mt-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-characteres1" role="tabpanel"
                aria-labelledby="pills-characteres1-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/639.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Batman</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10522.jpg"
                            class="img-character-login">
                        <p class="name-character-login">One Punch Man</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/928.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Loki</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-characteres2" role="tabpanel" aria-labelledby="pills-characteres2-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10560.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Indiana Jones</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10878.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Harry Potter</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10404.jpg"
                            class="img-character-login">
                        <p class="name-character-login">James Bond</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-characteres3" role="tabpanel" aria-labelledby="pills-characteres3-tab">
                <div class="tab-characteres">
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10444.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Darth Vader</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/96.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Medusa</p>
                    </div>
                    <div class="character-login">
                        <img src="https://www.superherodb.com/pictures2/portraits/10/100/10330.jpg"
                            class="img-character-login">
                        <p class="name-character-login">Donatello</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres active" id="pills-characteres1-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-characteres1" type="button" role="tab" aria-controls="pills-characteres1"
                    aria-selected="true"></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres" id="pills-characteres2-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-characteres2" type="button" role="tab" aria-controls="pills-characteres2"
                    aria-selected="false"></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="mark-slide-characteres" id="pills-characteres3-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-characteres3" type="button" role="tab" aria-controls="pills-characteres3"
                    aria-selected="false"></button>
            </li>
        </ul>

    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- firebase -->
<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/ui/4.8.0/firebase-ui-auth.js"></script>


<script>
// web app's Firebase configuration
var firebaseConfig = {
    apiKey: "AIzaSyAbd-3X4XFhga065LxJ-iWM2Bj4zlJd3Q0",
    authDomain: "superverse-848e8.firebaseapp.com",
    projectId: "superverse-848e8",
    storageBucket: "superverse-848e8.appspot.com",
    messagingSenderId: "456816756668",
    appId: "1:456816756668:web:cee0d9017e8c5b1e8f4db9"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
var provider = new firebase.auth.GoogleAuthProvider();

$("#login-google").click(function() {

    firebase.auth()
        .signInWithPopup(provider)
        .then((result) => {
            /** @type {firebase.auth.OAuthCredential} */
            var credential = result.credential;
            // This gives you a Google Access Token. You can use it to access the Google API.
            var token = credential.accessToken;
            // The signed-in user info.
            var user = result.user;

            $.ajax({
                url: "utils/storeUid.php",
                method: "POST",
                data: { uid : user.uid },
                dataType: "json"
            }).done(function(){
                location.href = "home.php";
            }).fail(function(jqXHR, textStatus, msg){
                console.log(msg);
            });
           
            // ...
        }).catch((error) => {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            // The email of the user's account used.
            var email = error.email;
            // The firebase.auth.AuthCredential type that was used.
            var credential = error.credential;
            // ...
            console.log(errorMessage);
        });
});
</script>

</html>