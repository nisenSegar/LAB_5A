<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border-collapse: collapse;
                width: 50%;
                font-family: Arial, sans-serif;
            }
            td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
        $name = "Nisen A/L Segar";
        $matricNumber = "DI220140";
        $course = "BACHELOR OF COMPUTER SCIENCE (WEB TECHNOLOGY) WITH HONOURS";
        $yearOfStudy = "Year 3";
        $address = "NO 10241, JALAN MERBUK 5, BANDAR PUTRA , 81000, KULAI, JOHOR";
        ?>

        <table>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matricNumber; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $yearOfStudy; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
    </body>
</html>