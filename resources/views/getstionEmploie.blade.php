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
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-right: 100px;
    margin-top: 140px;
}

h1 {
    margin-bottom: 20px;
    font-size: 2rem;
    color: #333;
}

form {
    width: 100%;
}

table.timetable {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table.timetable th, table.timetable td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
    font-size: 0.8rem;
}

table.timetable th {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
}

table.timetable td {
    background-color: #f9f9f9;
    transition: background-color 0.3s;
}

table.timetable tr:nth-child(even) td {
    background-color: #f2f2f2;
}

table.timetable tr:hover td {
    background-color: #f1f1f1;
}

table.timetable .break {
    background-color: #f0e68c;
    color: #333;
    font-weight: bold;
}

table.timetable input[type="text"] {
    width: 90%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 15px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    table.timetable th, table.timetable td {
        padding: 10px;
        font-size: 0.875rem;
    }

    button[type="submit"] {
        width: 100%;
    }
}

  </style>

</head>
<body>

  <!-- ======= Header ======= -->
@extends('layouat.app-header')

  <!-- ======= Sidebar ======= -->

  @extends('layouat.app-sidebar')

  <div class="container">
    <h1>Gestion de l'Emploi du Temps</h1>
    <form id="timetableForm">
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
                    <td><input type="text" name="monday_8_10" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="tuesday_8_10" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="wednesday_8_10" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="thursday_8_10" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="friday_8_10" placeholder="Module - Professeur"></td>
                </tr>
                <tr>
                    <td>10:00 - 12:00</td>
                    <td><input type="text" name="monday_10_12" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="tuesday_10_12" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="wednesday_10_12" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="thursday_10_12" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="friday_10_12" placeholder="Module - Professeur"></td>
                </tr>
                <tr>
                    <td>12:00 - 14:00</td>
                    <td colspan="5" class="break">Pause déjeuner</td>
                </tr>
                <tr>
                    <td>14:00 - 16:00</td>
                    <td><input type="text" name="monday_14_16" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="tuesday_14_16" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="wednesday_14_16" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="thursday_14_16" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="friday_14_16" placeholder="Module - Professeur"></td>
                </tr>
                <tr>
                    <td>16:00 - 18:00</td>
                    <td><input type="text" name="monday_16_18" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="tuesday_16_18" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="wednesday_16_18" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="thursday_16_18" placeholder="Module - Professeur"></td>
                    <td><input type="text" name="friday_16_18" placeholder="Module - Professeur"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit">Enregistrer l'Emploi du Temps</button>
    </form>
</div>
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
