<meta name="description" content="LoxRP - Spielerliste">
<meta name="author" content="Nico Pergande">
<link rel="shortcut icon" href="server.png" />
<style> @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap'); </style>
<link rel="stylesheet" href="./style.css">


<section id="head">

</section>


<br>
<br>
<br>

<section id="list">

</section>

<script>
    setInterval(reload, 3000)

    function reload() {
        $('#head').load('head.php')fadeIn("Slow");
        $('#list').load('playerlist.php')fadeIn("Slow");
    }
</script>

<hr>
<p class="bottom">powerd by <a class="bottom" href="https://nico-pergande.dev">nico-pergande.dev</a></p>
<hr>