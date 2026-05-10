<?php
// A2 Seviye İngilizce Test Soruları
$questions = [
    [
        "id" => 1,
        "question" => "Every morning, he _______ a cup of coffee.",
        "options" => ["drink", "drinks", "is drinking", "drank"],
        "answer" => "drinks"
    ],
    [
        "id" => 2,
        "question" => "What is the opposite of 'expensive'?",
        "options" => ["Cheap", "Fast", "Big", "Easy"],
        "answer" => "Cheap"
    ],
    [
        "id" => 3,
        "question" => "I _______ to London last year.",
        "options" => ["go", "gone", "went", "am going"],
        "answer" => "went"
    ],
    // Buraya diğer 17 soruyu yukarıdaki formatta ekleyebilirsin.
];

$score = 0;
$submitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submitted = true;
    foreach ($questions as $q) {
        $user_ans = $_POST['q' . $q['id']] ?? '';
        if ($user_ans === $q['answer']) {
            $score++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>A2 İngilizce Testi</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 20px auto; line-height: 1.6; background: #f4f4f4; }
        .quiz-container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .question { margin-bottom: 20px; padding: 10px; border-bottom: 1px solid #eee; }
        .result { padding: 15px; background: #e7f3fe; border-left: 6px solid #2196F3; margin-bottom: 20px; }
        button { background: #28a745; color: white; border: none; padding: 10px 20px; cursor: pointer; border-radius: 5px; }
    </style>
</head>
<body>

<div class="quiz-container">
    <h1>A2 İngilizce Pratik Testi</h1>

    <?php if ($submitted): ?>
        <div class="result">
            <strong>Sonuç:</strong> <?php echo count($questions); ?> soru üzerinden <?php echo $score; ?> doğru yaptın!
        </div>
    <?php endif; ?>

    <form method="post">
        <?php foreach ($questions as $q): ?>
            <div class="question">
                <p><strong>Soru <?php echo $q['id']; ?>:</strong> <?php echo $q['question']; ?></p>
                <?php foreach ($q['options'] as $option): ?>
                    <label>
                        <input type="radio" name="q<?php echo $q['id']; ?>" value="<?php echo $option; ?>" required>
                        <?php echo $option; ?>
                    </label><br>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
        <button type="submit">Testi Bitir</button>
    </form>
</div>

</body>
</html>
