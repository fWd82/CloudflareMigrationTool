<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Video Processing Status</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="status"></div>

    <script>
        function fetchStatus() {
            $.ajax({
                url: 'getStatus.php',
                success: function(response) {
                    $('#status').html(response);
                },
                complete: function() {
                    setTimeout(fetchStatus, 2000); // Poll every 2 seconds
                }
            });
        }

        $(document).ready(function() {
            fetchStatus();
        });
    </script>
</body>
</html>
