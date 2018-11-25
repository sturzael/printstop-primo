let items = ['Lamination', 'sizes'];
localStorage.clear();
for (var i = 0; i < items.length; i++) {
  document.cookie = `item=${items[i]}`;
  <?php
     $cookieItem = $_COOKIE['item'];
     $itemTypefunction = function(){
       echo eval('$'. $_COOKIE['item'].'Type' . ';');
     }; ?>
     localStorage.setItem(`${items[i]}`, JSON.stringify([
     <?php foreach ($data[$cookieItem] as $itemTypefunction){
              echo "{";
              if (isset($itemTypefunction['ID'])) {
                echo 'id:'."'".$itemTypefunction['ID']."'";
              };
              if (isset($itemTypefunction['Description'])) {
                echo 'description:'."'".$itemTypefunction['Description']."'";
              }
              if (isset($itemTypefunction['Code'])) {
                echo 'code:'."'".$itemTypefunction['Code']."'";
              }
              echo "},";
      };?>
     ]));
};