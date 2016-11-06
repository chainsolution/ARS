<?php
    if(session_status()===PHP_SESSION_NONE){
      session_start();
      if (empty($_SESSION['timestamp'])) { ?>
        <script>
            alert('Please Login Again');
            location.replace("/");
        </script>
        <?php
      }
      elseif(time() - $_SESSION['timestamp'] > 1800) { //subtract new timestamp from the old one
    ?>
    <script>
        alert('セッションの有効期限が切れました。もう一度ログインしてください。');
        location.replace("/");
    </script>
<?php
    session_destroy();
    //header("Location: /"); //redirect to index.ph
    exit;
      } else {
        $_SESSION['timestamp'] = time(); //set new timestamp
      }
    } elseif(session_status()===PHP_SESSION_ACTIVE) {
        if(empty($_SESSION['timestamp'])) { ?>
          <script>
              alert('Please login');
              location.replace("/");
          </script>
          <?php
        }
        elseif(time() - $_SESSION['timestamp'] > 1800) { //subtract new timestamp from the old one
        ?>
        <script>
            alert('セッションの有効期限が切れました。もう一度ログインしてください。');
            location.replace("/");
        </script>
    <?php
        session_destroy();
        //header("Location: /"); //redirect to index.ph
        exit;
        } else {
        $_SESSION['timestamp'] = time(); //set new timestamp
        }
    } else {
        return;
    }
