<?php 

//every declared variable can be used later in views,
// but we have to work with $VIEWDATA to organize view variables to one place
// ( $VIEWDATA already exists, we declared it in index.php )


$VIEWDATA['productNames'] = $MODEL->getProductNames();

include "views/home.php";