<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<meta charset="utf-8">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Accueil</a>
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
<h1 style="text-align: center">Accueil</h1>

<form action="/CreateGroup/CreateGroup" method="POST">
    <div class="form-group row" style="margin: 2px">
        <label for="example-number-input" class="col-2 col-form-label">Combien de groupe voulez-vous créer :</label>
        <div class="col-1">
            <input class="form-control" type="number" id="example-number-input" name="number" min="2" max="26" required>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
</form>

<!--<form action="/CreateGroup/CreateGroup" method="POST">
    <div class="form-group row" style="margin: 2px">
        <label for="example-number-input" class="col-2 col-form-label">Ajouter un étudiant :</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="checkbox" id="madame" value="option1" checked>
            <label class="form-check-label" for="madame">
                Madame
            </label>
        </div>
        &nbsp
        <div class="form-check">
            <input class="form-check-input" type="radio" name="checkbox" id="monsieur" value="option2">
            <label class="form-check-label" for="monsieur">
                Monsieur
            </label>
        </div>
        <div class="form-group col-1">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NOM">
        </div>
        <div class="form-group col-1">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
        </div>
    </div>
</form>-->