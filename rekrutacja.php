<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" type="text/css" href="css/rekrutacja.css">
    <title>Rekrutacja</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <style type="text/css">
        body {

            background-color: #f9f5e0;

            -webkit-animation: fadein 1.3s;
            -moz-animation: fadein 1.3s;
            -ms-animation: fadein 1.3s;
            -o-animation: fadein 1.3s;
            animation: fadein 1.3s;
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        @-moz-keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        @-webkit-keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        @-ms-keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        @-o-keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>

</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="pracownik.php">System obsługi pracowników</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="rekrutacja.php">Rekrutacja<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>



    <h1>Witamy na stronie rekrutacji pracowników</h1>
    <h2>Aby dołączyć do naszego zespołu wypełnij poniższy formularz i załącz plik w formacie .pdf z CV</h2>


    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Adres E-Mail</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Imię</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Imię">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nazwisko</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nazwisko">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Skąd dowiedziałeś/aś się o możliwości dołączenia do naszego zespołu?</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Wybierz</option>
                <option>Reklama</option>
                <option>Znajomi</option>
                <option>Ulotki</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Oczekiwana pensja w PLN w przedziale:</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">

                <option>1500-2000</option>
                <option>2000-2500</option>
                <option>2500-3000</option>
                <option>3000 i więcej</option>

            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Krótka informacja o sobie, co zmotywowało Panią/Pana do dołączenia
                do naszego zespołu.</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Załącz plik w formacie .pdf z CV</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <button type="button" class="btn btn-outline-secondary">Wyślij</button>
        </div>

    </form>

</body>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

</html>