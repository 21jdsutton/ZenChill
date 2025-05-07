<!DOCTYPE html>
<html lang="en">
<head>
    <title>ZenChill | Search</title>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Relief:wght@400;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            background: rgba(24, 0, 0, 0.02);
            font-family: "Comic Relief", sans-serif;
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background-color: rgb(0, 0, 0);
            overflow: hidden;
        }

        .search-box {
            position: absolute;
            top: 50px;
            left: 300px;
        }

        .search-bar form input[type=text] {
            background: rgba(51, 51, 51, 0.62);
            color: white;
            padding: 6px;
            font-size: 25px;
            border: 0px;
            border-radius: 15px;
            width: 1500px;
            height: 50px;
        }

        .search-categories {
            background: rgba(39, 39, 39, 0.58);
            padding: 6px;
            border-radius: 15px;
            text-align: center;
            margin-top: 10px;
        }

        .search-categories p {
            color: white;
        }

        .search-categories a {
            text-decoration: none;
            color: rgba(146, 146, 146, 0.81);
            margin: 0 5px;
            font-size: 18px;
        }

        .search-categories a:hover {
            color: white;
        }

        .movie-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 250px 50px 50px 300px;
            color: white;
        }

        .movie-card {
            background: rgba(31, 31, 31, 0.78);
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s;
        }

        .movie-card:hover {
            transform: scale(1.05);
        }

        .movie-card img {
            width: 100%;
            height: 300px;
            object-fit: fill;
        }

        .movie-card h3 {
            padding: 10px;
            font-size: 18px;
        }
        
    </style>
</head>
<body>

    <div class="background">
        <img src="images/movies_background.jpg">
    </div>

    <div class="search-box">
        <div class="search-bar">
            <form method="GET" action="">
                <input type="text" name="query" placeholder="Search...">
            </form>
        </div>
        <div class="search-categories">
            <p>
                <a href="?genre=Action">Action</a> |
                <a href="?genre=Adventure">Adventure</a> |
                <a href="?genre=Animation">Animation</a> |
                <a href="?genre=Comedy">Comedy</a> |
                <a href="?genre=Documentary">Documentary</a> |
                <a href="?genre=Drama">Drama</a> |
                <a href="?genre=Fantasy">Fantasy</a> |
                <a href="?genre=Horror">Horror</a> |
                <a href="?genre=Musical">Musical</a> |
                <a href="?genre=Western">Western</a>
            </p>
        </div>
    </div>

    <?php 
        include('navigation.html');
        include('mysqli_connect.php');

        echo "<div class='movie-grid'>";

        $whereClause = "WHERE duration IS NOT NULL";
        $params = [];
        $types = "";

        if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
            $whereClause .= " AND title LIKE ?";
            $params[] = "%" . trim($_GET['query']) . "%";
            $types .= "s";
        } elseif (isset($_GET['genre']) && !empty(trim($_GET['genre']))) {
            $whereClause .= " AND genre = ?";
            $params[] = trim($_GET['genre']);
            $types .= "s";
        }

        $sql = "SELECT * FROM MOVIES $whereClause";
        $stmt = $conn->prepare($sql);

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='movie-card'>";
                echo "<img src='" . htmlspecialchars($row['thumbnail']) . "' alt='Thumbnail'>";
                echo "<h3>" . htmlspecialchars($row['title']) . " (" . htmlspecialchars($row['release_year']) . ")</h3>";
                echo "</div>";
            }
        } else {
            echo "<p style='color: red;'>No results found.</p>";
        }

        echo "</div>";
    ?>
</body>
</html>
