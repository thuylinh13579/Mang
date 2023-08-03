<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <style>

    </style>
    <?php
    $people = array("Hương ", "Khôi", "Ngân ", "Anh");
    
    if (in_array("Anh", $people))
      {
      echo "tim thay";
      }
    else
      {
      echo "khong tim thay";
      }
    ?>


    <?php
    function Search($value, $array){
        return(array_search($value,$array,true));
    }
    $array = array(45, 5, 1, 22, 22, 10, 10);
    $value="10";
    echo(Search($value, $array));
    ?>

</body>
</html>