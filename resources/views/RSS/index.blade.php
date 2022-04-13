<!DOCTYPE html>
<html>
<head>
    <title>RSS Feed Reader</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
        <div class="container mt-4">
          <div class="card">
            <div class="card-header text-center font-weight-bold">
              <h2>Taylor's RSS Feed Reader<h2>
            </div>
          </div>
        <div class="card">
          <div class="card-header text-center font-weight-bold">
            Time To Grab Some RSS Data!
          </div>
          <div class="card-body">
            <form name="rss-form" id="rss-form" method="post" action="/rss">
             @csrf
              <div class="form-group">
                <label for="url">Input RSS URL</label>
                <input type="text" id="url" name="url" class="form-control" required="true">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </body>
</html>
