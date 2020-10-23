<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPT Midterm-Accounts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link"  href="{{url('/')}}">Home</a>
      <a class="nav-link" href="{{url('/users')}}">Users</a>
      <a class="nav-link" href="#">Accounts <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>

<div class="container">
    <h3>Accounts</h3>
    <table class="table table-bordered table-inverse table-hover">
        <thead class="bg-primary">
            <tr>
                <th>Account #</th>
                <th>Account Name</th>
                <th>Intial Investment</th>
                <th>Date Started</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($accounts as $acc):?>
                <tr>
                    <td><?= $acc->id?></td>
                    <td><?= $acc->acct_name?></td>
                    <td><?= $acc->init_invest?></td>
                    <td><?= $acc->start_date?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
</body>