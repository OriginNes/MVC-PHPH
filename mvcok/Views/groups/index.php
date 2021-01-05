<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="groups/index"><i>Liste des étudiants</i></a>
            </li>
        </ul>
    </div>
</nav>

<h1 style="text-align: center">Voici la liste des étudiants</h1>

<div class="col-4">
<table id="example" class="table table-striped table-bordered" style="width: 500px">
    <thead>
    <tr>
        <th>Civilité</th>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>
    </thead>
    <?php foreach ($groups as $student): ?>
        <tbody>
        <tr>
            <td> <?php echo $student['Civilité'] ?> </td>
            <td> <?php echo $student['Nom'] ?> </td>
            <td> <?php echo $student['Prénom'] ?> </td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>
</div>