<html>
  <h2>購物車清單</h2>

  <table border="1">
    <tr>
      <td>功能</td><td>編號</td><td>商品名稱</td><td>價格</td><td>數量</td>
    </tr>

  <?php
  $flag=false;
  $total=0;

  while(list($arr,$value)=each($_COOKIE))
  {
      if(isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]))
      {
        if($flag)
        {   
            $flag=false;
          }
          else
          {
            $flag=true;
          }
     
        echo "<tr><td>";
        echo "<a href='delete.php?id=".$arr."'>";
        echo "delete</a></td>";

        $price=0;
        $amount=0;

        while(list($item, $value)=each($_COOKIE[$arr]))
        {
            echo "<td>".$value."</td>";
            if($item=="price")
            {
              $price=$value;
            }
            if($item=="amount")
            {
              $amount=$value;
            }
        }
        
        $total=$total+($price*$amount);
        echo "</tr>";
      }
  }
  if($total!=0)
  { 
      echo "<tr><td>";
      echo "Total=".$total."$</td></tr>";
  }

  ?>
  </table></br>

  <a href="catalog.php" class="back">回商品目錄</a>
</html>  