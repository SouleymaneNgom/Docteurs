<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<style>
body{
    background-color:  #6574cd ;
}

</style>
  </head>
  <body>
    <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
      <h2>Prendre Rendez Vous avec ton Docteur</h2><br/>
      <form method="post" action="{{url('datepicker')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-12">
            <label for="Name">Nom:</label>
            <input type="text" class="form-control" name="nom">
          </div> 
          <div class="form-group col-md-12">
            <label for="Name">Prénom:</label>
            <input type="text" class="form-control" name="prenom">
          </div>
          <div class="form-group col-md-12">
            <label for="Name">Email:</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group col-md-12">
            <label for="Name">Adresse:</label>
            <input type="text" class="form-control" name="adresse">
          </div>
          <div class="form-group col-md-12">
            <label for="Name">Téléphone:</label>
            <input type="text" class="form-control" name="telephone">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-12">
            <strong>Date du Rendez Vous : </strong>
            <input class="date form-control"  type="text" id="datepicker" name="date">
         </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top-right:20px">
            <button type="submit" class="btn btn-success">Envoyer</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'dd-mm-yyyy'
         });
    </script>
  </body>
</html>