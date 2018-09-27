<?php
    include("comexion.php");
?>
<script>
    crearUsuario(email, password) {
        firebase.auth().createUserWithEmailAndPassword(email, password).catch(function (error) {
            // Handle Errors here.
            var errorCode = error.code;
            var errorMessage = error.message;
            alert("error = "+ errorMessage)
            // ...
        });
        alert("listo");
    }; 
</script>