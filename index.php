<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songify - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Songify Logo">
            <h1>Songify</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Browse</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Premium</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>Welcome to Songify</h2>
            <p>Your music world in one place. Stream, discover, and vibe with your favorite songs.</p>
            <button>Get Started</button>
        </section>

        <section class="playlist">
            <h3>Featured Playlists</h3>
            <div class="playlist-grid">
                <?php
                // Example array of playlists
                $playlists = [
                    ["name" => "Top Hits 2025", "image" => "https://via.placeholder.com/150"],
                    ["name" => "Chill Vibes", "image" => "https://via.placeholder.com/150"],
                    ["name" => "Workout Mix", "image" => "https://via.placeholder.com/150"],
                    ["name" => "Focus Flow", "image" => "https://via.placeholder.com/150"],
                ];

                foreach ($playlists as $playlist) {
                    echo '
                    <div class="card">
                        <img src="' . $playlist["image"] . '" alt="' . $playlist["name"] . '">
                        <p>' . $playlist["name"] . '</p>
                    </div>';
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2025 Songify. All rights reserved.</p>
    </footer>

</body>
</html>
