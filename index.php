<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportify</title>
    <link rel="icon" href="8bit-spotify.jpg" type="image/jpg" /> <!-- This adds the favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/stylesheet.css" />
</head>
<div>
    <div>
        <!-- Songs -->
        <?php 
            include 'songs.php';
        ?>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
        </script>
        <!--Ethan if  you see this make sure to center the div using the .Center-To-The-Right selector!-->
        <div class="Center-To-The-Right">
            <img src="data:image/jpeg;base64,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" alt="">
            <p>Playlist</p>
            <h1>On Repeat</h1>
            <p>Songs I can't get enough of right now!</p>
            <p>Created by Vivaan Rajpurohit, Ethan Estremera, and Hayley Layson</p>
        </div>

        </div>
        <div>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Duration</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($songs)): ?>
            <?php foreach ($songs as $index => $song): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td> <!-- Song number -->
                    <td><?php echo htmlspecialchars($song['title'] ?? 'N/A'); ?></td>
                    <td><?php echo htmlspecialchars($song['artist'] ?? 'N/A'); ?></td>
                    <td><?php echo htmlspecialchars($song['duration'] ?? 'N/A'); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" style="text-align: center;">No songs found!</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

        </div>
        <footer class="bg-dark text-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Song Title -->
        <div class="d-flex align-items-center">
            <div class="ms-3">
                <p class="mb-0"></p>
                <small></small>
            </div>
        </div>

        <!-- Media Controls -->
        <div class="d-flex align-items-center">
            <button class="btn btn-outline-light me-2">
                <i class="fas fa-step-backward"></i>
            </button>
            <button class="btn btn-light me-2">
                <i class="fas fa-play"></i>
            </button>
            <button class="btn btn-outline-light me-2">
                <i class="fas fa-step-forward"></i>
            </button>
        </div>

        <!-- Volume Control -->
        <div class="d-flex align-items-center">
            <i class="fas fa-volume-up me-2"></i>
            <input type="range" class="form-range" id="volumeControl" min="0" max="100" step="1" value="50">
        </div>
    </div>

    <!-- Progress Bar -->
    <div class="container mt-2">
        <input type="range" class="form-range" id="progressBar" min="0" max="100" step="1" value="0">
    </div>
</footer>

    </body>
</html>
