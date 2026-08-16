<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Us | Master Era</title>
    <link rel="icon" type="image/png" href="images/main logo white.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="feedback.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="includes/header-footer.css?v=20260723">
</head>

<body>

    <!-- NAVBAR -->
    <?php include __DIR__ . '/includes/header.php'; ?>


    <section class="feedback-section">

        <div class="feedback-container">

            <h1>Client Feedback</h1>

            <p class="feedback-subtitle">
                We value your feedback and suggestions.
            </p>

            <form class="feedback-form" action="feedback_submit.php" method="POST">

                <input type="text" name="name" placeholder="Your Name" required>

                <input type="text" name="company" placeholder="Company Name">

                <select name="rating" required>
                    <option value="">Select Rating</option>
                    <option>⭐⭐⭐⭐⭐ Excellent</option>
                    <option>⭐⭐⭐⭐ Very Good</option>
                    <option>⭐⭐⭐ Good</option>
                    <option>⭐⭐ Average</option>
                    <option>⭐ Poor</option>
                </select>

                <textarea name="feedback" placeholder="Write your feedback..." rows="5" required></textarea>

                <button type="submit">
                    Submit Feedback
                </button>

            </form>

        </div>

    </section>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
</body>

</html>