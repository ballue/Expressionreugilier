<!DOCTYPE html>
<html lang="fr">

<head>

    <title>Reservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css" />



    <link rel="stylesheet" href="../assets/css/style.css">




</head>


<body>

<button type="retour"> <a href="./main.php"> < Retour </a> </button>


<h1>Reservation Salle Jul</h1>
<form>
    <!--   <fieldset>
           <legend>Information personnel</legend>
           <div class="double-input">
               <div class="form-input-container">
                   <label for="nom">Nom</label>
                   <input type="text" name="nom" id="nom" placeholder="nom" minlength="3" required/>
               </div>
               <div class="form-input-container">
                   <label for="prenom">Prenom</label>
                   <input type="text" name="prenom" id="prenom" placeholder="prenom" required/>
               </div>
           </div>
           <div class="double-input">
               <div class="form-input-container">
                   <label for="email">Email</label>
                   <input type="email" name="email" id="email" required placeholder="email@email.com" required/>
               </div>
               <div class="form-input-container">
                   <label for="tel">Telephone</label>
                   <input type="tel" name="tel" id="tel" placeholder="tel" required/>
               </div>
           </div>
       </fieldset> -->
    <fieldset>
        <legend>Informations</legend>
        <div class="double-input">
            <div class="form-input-container">
                <label for="salle">Salle</label>
                <select name="salle" id="salle">
                    <option value="jul">Jul</option>

                </select>
            </div>
            <div class="form-input-container">
                <label for="capacity">Nombre de personnes</label>
                <input type="number" name="capacity" id="capacity" value="1" min="1" max="68" step="1" />
            </div>
        </div>
        <div class="double-input">
            <div class="form-input-container date-select">
                <label for="startdate">Date</label>
                <select name="start-date-day" id="start-date-day">
                    <option value="Day" disabled selected>Jour</option>
                    <option value="1">1</option>
                    <option value="2">2</option>

                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>

                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>


                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                </select>
                <select name="start-date-month" id="start-date-month">
                    <option value="Month" disabled selected>Mois</option>
                    <option value="2">Fevrier</option>
                </select>
            </div>
            <div class="form-input-container date-select">
                <label for="startdate">Heure début</label>
                <select name="start-date-day" id="start-date-day">
                    <option value="heure" disabled selected>Heure</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>

                </select>
                <label for="enddate">Heure fin</label>
                <select name="end-date-day" id="end-date-day">
                    <option value="heure" disabled selected>Heure</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>

                </select>

            </div>
        </div>
    </fieldset>
    <button type="submit">Reservé</button>