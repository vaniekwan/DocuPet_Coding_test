<?php if (isset($pet) && !empty($pet)) : ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Pet Form</title>
</head>
<body>
    <br>
    <!-- if pet is dangerous show danger logo -->
    <?php if ($pet->getDangerous() == 1) { ?>
        <img style="width: 50px;" src="danger.png" alt="foot header">
    <?php } ?>
    <div class="table-responsive-sm mt-4">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td><?php echo htmlspecialchars($pet->getName(), ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($pet->getBreed(), ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($pet->getGender(), ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
            </tbody>
        </table>
        
    </div>
<?php else: ?>
    <p class="text-muted mt-4">No pets available to display.</p>
<?php endif; ?>
</body>
</html>