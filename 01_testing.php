<html>
<head>
    <title>testing</title>
</head>
<body>

    <?php
    $userData = [
        ["name" => "mg mg", "job" => "developer"],
        ["name" => "ei ei", "job" => "designer"],
        ["name" => "kyaw kyaw", "job" => "full stack developer"]
    ];
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Job</th>
            </tr>
        </thead>

        <?php
        foreach($userData as $user){
            echo "
                <tbody>
                    <tr>
                        <td>{$user["name"]}</td>
                        <td>{$user["job"]}</td>
                    </tr>
                </tbody>
            ";
        }
        ?>
        
    </table>

    
</body>
</html>