function setUsername() {
    localStorage.username = localStorage.username ? localStorage.username : prompt('Bitte gib deinen Namen ein: ','Gast');
    document.querySelector('input[name=name]').value = localStorage.username;
}
onload = setUsername;