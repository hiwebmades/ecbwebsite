<div class="container">
        <div class="row bg-light lead">
            <div class="col-12 col-md-6 float-left">
                <img src="images/logo/Ecb.png" class="img-fluid" alt="ECB Bikaner">
            </div>
            <div class="col-12 col-md-6">
                <div class="p-2 float-right">
                    <h4 id="date"></h4>
                    <h5 id="clock"></h5>

                </div>
            </div>
        </div>
    </div>

<script src="scripts/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="scripts/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.onload = setInterval(clock, 1000);
        function clock() {
            var d = new Date();
            var date = d.getDate();
            var month = d.getMonth();
            var montharr = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            month = montharr[month];
            var year = d.getFullYear();
            var day = d.getDay();
            var dayarr = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            day = dayarr[day];
            function currentTime() {
                var date = new Date(); /* creating object of Date class */
                var hour = date.getHours();
                var min = date.getMinutes();
                var sec = date.getSeconds();
                var midday = "AM";
                midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
                hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12) : hour); /* assigning hour in 12-hour format */
                hour = updateTime(hour);
                min = updateTime(min);
                sec = updateTime(sec);
                document.getElementById("clock").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
                var t = setTimeout(currentTime, 1000); /* setting timer */
            }

            function updateTime(k) { /* appending 0 before time elements if less than 10 */
                if (k < 10) {
                    return "0" + k;
                }
                else {
                    return k;
                }
            }

            currentTime();
            document.getElementById("date").innerHTML = day + " " + date + " " + month + " " + year;
        }

    </script>