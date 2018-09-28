<?php
    include("comexion.php");
?>
<script>
    function crearUsuario(email, password) {
        firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
            //Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            alert("error = " + errorMessage + +email + "  " + password)
            // ...
        });
        alert("listo" + email + "  " + password + firebase.auth().currentUser);
    };

    function logIn(email, password) {
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            aler("error = " + errorMessage + " password" + email + " email " + password);
            // ...
        });
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                // User is signed in.
                var displayName = user.displayName;
                var email1 = user.email;
                var emailVerified = user.emailVerified;
                var photoURL = user.photoURL;
                var isAnonymous = user.isAnonymous;
                var uid = user.uid;
                var providerData = user.providerData;
                // ...
                alert("logeado " + email1)
            } else {
                alert("contraeña incorrecta");
                // User is signed out.
                // ...
            }
        });
    }

    function logOut() {
        firebase.auth().signOut().then(function () {
            // Sign-out successful.
        }).catch(function (error) {
            // An error happened.
        });
    }
</script>