<?php
check_if_added_to_cart($item_id)
{
 include "includes/common.php";
 SELECT * FROM users_item WHERE item_id='$item_id' AND user_id=
 '$user_id' and status='added to cart'
}
if(mysqli_num_rows>=1)
{
 return 1;
}
else
{
 return 0;
}
?>