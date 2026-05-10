<?php
// A2 Seviye İngilizce Soruları Dizisi
$questions = [
    [
        "q" => "I ___ to the cinema every Friday.",
        "options" => ["am go", "go", "goes", "going"],
        "correct" => 1,
        "hint" => "Geniş zaman (Present Simple) yapısını hatırla."
    ],
    [
        "q" => "Where ___ your brother work?",
        "options" => ["do", "is", "does", "are"],
        "correct" => 2,
        "hint" => "Üçüncü tekil şahıs (He) için yardımcı fiil nedir?"
    ],
    // ... Diğer 18 soru bu yapıya eklenebilir
];

$score = 0;
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';

if ($submitted) {
    foreach ($questions as $index => $question) {
        if (isset($_POST["q$index"]) && $_POST["q$index"] == $question['correct']) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>A2 İngilizce Quiz</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .container { max-width: 600px; background: white; padding: 20px; border-radius: 8px; margin: auto; }
        .question { margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .result { font-weight: bold; color: green; font-size: 1.2em; text-align: center; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container">
    <h1>A2 İngilizce Pratik Testi</h1>
    
    <?php if ($submitted): ?>
        <div class="result">
            Sonuç: <?php echo $score; ?> / <?php echo count($questions); ?>
        </div>
        <p align="center"><a href="index.php">Tekrar Çöz</a></p>
    <?php else: ?>
        <form method="post">
            <?php foreach ($questions as $index => $question): ?>
                <div class="question">
                    <p><strong>Soru <?php echo $index + 1; ?>:</strong> <?php echo $question['q']; ?></p>
                    <?php foreach ($question['options'] as $key => $option): ?>
                        <label>
                            <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $key; ?>" required>
                            <?php echo $option; ?>
                        </label><br>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            <button type="submit">Cevapları Gönder</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>
