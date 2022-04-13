<!DOCTYPE html>
<html>
<head>
    <title>RSS Feed</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>

      <div class="container mt-4">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        <div class="card">
          <div class="card-header text-center">
            <h3 class="font-weight-bold">{{ $feed->get_title() }}</h3>
            <p>{{ $feed->get_description() }}</p>
            <a href="{{ $url }}">Site</a>
            <form name="pdf-form" id="pdf-form" method="post" action="/pdf">
             @csrf
              <div class="form-group">
                <input type="text" id="url" name="url" class="form-control" required="true" value="{{ $url }}" hidden>
              </div>
              <button type="submit" class="btn btn-primary">Generate PDF</button>
            </form>
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
