<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - my website</title>
</head>
<body>
    <?php include "header.php";?>
         <div style="margin: auto; max-width: 600px;">
            <h2 style="text-align: center;">User Profile</h2>
            <table style: text-align: center;>
                <tr>
                    <td><img src="img.jpg" style="width: 150px; height: 150px; object-fit: cover;"></td>
                </tr>
                <tr>
                    <td>John</td>
                </tr>
                <tr>
                    <td>John@email.com</td>
                </tr>
            </table>
            <hr>
            <h5>Create a post</h5>
         <form method="post" style="margin: auto; padding: 10px;">
            <textarea name="" id="" cols="30" rows="10"></textarea>

            <button>Post</button>
        </form>
         </div>
        

    <?php include "footer.php";?>

</body>
</html>