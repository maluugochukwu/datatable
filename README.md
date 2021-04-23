# Server Side Datatable [PHP]
Renders Jquery datatable in an efficient way by using server side calls for all paging, searching, ordering actions that DataTables performs on the large data set.

# Installation
Installation is super easy with composer

```sh
$ composer require ugo/datatable
```

# Usage

```php
<?php
    require_once('vendor/autoload.php');
    $mysqli_connection = [YOUR MYSQLI CONNECTION OBJECT];
    $table             = new Datatable($mysqli_connection);
    $data              = $_REQUEST;
    $table_name        = "users";
    $filter            = " AND email = 'newuser@mail.com'";
    $pk                = "email";
    $column            = array(
                            array( 'db' => 'username', 'dt' => 0 ),
                            array( 'db' => 'first_name', 'dt' => 1 ),
                            array( 'db' => 'last_name', 'dt' => 2 )
                            array( 'db' => 'username', 'dt' => 3,'formatter'=>function($d,$row){
                                $name = $row['first_name'];
                                return echo "<button>Edit ".$name."</button>";
                            } )
                            );
    $jquery_table = $table->generateTable($data,$table_name,$columner,$filter,$pk);
    var_dump($jquery_table);
?>
```


