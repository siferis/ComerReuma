<?php
    include("comexion.php");
?>
<script>
<<<<<<< HEAD
<<<<<<< HEAD
  function  crearUsuario(email, password) {
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
        //Handle Errors here.
      //  var errorCode = error.code;
       var errorMessage = error.message;
      alert("error = "+ errorMessage+" "+" usuarios"+ " "+ email)
        alert(email)
        alert(password)
        // ...
    });
    //    alert("listo");
    };
</script>
=======
    //crea usuarion en firebase con correo electronico;
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
    //funcion para logearte con correo y contraseña
    function logIn(email, password) {
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            aler("error = " + errorMessage + " password" + email + " email " + password);
            // ...
        });
        //esta funcion revisa si el ingreso fue correcto, y obtiene los datos del usuario
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
    //esta funcion hace un logOut
    function logOut() {
        firebase.auth().signOut().then(function () {
            // Sign-out successful.
        }).catch(function (error) {
            // An error happened.
        });
    }
</script>
>>>>>>> 934fad343d30d874d9355e62ea683cd9d7c8e9b7
=======
  function  crearUsuario(email, password) {
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
        //Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        alert("error = "+ errorMessage);
        alert("nicierto");
        // ...
    });
        alert("listo");
    };
</script>
>>>>>>> melgarOtra
