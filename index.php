<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PopUp</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<p>Some text Some text Some text Some text Some text Some text Some text Some text</p>
<p>Some text Some text Some text Some text Some text Some text Some text Some text. Some text Some text Some text Some
    text Some text Some text Some text Some text</p>
<p>Some text Some text Some text Some text Some text Some text Some text Some text</p>

<div id="popup">
    <div class="popup-content">
        <h2>Please subscribe</h2>
        <input type="text" placeholder="Email" name="email"/>
        <button type="button" id="subscribe">Subscribe</button>
        <button type="button" id="cancel">Cancel</button>
    </div>
</div>

<button type="button" id="clearLocalStorage">Clear All Storage</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</body>
</html>

<script type="text/javascript">
    var isPopUpVisual = sessionStorage.getItem('cancelSubscribe');
    var alreadySubscribe = localStorage.getItem('alreadySubscribe');

    console.log(isPopUpVisual);
    console.log(alreadySubscribe);

    if (!isPopUpVisual && !alreadySubscribe) {
        $('#popup').toggleClass("visual");
    }

    $('#subscribe').on('click', function () {
            localStorage.setItem('alreadySubscribe', 'alreadySubscribe');
            $('#popup').toggleClass("visual");

            var data = $('input[name=email]').val();
            console.log(data);
            $.ajax({
                type: 'POST',
                url: '', /*file for data processing*/
                dataType: 'json',
                data: data,
            });
            alert("You successfully subscribed!")
        }
    );

    $('#cancel').on('click', function () {
            sessionStorage.setItem('cancelSubscribe', 'cancelSubscribe');
            $('#popup').toggleClass("visual");
        }
    );

    $('#clearLocalStorage').on('click', function () {
            localStorage.clear();
            sessionStorage.clear();
        }
    );
</script>
