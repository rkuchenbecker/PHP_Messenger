function setUsername() {
    localStorage.username = localStorage.username ? localStorage.username : prompt('Bitte gib deinen Namen ein: ','Gast');
    document.querySelector('input[name=name]').value = localStorage.username;
}
onload = setUsername;

function getUsername() {
    var name = localStorage.username
    $.post( "eingabe.php" , {name: name} );
}

setInterval(function() {
    $.ajax("index.html")
}, 5000)