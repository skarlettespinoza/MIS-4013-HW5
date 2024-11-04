<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HW #1 Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Custom style to change tab color on hover */
      .nav-pills .nav-link {
        transition: background-color 0.3s, color 0.3s;
        color: #000; /* Default text color */
      }
      
      .nav-pills .nav-link:hover, .nav-pills .nav-link:focus {
        background-color: #007bff; /* Blue color */
        color: #fff; /* White text color */
        border-color: #007bff; /* Ensure the border color matches */
      }

      .nav-pills .nav-link.active {
        background-color: #007bff; /* Blue color */
        color: #fff; /* White text color */
        border-color: #007bff; /* Ensure the border color matches */
      }

      /* Remove border color on active */
      .nav-pills .nav-link.active:focus, .nav-pills .nav-link.active:hover {
        box-shadow: none; /* Remove the focus shadow */
      }
    </style>
  </head>
  <body>
    <div class="container mt-3">
      <h1>MIS 4013 Homework #1 - Home Page</h1>

      <!-- Nav pills -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-home-tab" href="page1.html" role="tab" aria-controls="pills-home" aria-selected="false">Page 1</a>
        </li>        
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-home-tab" href="page2.html" role="tab" aria-controls="pills-home" aria-selected="false">Page 2</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" href="page3.html" role="tab" aria-controls="pills-profile" aria-selected="false">Page 3</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-contact-tab" href="page4.html" role="tab" aria-controls="pills-contact" aria-selected="false">Page 4</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-about-tab" href="page5.html" role="tab" aria-controls="pills-about" aria-selected="false">Page 5</a>
        </li>
      </ul>
