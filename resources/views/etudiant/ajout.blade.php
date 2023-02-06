<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <title>ETUDIANT</title>
    </head>
    <body>
        <div class="container">  
        <a href="" class="btn btn-primary">Liste etudiant</a>
            <div class="card col-md-8 offset-2 mt-3">
                <form action="/store" method="post">
                    @csrf
                    <div class="card-header text-center bg-primary text-white">Ajout etudiant</div>

                    <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control"  placeholder="Nom" name="nom">
                    </div>
                    <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" class="form-control"  placeholder="Prenom" name="prenom">
                    <div class="form-group">
                        <label for="">Semestre</label>
                        <select name="semestre" id="" class="form-control">
                            <option value="">Choisissez un semestre</option>
                            @foreach ($semestre as $s)
                                <option value="{{$s->id}}">{{$s->nom_semestre}}</option>
                                <option value=""></option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Matiere</label>
                        <select name="matiere" id="" class="form-control">
                            <option value="">Choisissez un matiere</option>
                            @foreach ($matiere as $m)
                                <option value="{{$m->id}}">{{$m->nom_matiere}}</option>
                                <option value=""></option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="">Note1</label>
                    <input type="text" class="form-control"  placeholder="note1" name="note1">
                    <div class="form-group">
                    <label for="">Examen</label>
                    <input type="text" class="form-control"  placeholder="Examen" name="examen">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </div>
        </div> 
    </body>
    
</html>
