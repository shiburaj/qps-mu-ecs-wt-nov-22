<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide / Unhide</title>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <button>Hide/Unhide me</button>
    <p>I like web programming</p>
    <p>I like Database management system</p>

    <script>
        document.querySelector('button').addEventListener('click', (e) => {
            document.querySelectorAll('p').forEach(ele => {
                ele.classList.toggle('hide');
            })
        });
    </script>
</body>

</html>