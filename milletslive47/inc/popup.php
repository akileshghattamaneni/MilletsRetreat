<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Millets Retreat</title>

    <style>
    .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 9999;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .popup-content {
        background: url('assets/imgs/popup/popup-bg1.png') no-repeat center center;
        /* background-color: #967D0C; */
        background-size: cover;
        padding: 40px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.9);
        max-width: 500px;
        width: 80%;
        animation: slideIn 0.5s ease-in-out;

    }

    @keyframes slideIn {
        from {
            transform: translateY(-100%);
        }

        to {
            transform: translateY(0);
        }
    }

    .logo {
        width: 150px;
        margin-bottom: 10px;
        animation: zoomIn 1s ease-in-out;
    }

    @keyframes zoomIn {
        from {
            transform: scale(0);
        }

        to {
            transform: scale(1);
        }
    }

    h2 {
        font-size: 38px;
        margin-bottom: 10px;

    }

    .head {

        color: white;
    }

    @media only screen and (max-width: 768px) {

        .head {
            font-size: 28px;
            margin-bottom: 10px;

        }

        .para {
            font-size: 17px;
            margin-bottom: 20px;

        }

    }

    .para {

        color: white;
    }

    p {
        font-size: 20px;
        margin-bottom: 20px;

    }

    .close-btn {
        background: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background 0.3s ease;
        animation: bounceIn 1s ease;
    }

    @keyframes bounceIn {

        from,
        20%,
        40%,
        60%,
        80%,
        to {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }
    }

    .close-btn:hover {
        background: #0056b3;
    }
    </style>
</head>

<body>

    <div id="popup" class="popup">
        <div class="popup-content">
            <img src="assets/imgs/logo/millets-pop.png" alt="Millets Retreat Logo" class="logo">
            <h2 class="head">Launching Soon</h2>
            <p class="para">To Treat Your Tastebuds</p>
            <button id="closePopup" class="close-btn">Close</button>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.getElementById('popup').style.display = 'flex';
        }, 2000);

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    });
    </script>

</body>

</html>