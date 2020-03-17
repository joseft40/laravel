<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-flow: wrap;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .text-left {
              text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .table {
              width: 100%;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            header {
              background-color: #636b6f;
              height: 30px;
              padding-top: 5px;
              position: fixed;
              top: 0;
              width: 100%;
            }

            .footer {
              background-color: #636b6f;
              padding: 30px;
              width: 100%;
            }

            header .links > a,
            .footer .links > a {
              color: #ffffff;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <header>
              <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
              </div>
            </header>

            <div class="content">
              <div class="col-md-12 mx-auto">
                <h2 class="text-left">Client </h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Email</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Status</th>
                      <th scope="col">Type of Client</th>
                      <th scope="col">Location</th>
                      <th scope="col">Rif</th>
                      <th scope="col">Operación</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">{{ $client->id}}</th>
                      <td>{{ $client->name }}</td>
                      <td>{{ $client->last_name }}</td>
                      <td>{{ $client->email }}</td>
                      <td>{{ $client->phone }}</td>
                      <td>{{ $client->type_client }}</td>
                      <td>{{ $client->status }}</td>
                      <td>{{ $client->location }}</td>
                      <td>{{ $client->rif }}</td>
                      <td>
                       <a href="{{ route('clients.edit', $client) }}" class="btn btn-primary">Editar</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <footer class="footer">
              <div class="links">
                <a href="#">Desarrollado por @jpuentes</a>
              </div>
            </footer>
        </div>
    </body>
</html>
