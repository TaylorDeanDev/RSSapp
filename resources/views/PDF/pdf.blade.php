<!DOCTYPE html>
<html>
<head>
    <title>PDF Results</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>

      <div class="container mt-4">
        <div class="card">
          <div class="card-header text-center">
            <h3 class="font-weight-bold">{{ $feed->get_title() }}</h3>
            <p>{{ $feed->get_description() }}</p>
          </div>
          <div class="card-body">
            @foreach ($feed->get_items() as $item)
            <div class="card">
              <div class="card-header text-center font-weight-bold">
                <a href="{{ $item->get_link() }}">{{ $item->get_title() }}</a>
              </div>
              <div class="card-body">
                <center>
                  <img src="{{ $item->get_enclosure()->link }}" alt="" width="{{ $item->get_enclosure()->width * 2 }}" height="{{ $item->get_enclosure()->height * 2 }}">
                </center>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </body>
</html>
