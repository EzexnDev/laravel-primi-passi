<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('array')

  <head>
    <meta charset="utf-8" />
    <title>ex-dischi-musicali</title>

    <!-- style -->
    <link
      href="https://fonts.googleapis.com/css?family=Lato&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div id="root">
      <header>
        <div class="container">

          <img src="img/logo.png" alt="logo"/>

        </div>


      </header>

      <div class="cds-container container">
        <!-- Disco ad esempio -->

        @foreach ($data[0] as $cd)

          <div class="cd">
            <img
            src="{{$cd['poster']}}"
            alt=""
          />

          <h3>{{$cd['title']}}</h3>
          <span class="author">{{$cd['author']}}</span>
          <span class="year">{{$cd['year']}}</span>
          <span>{{$cd['genre']}}</span>
         
        </div>

        @endforeach
      </div>
    </div>
  </body>
</html>
