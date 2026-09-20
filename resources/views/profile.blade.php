<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Profile</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(160deg, #ffe4ef 0%, #ffffff 50%, #ffd9e8 100%);
        }

        .card {
            background: #ffffff;
            border-radius: 30px;
            padding: 40px 35px;
            width: 340px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.25);
            border: 2px solid #ffd6e8;
        }

        .avatar-wrapper {
            width: 140px;
            height: 140px;
            margin: 0 auto 25px auto;
            border-radius: 50%;
            padding: 6px;
            background: linear-gradient(135deg, #ff9ec8, #ffd1e6);
            box-shadow: 0 6px 15px rgba(255, 105, 180, 0.35);
        }

        .avatar-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #ffffff;
            display: block;
        }

        .info-box {
            background: linear-gradient(90deg, #ffeaf3, #fff5f9);
            border: 1.5px solid #ffc2dc;
            border-radius: 16px;
            padding: 12px 18px;
            margin-bottom: 14px;
            text-align: center;
        }

        .info-box .label {
            font-size: 11px;
            color: #d6538f;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .info-box .value {
            font-size: 16px;
            color: #4a2b3a;
            font-weight: 600;
            margin-top: 2px;
        }

        .info-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="avatar-wrapper">
               <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profile">
        </div>

        <div class="info-box">
            <div class="label">Nama</div>
            <div class="value">{{ $nama }}</div>
        </div>

        <div class="info-box">
            <div class="label">Kelas</div>
            <div class="value">{{ $kelas }}</div>
        </div>

        <div class="info-box">
            <div class="label">NPM</div>
            <div class="value">{{ $npm }}</div>
        </div>
    </div>

</body>
</html>