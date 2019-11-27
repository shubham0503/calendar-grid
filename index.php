<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="calendar">
            <div class="month-row">
                <time datetime="2019-02"><i class="arrow left"></i>&nbsp;&nbsp;&nbsp; November 2019 &nbsp;&nbsp;&nbsp;<i class="arrow right"></i></time>
            </div>
            <div class="day-grid">
                <div>Mon</div>
                <div>Tus</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                <div>Sun</div>
            </div>
            <div class="date-grid">
                <button class="prev-month" type="button" value="28">28</button>
                <button class="prev-month" type="button" value="29">29</button>
                <button class="prev-month" type="button" value="30">30</button>
                <button class="prev-month" type="button" value="31">31</button>
                <?php
                for ($i = 1; $i < 31; $i++) {
                    $str = '<button class="curr-month" type="button" value="' . $i . '">' . $i; 
                    if($i == 24) {
                        $str .= '<span class="curr-date"></span>';
                    }
                    echo $str.'</button>';
                }
                ?>
            </div>
        </div>
    </main>
</body>

</html>