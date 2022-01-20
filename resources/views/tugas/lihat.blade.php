<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lihat Detail(by.idad)</title>
</head>
<style>
    table, th, td {
    font: 72px sans-serif;
    text-align: center;
    border: 3px solid black;
    border-radius: 10px;
    border-style: dashed;
    }
    th, td {
    padding-top: 10px;
    padding-bottom: 20px;
   
    }
    h1{
    color: green;
    
    }
    b{
    color: red;
    }
</style>
<body>
    <table style="width:70%" align="center" >
        <tr>
            <td>
                {{ $tugas->nama_tugas }}
            </td>
        </tr>
        <tr>
            <td>
                <script>
                    CountDownTimer('{{$tugas->created_at}}', 'countdown');
                    function CountDownTimer(dt, id)
                    {
                        var end = new Date('{{$tugas->end_date}}');
                        var _second = 1000;
                        var _minute = _second * 60;
                        var _hour = _minute * 60;
                        var _day = _hour * 24;
                        var timer;

                        function showRemaining() {
                            var now = new Date();
                            var distance = end - now;
                            if (distance < 0) {
                                clearInterval(timer);
                                document.getElementById(id).innerHTML = '<b>TUGAS SUDAH BERKAHIR</=b>';

                                return;
                            }
                            var days = Math.floor(distance / _day);
                            var hours = Math.floor((distance % _day) / _hour);
                            var minutes = Math.floor((distance % _hour) / _minute);
                            var seconds = Math.floor((distance % _minute) / _second);

                            document.getElementById(id).innerHTML = days +' '+'days'+' ';
                            document.getElementById(id).innerHTML += hours +' '+'hrs'+' ';
                            document.getElementById(id).innerHTML += minutes +' '+'mins'+' ';
                            document.getElementById(id).innerHTML += seconds +' '+'secs';                           
                            document.getElementById(id).innerHTML += '<h1>TUGAS BELUM BERAKHIR</h1>';
                        }
                        timer = setInterval(showRemaining, 1000);
                    }
                </script>
                <div id="countdown">
            </td>
        </tr>
    </table>
</body>
</html>