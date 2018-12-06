
<?php
  if(!isset($_SESSION)) {session_start();}
  if(!isset($_SESSION["logged_in"])) header("Location: index.php");
  if($_COOKIE["uprawnienia"] != "Z") header("Location: wyloguj.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="css/zarzad.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <style>
        .clickme{
            opacity:0;
            margin-top:30px;
        }
    </style>
</head>

<body>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="pracownik.php">Panel Zarządu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-outline-primary" href="index.php?strona=wyloguj.php" role="button">Wyloguj</a>

                </form>
            </div>
        </nav>

        <nav class="nav nav-pills flex-column flex-sm-row">
            <a class="flex-sm-fill text-sm-center nav-link active" data-toggle="list" href="#panel" role="tab">Dane</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-toggle="list" href="#listapracownikow" role="tab">Lista
                pracowników</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-toggle="list" href="#szkolenia" role="tab">Szkolenia</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-toggle="list" href="#wnioski" role="tab">Wnioski</a>
            <a class="flex-sm-fill text-sm-center nav-link" data-toggle="list" href="#preferencje" role="tab">Konto</a>
        </nav>



        <div class="tab-content">

            <div class="tab-pane fade show active" id="panel" role="tabpanel">
                <ul class="list-group">
                    <li class="list-group-item"><b>ID karty: </b> 10987654321</li>
                    <li class="list-group-item"><b>Twoje ID pracownika: </b> 12345678901</li>
                    <li class="list-group-item"><b>Aktualne wynagrodzenie:</b> 3200PLN</li>
                    <li class="list-group-item"><b>Aktualna stawka godzinowa:</b> 21PLN</li>
                    <li class="list-group-item"><b>Czas przepracowanych godzin:</b> 152</li>
                    <li class="list-group-item"><b>Imię:</b> Jan</li>
                    <li class="list-group-item"><b>Nazwisko:</b> Kowalski</li>
                    <li class="list-group-item"><b>Pesel:</b> 31702498266</li>
                    <li class="list-group-item"><b>Kod pocztowy:</b> 00-123</li>
                    <li class="list-group-item"><b>Miejscowość:</b> Przykładowa miejscowość</li>
                    <li class="list-group-item"><b>Ulica:</b> Krakowska 1</li>
                    <li class="list-group-item"><b>Numer telefonu:</b> +48 123 456 789</li>
                    <li class="list-group-item"><b>Adres e-mail:</b> jan.kowalski@example.com</li>
                    <li class="list-group-item"><b>Numer konta bankowego:</b> 22 8623 1034 9899 0254 6477 8329</li>
                </ul>
            </div>
            <div class="przesun tab-pane fade" id="listapracownikow" role="tabpanel">
                <div class="row">
                    <li class="col-4 list-group-item"><b>ID Pracownika:</b> </li>
                    <li class="col-4 list-group-item"><b>Imię i nazwisko:</b> </li>
                    <li class="col-4 list-group-item"><b>Akcje:</b> </li>
                </div>
                <div class="row">
                    <li class="col-4 list-group-item">12345678901 </li>
                    <li class="col-4 list-group-item">Jan Kowalski </li>
                    <li class="col-4 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" id = "clicker" href="#">Przyznanie premii</a>
                                <a class="dropdown-item" href="#">Zmiana grafiku</a>
                                <a class="dropdown-item" href="#">Stwórz raport opiniujący</a>
                                <a class="dropdown-item" href="#">Zarejestruj na szkolenie</a>
                            </div>
                        </div>
                    </li>
                </div>
                
                <div class="row">
                    <li class="col-4 list-group-item">21375678901 </li>
                    <li class="col-4 list-group-item">Janusz Pawlacz </li>
                    <li class="col-4 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" id = "clicker" href="#">Przyznanie premii</a>
                                <a class="dropdown-item" href="#">Zmiana grafiku</a>
                                <a class="dropdown-item" href="#">Stwórz raport opiniujący</a>
                                <a class="dropdown-item" href="#">Zarejestruj na szkolenie</a>
                            </div>
                        </div>
                    </li>
                </div>

                <form class="clickme">
                
                <div class="form-group">
                    <label for="exampleFormControlInput1">Podaj kwotę premii</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Kwota w PLN">
                </div>
                    <div class="form-group">
                    <button type="button" class="btn btn-outline-secondary">Przyznaj premię</button>
                    </div>
                
                </form>

            </div>
            <div class="przesun tab-pane fade" id="szkolenia" role="tabpanel">
                <div class="row">
                    <li class="col-4 list-group-item"><b>Nazwa szkolenia: </b> </li>
                    <li class="col-4 list-group-item"><b>Data i miejsce: </b> </li>
                    <li class="col-4 list-group-item"><b>Akcje:</b> </li>
                </div>
                <div class="row">
                    <li class="col-4 list-group-item">Szkolenie BHP </li>
                    <li class="col-4 list-group-item">13.12.2018, Główny budynek fabryki </li>
                    <li class="col-4 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Zmień</a>
                                <a class="dropdown-item" href="#">Usuń szkolenie</a>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="row">
                    <li class="col-4 list-group-item">Szkolenie dot. obsługi urządzeń </li>
                    <li class="col-4 list-group-item">07.12.2018, Główny budynek fabryki </li>
                    <li class="col-4 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Zmień</a>
                                <a class="dropdown-item" href="#">Usuń szkolenie</a>
                            </div>
                        </div>
                    </li>
                </div>

                <h3>Dodaj nowe szkolenie: </h3>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nazwa Kursu</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Nazwa Kursu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Data i miejsce</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="dd.mm.rr, example">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Czas trwania</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Maksymalna ilość osób</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Załączniki potrzebne do szkolenia</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                                checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Szkolenie online
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Szkolenie stacjonarne
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Dodaj</button>
                    </div>
                </form>


            </div>
            <div class="przesun tab-pane fade" id="wnioski" role="tabpanel">
                <div class="row">
                    <li class="col-2 list-group-item"><b>ID: </b> </li>
                    <li class="col-2 list-group-item"><b>ID Pracownika: </b> </li>
                    <li class="col-2 list-group-item"><b>Typ wniosku: </b> </li>
                    <li class="col-2 list-group-item"><b>Data wpłynięcia: </b> </li>
                    <li class="col-2 list-group-item"><b>Uwagi</b> </li>
                    <li class="col-2 list-group-item"><b>Akcje:</b> </li>
                </div>
                <div class="row">
                    <li class="col-2 list-group-item">1312 </li>
                    <li class="col-2 list-group-item">12345678901</li>
                    <li class="col-2 list-group-item">L4 </li>
                    <li class="col-2 list-group-item">13.12.2018 </li>
                    <li class="col-2 list-group-item">Brak </li>
                    <li class="col-2 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Podgląd wniosku</a>
                                <a class="dropdown-item" href="javascript:zatwierdz();">Zatwierdź wniosek</a>
                                <a class="dropdown-item" href="javascript:odrzuc();">Odrzuć wniosek</a>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="row">
                    <li class="col-2 list-group-item">6666 </li>
                    <li class="col-2 list-group-item">123254378901</li>
                    <li class="col-2 list-group-item">Urlop </li>
                    <li class="col-2 list-group-item">17.12.2018 </li>
                    <li class="col-2 list-group-item">Brak </li>
                    <li class="col-2 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Podgląd wniosku</a>
                                <a class="dropdown-item" href="javascript:zatwierdz();">Zatwierdź wniosek</a>
                                <a class="dropdown-item" href="javascript:odrzuc();">Odrzuć wniosek</a>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="row">
                    <li class="col-2 list-group-item">6234 </li>
                    <li class="col-2 list-group-item">Brak </li>
                    <li class="col-2 list-group-item">O zatrudnienie </li>
                    <li class="col-2 list-group-item">17.12.2018 </li>
                    <li class="col-2 list-group-item">Brak </li>
                    <li class="col-2 list-group-item">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Opcje
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Podgląd wniosku</a>
                                <a class="dropdown-item" href="javascript:zatwierdz();">Zatwierdź wniosek</a>
                                <a class="dropdown-item" href="javascript:odrzuc();">Odrzuć wniosek</a>
                            </div>
                        </div>
                    </li>
                </div>
            </div>



            <div class="przesun tab-pane fade" id="preferencje" role="tabpanel">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="list" href="#dane" role="tab">Zmień dane</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="list" href="#konto" role="tab">Konto</a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dane" role="tabpanel">
                        <ul class="list-group">
                            <li class="list-group-item">Imię: Jan <a class="hej" data-toggle="list" href="#zmiendane"
                                    role="tab">zmień
                                    dane</a></li>
                            <div class="tab-pane fade" id="zmiendane" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowe imie</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowe imię">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>

                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Nazwisko: Kowalski <a class="hej" data-toggle="list" href="#zmiennazwisko"
                                    role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmiennazwisko" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowe nazwisko</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowe nazwisko">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Kod pocztowy: 00-123 <a class="hej" data-toggle="list" href="#zmienkp"
                                    role="tab">zmień
                                    dane</a></li>
                            <div class="tab-pane fade" id="zmienkp" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy kod pocztowy</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowy kod pocztowy">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Miejscowość: Przykładowa Miejscowość <a class="hej" data-toggle="list"
                                    href="#zmienmiejsc" role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmienmiejsc" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy kod pocztowy</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowa miejscowość">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Ulica: Krakowska 1 <a class="hej" data-toggle="list" href="#zmienulice"
                                    role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmienulice" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy kod pocztowy</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowa ulica">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Numer telefonu: +48 123 456 789 <a class="hej" data-toggle="list"
                                    href="#zmiennrtel" role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmiennrtel" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy nr telefonu</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowy nr. telefonu">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>

                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>

                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Adres e-mail: jan.kowalski@example.com <a class="hej"
                                    data-toggle="list" href="#zmienmail" role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmienmail" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy kod pocztowy</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowy adres e-mail">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                            <li class="list-group-item">Numer konta bankowego: 22 8623 1034 9899 0254 6477 8329 <a
                                    class="hej" data-toggle="list" href="#zmienkb" role="tab">zmień dane</a></li>
                            <div class="tab-pane fade" id="zmienkb" role="tabpanel">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <label class="sr-only" for="inlineFormInput">Nowy kod pocztowy</label>
                                            <input type="text" class="form-control mb-2" id="inlineFormInput"
                                                placeholder="Nowy nr. konta bankowego">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn btn-outline-primary mb-2">Zatwierdź</button>
                                        </div>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            *dane zostaną zmienione po zatwierdzeniu przez administratora
                                        </small>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="konto" role="tabpanel">
                        <ul class="list-group">
                            <li class=list-group-item>
                                <a href="javascript:myfunc();">Zgłoś konto do usunięcia</a>
                            </li>
                            <li class=list-group-item>
                                <a data-toggle="list" href="#zmienhaslo" role="tab">Zmień hasło</a>
                                <div class="tab-pane fade" id="zmienhaslo" role="tabpanel">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Stare hasło</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Stare hasło">
                                            <small id="emailHelp" class="form-text text-muted">Wpisz swoje stare hasło,
                                                upewnij się że jest prawidłowe</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nowe hasło</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
</body>
<script>
    function myfunc() {
        var answer = confirm("Czy na pewno chcesz zgłosić konto do usunięcia?")
        if (answer) {
            alert("Konto zostało pomyślnie zgłoszone do usunięcia");
        }
        else {
            alert("Konto nie zostało zgłoszone do usunięcia");
        }
    }
</script>

<script>
    $('#myList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>

<script>
    var x = document.getElementById("clicker");

    x.addEventListener("click", function () {
        var doc = document.getElementsByClassName("clickme");
        doc[0].style.opacity = 1;

    });

</script>
<script>

    function zatwierdz(){
        alert("Pomyślnie zatwierdzono wniosek");
    }

    function odrzuc(){
        alert("Pomyślnie odrzucono wniosek");
    }

</script>