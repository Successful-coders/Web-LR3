var button = document.getElementById('button'),
    xmlhttp = new XMLHttpRequest();
button.addEventListener('click', function() {
var name = document.getElementById('name').value.replace(/<[^>]+>/g,''),
    comment = document.getElementById('comment').value.replace(/<[^>]+>/g,'');
if(name === '' || comment === '') {
    alert('Заполните все поля!');
    return false;
}
xmlhttp.open('post', 'libs/add_comment.php', true);
xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
xmlhttp.send("name=" + encodeURIComponent(name) + "&comment=" + encodeURIComponent(comment));
});

