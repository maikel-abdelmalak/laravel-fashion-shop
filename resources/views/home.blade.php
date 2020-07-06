<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>clothes</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </head>
    <body>
        <div class="container">
            <table class="table table-dark">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NOME ARTICOLO</th>
                  <th scope="col">PREZZO</th>
                  <th scope="col">GENDER</th>
                  <th scope="col">CODICE</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($all_vestiti as $vestito)
                      <tr>
                        <td> {{$vestito->id}}</td>
                        <td>{{$vestito->article_name}}</td>
                        <td>{{$vestito->prize}}</td>
                        <td>{{$vestito->gender}}</td>
                        <td>{{$vestito->codice_barre}}</td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
        </div>
    </body>
</html>
