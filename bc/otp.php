<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();
if (isset($_POST['sub_otp'])) {
    $email = $_POST['email'];
    $otp = trim($_POST['htno']);

    if ($user_login->sub_otp($email, $otp)) {
        $user_login->redirect('home.php');
    }
} elseif (isset($_POST['resend'])) {
    // $email = $_POST['resend'];
    $email = $_POST['email'];
    if ($user_login->resend_otp($email)) {
        $user_login->redirect('home.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">

        .download-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .download-btn {
            position: relative;
            background: #4285F4;
            color: #fff;
            width: 260px;
            padding: 18px 0;
            text-align: center;
            font-size: 1.3em;
            font-weight: 400;
            text-decoration: none;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgba(1 1 1 / 15%);
            transition: background 0.3s ease;
        }

        .download-btn:hover {
            background: #2874F3;
        }

        .download-btn i {
            margin-left: 5px;
        }

        .countdown {
            font-size: 1.5em;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .countdown span {
            color: #0693F6;
            font-size: 1.5em;
            font-weight: 800;
        }

        .pleaseWait-text {
            font-size: 1.1em;
            font-weight: 600;
            display: none;
        }

        .manualDownload-text {
            font-size: 1.1em;
            font-weight: 600;
            display: none;
        }

        .manualDownload-link {
            color: #0693F6;
            font-weight: 800;
            text-decoration: none;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>

</head>
<body>

<div class="prompt">
    Enter the code generated on your email <?php echo $_SESSION['email']; ?> device below to log in!
</div>
<?php if (isset($_GET['error'])) { ?>
    <div class='alert alert-success'>
        <button class='close' data-dismiss='alert'>&times;</button>
        <strong>Wrong OTP!</strong>
    </div>
<?php } ?>
<form id="Form" action="" method="post">
    <input name="email" type="hidden" value="<?php echo $_SESSION['email']; ?>"/>
    <input id="otp" name="htno" type="text" value=""/>&nbsp;
    <input id="sub_otp" name="sub_otp" type="submit" value="Submit"/>
    <!-- <input id="resend" name="resend" type="submit" class="manualDownload-link" value="Resend"  /> -->
    <div class="download-container">
        <input id="resend" name="resend" type="submit" class="download-btn" value="Resend OTP"/>
        <!-- <a href="#" class="download-btn">Download Files <i class="fas fa-download"></i></a> -->
        <div class="countdown"></div>
        <div class="pleaseWait-text">Please wait..</div>
        <div class="manualDownload-text">
            If the download didn't start automatically, <a href="" class="manualDownload-link">click here.</a>
        </div>
    </div>
</form>


<script type="text/javascript">
    $('#otp').keyup(function () {
        if (this.value.length == 6) {
            $('#sub_otp').click();
        }
    });
</script>

<script type="text/javascript">
    const downloadBtn = document.querySelector(".download-btn");
    const countdown = document.querySelector(".countdown");
    const pleaseWaitText = document.querySelector(".pleaseWait-text");
    const manualDownloadText = document.querySelector(".manualDownload-text");
    const manualDownloadLink = document.querySelector(".manualDownload-link");
    var timeLeft = 10;

    downloadBtn.addEventListener("click", () => {
        downloadBtn.style.display = "none";
        countdown.innerHTML = "Download will begin automatically in <span>" + timeLeft + "</span> seconds."; //for quick start of countdown

        var downloadTimer = setInterval(function timeCount() {
            timeLeft -= 1;
            countdown.innerHTML = "Download will begin automatically in <span>" + timeLeft + "</span> seconds.";

            if (timeLeft <= 0) {
                clearInterval(downloadTimer);
                pleaseWaitText.style.display = "block";
                let download_href = ""; //enter the downloadable file link URL here
                window.location.href = download_href;
                manualDownloadLink.href = download_href;

                setTimeout(() => {
                    pleaseWaitText.style.display = "none";
                    manualDownloadText.style.display = "block";
                }, 4000);
            }
        }, 1000);
    });
</script>
</body>
</html>
