<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
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
    <?php
      $student = [
        [
          'name' => 'NISEN',
          'program' => 'BIW',
          'age' => 22
        ],
        [
          'name' => 'VAIGISH',
          'program' => 'BBZ',
          'age' => 22
        ],
        [
          'name' => 'DIVAGARAN',
          'program' => 'BIP',
          'age' => 23
        ]
      ];
     ?>
     <table>
       <thead>
         <tr>
           <th>Name</th>
           <th>Program</th>
           <th>Age</th>
         </tr>
       </thead>
       <tbody>
         <?php foreach ($student as $students): ?>
           <tr>
             <td><?= htmlspecialchars($students['name']) ?></td>
             <td><?= htmlspecialchars($students['program']) ?></td>
             <td><?= htmlspecialchars($students['age']) ?></td>
           </tr>
         <?php endforeach; ?>
       </tbody>
     </table>
  </body>
</html>