<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table id="header">
    <tr>
        <td id="header">
                <h1>php with ajax</h1>
        </td>
    </tr>
    <tr>
        <td id="table-load">
            <input type="button" id="load-button" value="load data">
        </td>
    </tr>

    <tr>
        <td id="table-data">
            <table border="1" width="100px" cellpadding="0" cellspacing ="10px">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <td align="center">1</td>
                    <td>abcd</td>
                </tr>
            </table>

        </td>
    </tr>
</table>



    <script type="text/javascript" src="jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",funtion(e){
                $.ajax({
                    url:"ajax-load.php";
                    type: "post";
                    success: function(data){
                        $("table-data").html(data);
                    }
                })
            });

        });
    </script>
</body>
</html>