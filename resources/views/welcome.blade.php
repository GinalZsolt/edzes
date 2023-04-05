<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
                </tr>
            </thead>        
            <tbody>
                @foreach ($trainings as $training)
                    <td> {{ $training->id }}</td>
                    <td> {{ $training->created_at }}</td>
                    <td> {{ $training->type }}</td>
                    <td> {{ $training->duration }}</td>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=3 >
                        Összesen  edzés
                    </td>
                    <td o class="table-primary text-center">
                        Új edzés rögzítése
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>
</body>
</html>