<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('adminCss')

  <style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 1000px;
    width: 100%;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    text-align: center;
    margin-right:100px;
}

h1 {
    margin-bottom: 20px;
    font-size: 2rem;
    color: #609ad4;
    text-shadow:0 2px 1px rgba(0, 0, 0, 0.758);
}

table.timetable {
    width: 100%;
    border-collapse: collapse;
}

table.timetable th, table.timetable td {
    border: 1px solid #ddd;
    padding: 15px;
    text-align: center;
    font-size: 1rem;

}

table.timetable th {
    background-color: #37a4e3;
    color: rgb(255, 255, 255);
    font-weight: bold;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);

}

table.timetable td {
    background-color: #f9f9f9;
    transition: background-color 0.3s;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);

}

table.timetable tr:nth-child(even) td {
    background-color: #f2f2f2;
}

table.timetable tr:hover td {
    background-color: #f1f1f1;
}

table.timetable .subject {
    background-color: #eff7fa;
    color: #333;
}



@media (max-width: 768px) {
    table.timetable th, table.timetable td {
        padding: 10px;
        font-size: 0.875rem;
    }
}
  </style>

</head>
<body>

  <!-- ======= Header ======= -->
@extends('layouat.app-header')

  <!-- ======= Sidebar ======= -->

  @extends('layouat.app-sidebar')
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Emploi du Temps</title>
      <link rel="stylesheet" href="styles.css">
  </head>
  <body>
      <div class="container">
          <h1>Emploi du Temps</h1>
          <table class="timetable">
              <thead>
                  <tr>
                      <th>Heure</th>
                      <th>Lundi</th>
                      <th>Mardi</th>
                      <th>Mercredi</th>
                      <th>Jeudi</th>
                      <th>Vendredi</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>08:00 - 10:00</td>
                      <td class="subject">Mathématiques</td>
                      <td class="subject">Physique</td>
                      <td class="subject">Informatique</td>
                      <td class="subject">Chimie</td>
                      <td class="subject">Biologie</td>
                  </tr>
                  <tr>
                      <td>10:00 - 12:00</td>
                      <td class="subject">Anglais</td>
                      <td class="subject">Histoire</td>
                      <td class="subject">Mathématiques</td>
                      <td class="subject">Physique</td>
                      <td class="subject">Informatique</td>
                  </tr>
                  <tr>
                      <td>12:00 - 14:00</td>
                      <td class="break">Pause déjeuner</td>
                      <td class="break">Pause déjeuner</td>
                      <td class="break">Pause déjeuner</td>
                      <td class="break">Pause déjeuner</td>
                      <td class="break">Pause déjeuner</td>
                  </tr>
                  <tr>
                      <td>14:00 - 16:00</td>
                      <td class="subject">Philosophie</td>
                      <td class="subject">Chimie</td>
                      <td class="subject">Biologie</td>
                      <td class="subject">Anglais</td>
                      <td class="subject">Histoire</td>
                  </tr>
                  <tr>
                      <td>16:00 - 18:00</td>
                      <td class="subject">Sport</td>
                      <td class="subject">Informatique</td>
                      <td class="subject">Mathématiques</td>
                      <td class="subject">Physique</td>
                      <td class="subject">Arts</td>
                  </tr>
              </tbody>
          </table>
      </div>
  </body>
  </html>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

</body>

</html>
