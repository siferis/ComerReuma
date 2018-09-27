function checkAuth() {
    firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
            // User is signed in.
        } else {
            alertify
            .alert("Sólo los usuarios registrados pueden ver ésta página.", function(){
                alertify.message('Regresar al inicio');
            });
            setTimeout(() => {
                window.location.replace('index.php');
            }, 2000); 
        }
    });
}