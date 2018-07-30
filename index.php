<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Scheduler</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">

        </div>
        <div class="col-lg-6 scheduler-container">
          <div class="row">
            <div class="col-lg-1">

            </div>
            <div class="col-lg-10 appointment-header">
              Schedule Appoinment
            </div>
            <div class="col-lg-1 close-scheduler">
              <a href="#">x</a>
            </div>
          </div>
          <div class="row date-row">
            <div class="col-lg-12 date-container">
               <!-- Date Container -->
               <div class="calendar">
                 <div class="row calendar-content">
                   <div class="col">

                   </div>
                   <div class="col prev date-nav">
                     <a href="#">&laquo;</a>
                   </div>
                   <div class="col date date-nav">
                    July 30
                   </div>
                   <div class="col next date-nav">
                     <a href="#"> &raquo;</a>
                   </div>
                   <div class="col">

                   </div>
                 </div>
               </div>
            </div>
          </div>
          <div class="row times-row">
            <div class="col-lg-12 times-container">
              <div class="row">
                <!-- Time Tiles -->
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">8:30am</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">9:30am</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">10:30am</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">11:30am</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">12:30pm</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">1:30pm</button>
                </div>
                <div class="col-lg-12 time">
                  <button class="btn btn-outline-warning" name="button">2:30pm</button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-11">

            </div>
            <div style="color:white;" class="col-lg-1">
              x
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
