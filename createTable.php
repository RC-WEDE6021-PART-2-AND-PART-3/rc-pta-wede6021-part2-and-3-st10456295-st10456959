 <?php
// createTable.php
// Run in browser: http://localhost/Pastimes/createTable.php
// This drops tblUser, recreates it, then loads all records from userData.txt

include("DBConn.php");

// Step 1: Drop tblUser if it exists
$conn->query("DROP TABLE IF EXISTS tblUser");
echo "<p style='color:orange;'>tblUser dropped.</p>";

// Step 2: Recreate tblUser with proper structure
$createSQL = "CREATE TABLE tblUser (
    userID     INT          AUTO_INCREMENT PRIMARY KEY,
    fullName   VARCHAR(100) NOT NULL,
    email      VARCHAR(150) NOT NULL UNIQUE,
    password   VARCHAR(255) NOT NULL,
    isVerified TINYINT(1)   NOT NULL DEFAULT 0
)";

if ($conn->query($createSQL)) {
    echo "<p style='color:green;'>tblUser created successfully.</p>";
} else {
    die("<p style='color:red;'>Failed to create table: " . $conn->error . "</p>");
}

// Step 3: Load data from userData.txt
$file = fopen("userData.txt", "r");

if (!$file) {
    die("<p style='color:red;'>Cannot open userData.txt — make sure it is in the same folder.</p>");
}

$count = 0;
while (($line = fgets($file)) !== false) {
    $line = trim($line);
    if (empty($line)) continue;            // skip blank lines

    $data = explode(",", $line);
    if (count($data) < 4) continue;       // skip malformed lines

    $fullName   = $conn->real_escape_string(trim($data[0]));
    $email      = $conn->real_escape_string(trim($data[1]));
    $password   = md5(trim($data[2]));     // MD5 hash
    $isVerified = (int) trim($data[3]);

    $sql = "INSERT INTO tblUser (fullName, email, password, isVerified)
            VALUES ('$fullName', '$email', '$password', $isVerified)";

    if ($conn->query($sql)) {
        $count++;
        echo "<p style='color:green;'>Inserted: $fullName ($email)</p>";
    } else {
        echo "<p style='color:red;'>Failed to insert $fullName: " . $conn->error . "</p>";
    }
}

fclose($file);
echo "<hr><p style='font-weight:bold;'>Done! $count user(s) loaded into tblUser.</p>";
?>