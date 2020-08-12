<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.3/gh-fork-ribbon.min.css" />
    <link rel="stylesheet" href="style.css">
    <title>eltonlaice.com | paymentsds-php-implementation</title>
  </head>
  <body>
    <div class="container">
        <h4>paymentsds-php-implementation (C2B) </h4>
        <div class="row justify-content-center">
            <div class="col-5">
                <form method="POST" action="pagamento.php">
                    <div class="form-group">
                        <label for="celular">Celular No.</label>
                        <input type="tel" class="form-control" id="celular" name="celular" placeholder="84/85XXXXXXX" required>
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor a pagar</label>
                        <input type="number" class="form-control" id="valor" name="valor" value="150" required>
                    </div>

                    <div class="form-group">
                        <label for="valor">Referência No.</label>
                        <input type="number" class="form-control" id="reference" name="reference"  value="<?php echo rand(1, 1000000)?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Pagamento</button>
                    
                    <p id="nota">Nota: Este website é ilustrativo e com propósito educacional e de teste</p>
                    <p>Artigo fonte: <a href="http://eltonlaice.com/paymentsds-integrando-mpesa-em-projecto-php">PaymentsDS: Integrando mpesa em projecto PHP</a></p>
                    <p>Github: <a href="https://github.com/eltonlaice/paymentsds-php-implementation">https://github.com/eltonlaice/paymentsds-php-implementation</a></p>
                </form>   
            </div>
        </div>

    </div>

    <a class="github-fork-ribbon fixed" href="https://github.com/eltonlaice/paymentsds-php-implementation" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a> 
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>