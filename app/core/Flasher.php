<?php 

class Flasher {
    public static function setFlash($massege, $action, $type){
      $_SESSION['flash'] = [
          'massege' => $massege,
           'action' => $action,
           'type' => $type
      ];

    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">Friend Data : <strong>' .$_SESSION['flash']['massege'] . '</strong> ' . $_SESSION['flash']['action'] . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
          </div>';
            unset($_SESSION['flash']);
        }
    }
}

?>