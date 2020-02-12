<DOCTYPE html>
  <h2>GATE KEEPE</h2>
  <h4>Set 04</h4>
  <html>
    <input type="text" name="username" /><br />
    <label>Username:</label
    ><br /><br />
    <input type="password" name="userpasswrod" /><br />
    <label>Password</label
    ><br />

    <button onclick="getdata() ">login</button>

    <?php
        
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "user_account";

                $conn = mysqli_connect('localhost','root','','user_account') or die(mysqli_error($conn));

                // Create connection
                //$conn = new mysqli_connect($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                
                $count = 1;

                $sql = "SELECT * FROM userlogin";

    ?>
    <script>
            function getdata() {
              location.replace("index.php")
             }
    </script>
  </html>
</DOCTYPE>
