<?php
$lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit similique pariatur eveniet voluptate nobis, cum vitae repellat aperiam. Repellendus sint quaerat velit quos amet, distinctio aperiam iusto minus ab, numquam dicta vel libero maxime esse repudiandae nihil. Consequuntur, soluta harum deserunt non aliquam perferendis repellendus magni aliquid voluptates quo error iure excepturi, eum esse accusamus ad quisquam explicabo consectetur beatae, itaque facilis. Perferendis, voluptatem totam assumenda eius, labore dolor doloribus ut voluptates architecto veritatis porro iure omnis consectetur illo enim in! Fuga sit necessitatibus molestiae laudantium quasi. Porro omnis hic cum ea, voluptatum maiores repudiandae beatae ratione provident modi dolorum minus veritatis amet ipsa perspiciatis perferendis dolores pariatur magnam. Magnam quis temporibus optio nihil quaerat similique obcaecati fuga consequuntur eligendi voluptate inventore voluptatibus ab, ipsum expedita quasi harum nam non accusamus totam molestias quam. Dolorum officia minus voluptates, iste odit ipsa quaerat maiores quae, provident reiciendis saepe nihil aut culpa ipsam, corporis autem! Sequi, neque unde necessitatibus officia ipsa illum quibusdam voluptate incidunt repudiandae perspiciatis nihil fuga cum et minima est, distinctio doloremque voluptatibus tenetur ex. Nam, culpa sit earum deserunt ad iusto tenetur quo delectus quasi corrupti natus molestiae eligendi accusantium deleniti libero tempora similique? Consequuntur aperiam corporis amet.';
$badword = str_replace('voluptate', '*********', $lorem);



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php-BadWords</title>
</head>
<body>
  <h3>Stampa paragrafo</h3>
  <p> <?php echo $lorem; ?> </p>
  <p> <?php echo strlen($lorem);?></p>

  <h3>Stampa parola censurata</h3>
  <p> <?php echo $badword; ?> </p>
  <p> <?php echo strlen($badword);?></p>
  
</body>
</html>