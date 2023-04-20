<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .table-primary{
            cursor: pointer;
        }
        a{
            text-decoration: none;
            color:black;
        }
    </style>
    <title>Laravel fullstack</title>
</head>
<body>
    <main>
        
        <table class="table table-striped table-dark table-hover" >
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dátum</th>
                    <th>Típus</th>
                    <th>Időtartam</th>
                    <th>Műveletek</th>
                </tr>
            </thead>        
            <tbody>
                @foreach ($trainings as $training)
                    <tr>
                        <td> {{ $training->id }}</td>
                        <td> {{ $training->created_at }}</td>
                        <td> {{ $training->name }}</td>
                        <td> {{ $training->duration }}</td>
                        <td class="text-center">
                            <a href="/update/{{$training->id}}" class="btn btn-warning">Módosítás</a>
                            <form action="/api/training/{{$training->id}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" >Törlés</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=4 >
                        Összesen  edzés
                    </td>
                    <td class="table-primary text-center">
                       <a href="/newtraining"> Új edzés rögzítése</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>
</body>
</html>